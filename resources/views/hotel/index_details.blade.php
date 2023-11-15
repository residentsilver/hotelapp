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
        <th>利用者名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>人数</th>
        <th>部屋タイプ</th>
        <th>部屋番号</th>
        <th>チェックイン</th>
        <th>チェックアウト</th>
        <th>宿泊料金</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->book_detail_id}}</td>
          <td>{{$item ->book->guests->guests_name}}</td>
          <td>{{$item ->book->guests->guests_address}}</td>
          <td>{{$item ->book->guests->guests_tel}}</td>
          <td>{{$item ->book->number_of_people}}</td>
          <td>{{$item->room->rooms->room_name}}</td>
          <td>{{$item->room->room_number}}</td>
          <td>{{$item->book->checkin_date}}</td>
          <td>{{$item->book->checkout_date}}</td>
          <td>{{$item ->stay_price}}</td>

        </tr>
    @endforeach
</table>
</table>
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