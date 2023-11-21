@extends('layouts.hotelowner')

@section('title','Hotel.index')

@section('menubar')
    @parent
    管理者画面
@endsection


@section('content')
@if(Auth::check())
<p>ログインユーザ: {{$user->name . '('. $user->email . ')'}}</p>
@else
@endif

<ul>
  <li>
    <a href="/hotel/index">管理者トップ</a>
  </li>
  <li>
    <a href="/hotel/guests">利用者一覧</a>
  </li>
  <li>
    <a href="/hotel/books">予約一覧</a>
  </li>
  <li>
  <a href="/hotel/room_masters">部屋マスター</a>
  <li>
    <div>
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('ログアウト') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
  </div>
  </li>
</li>
</ul>
@endsection