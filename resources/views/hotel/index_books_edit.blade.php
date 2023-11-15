@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の利用者を編集
@endsection

@section('content')
  <table>
  <tr>
        <th>ID</th>
        <th>利用者名</th>
        <th>人数</th>
        <th>チェックイン時刻</th>
        <th>チェックアウト時刻</th>
        <th>更新</th>
    </tr>

<form action="/hotel/books/edit" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$form->book_id}}">
      <tr>
          <td>{{$form ->book_id}}</td>
          <td>{{$form->guests->guests_name}}</td>
          <td>
            <input type="text" name="number_of_people" value="{{$form ->number_of_people}}">
          </td>
          <td>
            <input type="datetime" name="checkin_date" value="{{$form ->checkin_date}}">
          </td>
          <td>
            <input type="datetime" name="checkout_date" value="{{$form ->checkout_date}}">
          </td>
          <td><input type="submit" value="send"></td>
    </form>
</table>
        </tr>
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