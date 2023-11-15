@extends('layouts.hotelapp')
@section('title','Hotel.books')

@section('menubar')
    @parent
    予約内容を表示
@endsection


@section('content')
{{-- <p>名前を入力して予約状況を検索できる。</p>
<form action="/hotel/books/find" method="post">
  @csrf
  <input type="text" name="input" value="">
  <input type="submit" value="find">
  </form> --}}

{{-- DBの内容を表示 更新　削除のボタン併設--}}

  <table>
    <tr>
        <th>ID</th>
        <th>利用者名</th>
        <th>人数</th>
        <th>チェックイン時刻</th>
        <th>チェックアウト時刻</th>
        <th>更新</th>
        <th>削除</th>
    </tr>

    @foreach ($items as $item)
        <tr>
          <td>{{$item ->book_id}}</td>
          <td>{{$item ->guests->guests_name}}</td>
          <td>{{$item ->number_of_people}}</td>
          <td>{{\Carbon\Carbon::parse($item->checkin_date)->format('Y-m-d')}}</td>
            <td>{{\Carbon\Carbon::parse($item->checkout_date)->format('Y-m-d')}}</td>
          <td><a href="/hotel/books/edit?id={{$item ->book_id}}">更新</a></td>
          <td><a href="/hotel/books/del?id={{$item ->book_id}}">削除</a></td>
        </tr>
    @endforeach
</table>
<table>
  
  <!-- {{-- validateしている --}}
@if (count($errors) >0)
  <div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
@endif -->

<!-- {{--追加フォーム--}}
<form action="book\add" method="post">
  @csrf
  <tr>
    <td class="id"><input type="hidden" name="id"></td>
    <td><input type="text" name="name" value="{{old('name')}}"></td>
    <td><input type="number" name="price" value="{{old('price')}}"></td>
</tr>
</table>
      <input class="add" type="submit" value="追加ボタン">
</form> -->


@endsection