@extends('layouts.hotelapp')
@section('title','Hotel.index')

@section('menubar')
    @parent
    予約明細を表示
@endsection


@section('content')
<!-- <p>登録者の名前を入力して検索できる。</p>
<form action="/hotel/details/find" method="post">
  @csrf
  <input type="text" name="input" value="">
  <input type="submit" value="find">
  </form> -->

{{-- DBの内容を表示--}}

  <table>
    <tr>
        <th>ID</th>
        <th>予約</th>
        <th>部屋</th>
        <th>宿泊日</th>
        <th>宿泊料金</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->book_id}}</td>
          <td>{{$item ->book->book_id}}</td>
          <td>{{$item ->room->room_id}}</td>
          <td>{{$item ->stay_days}}</td>
          <td>{{$item ->stay_price}}</td>
        </tr>
    @endforeach
</table>
<table>
  
  {{-- validateしている --}}
@if (count($errors) >0)
  <div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
@endif


@endsection