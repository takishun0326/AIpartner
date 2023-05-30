<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        # exapmle のちのちユーザーIDをとってくるようにする TODO
        $user_id = 1;

        // ユーザーidと一致するPartnerを全てとってくる
        $your_partner_ids = ChatRoom::select('partner_id')->where('user_id', $user_id)->get();
        $your_partners = Partner::findMany($your_partner_ids);
        return view('chat/index', [
            'your_partners' => $your_partners,
        ]);
    }

    public function chat_with(int $partner_id)
    {
        # exapmle のちのちユーザーIDをとってくるようにする TODO
        $user_id = 1;

        # partner1件取得
        $partner = DB::table('partners')->where('id', $partner_id)->first();

        # $partner_id, $user_id から chat_room1件のidを特定→メッセージ検索
        $chat_room_id = DB::table('chat_rooms')->where('user_id', $user_id)->where('partner_id', $partner_id)->value('id');

        # 最大get_num件取得
        $get_num = 10;
        $messages = DB::table('messages')->orderBy('id', 'desc')->where('chat_room_id', $chat_room_id)->limit($get_num)->get();

        return view('chat/talk', [
            'lastname' => $partner->lastname,
            'firstname' => $partner->firstname,
            'messages_prop' => $messages,
        ]);
    }
}
