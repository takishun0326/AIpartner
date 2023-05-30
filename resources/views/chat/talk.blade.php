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
                @if($message_prop->is_user_send === 1)
                <div class="message-box-partner">
                    {{ $message_prop->message }}
                </div>
                @elseif($message_prop->is_user_send === 0)
                <div class="message-box-user">
                    {{ $message_prop->message}}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection('content')