<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\ChatRoom;

class ChatController extends Controller
{
    public function index()
    {
        $user_id = 1;

        // ユーザーidと一致するPartnerを全てとってくる
        $your_partner_ids = ChatRoom::select('partner_id')->where('user_id', $user_id)->get();
        $your_partners = Partner::findMany($your_partner_ids);
        return view('chat/index', [
            'your_partners' => $your_partners,
        ]);
    }
}
