@extends('layouts.hotelapp')
@section('title','Hotel.index')

@section('menubar')
    @parent
    利用者メニュー
@endsection

@section('content')
<ul>
  <li>
    <a href="/hotel/rooms">部屋一覧</a>
  </li>
  <li>
    <a href="/hotel/details">予約明細</a>
  </li>
</ul>
@endsection