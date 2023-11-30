@extends('layouts.hotelowner')

<style>
  .btn-lg{
    margin-left:60%;
  }
</style>

@section('title','Hotel.index')

@section('menubar')
    @parent
@endsection

@section('content')
{{-- @if(Auth::check())
<p>ログインユーザ: {{$user->name . '('. $user->email . ')'}}</p>

@else
@endif
--}}

<form action="/hotel/guests/restore" method="post"> 
  @csrf
  <div class="alert alert-light" role="alert">
<p>削除した利用者を本当に復元しますか？</p>
<input type="submit" value="実行する">
  </div>
</form>

@endsection