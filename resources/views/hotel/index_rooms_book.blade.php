@extends('layouts.hotelapp')

@section('title','Hotel.Add')

@section('menubar')
    @parent
    部屋の予約ページ
@endsection

@section('content')

{{-- validate --}}
@if (count($errors) >0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- 追加フォーム --}}
<form action="/hotel/rooms/book" method="post">
  <table>
    <tr>
          <th>ID</th>
          <th>利用者名</th>
          <th>人数</th>
          <th>部屋タイプ</th>
          <th>部屋番号</th>
          <th>チェックイン時刻</th>
          <th>チェックアウト時刻</th>
          <th>予約</th>
      </tr>
  
  <form action="/hotel/rooms/book" method="POST">
        @csrf
  
        <tr>
          <input type="hidden" name="room_id" value="{{$form->room_id}}">
            <td><input type="hidden" name="id"></td>
            <td><input type="number"name="guests_id" min="0"></td>
            <td>
              <input type="number" name="number_of_people" min="0">
            </td>
            <td>{{$form->rooms->room_name}}</td>
            <td>{{$form->room_number}}</td>

            <td>
              <input type="date" name="checkin_date" >
            </td>
            <td>
              <input type="date" name="checkout_date">
            </td>
            <td><input type="submit" value="予約する"></td>
    </table>
</form>
@endsection