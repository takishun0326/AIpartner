@extends('layout')

@section('styles')

@endsection('styles')

@section('content')
<div class=talk-container>
    <div class=talk-header>
        {{ $lastname}} {{ $firstname }}
    </div>
    <div class="talk-body">
        <div class="talk-message-container">
            @foreach($messages_prop as $message_prop)
            <div class="message-container">
                <!-- パートナー側 -->
                @if($message_prop->is_user_send === 1)
                <div class="chat-icon-box">
                    <div class="chat-icon"></div>
                </div>
                <div class="message-box-partner">
                    {{ $message_prop->message }}
                </div>
                <!-- ユーザー側 -->
                @elseif($message_prop->is_user_send === 0)
                <div class="chat-icon-box">
                    <div class="chat-icon right"></div>
                </div>
                <div class="message-box-user right">
                    {{ $message_prop->message}}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection('content')