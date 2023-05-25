@extends('layout')

@section('styles')

@endsection('styles')

@section('content')
<div class="wrap-chats">
    @foreach($your_partners as $your_partner)
    <div class="wrap-chats-child">
        <div class="chats-child-icon">
            <img class="message-icon" src="{{asset('storage/sample.jpg')}}">
        </div>
        <div class="chats-child-context">
            <div class="message-icon-name">{{ $your_partner->lastname }} {{$your_partner->firstname}}</div>
            <div class="message-small-profile">{{ $your_partner->age }}</div>
            <div class="last-message">{{ $your_partner->introduction }}</div>
        </div>
    </div>
    @endforeach
</div>
@endsection('content')