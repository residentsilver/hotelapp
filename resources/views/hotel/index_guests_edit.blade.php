@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の利用者を編集
@endsection

@section('content')

{{-- DBの内容を更新--}}
  <table>
    <tr>
        <th>ID</th>
        <th>利用者名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>更新</th>
    </tr>
<form action="/hotel/guests/edit" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$form->guests_id}}">
      <td>{{$form->guests_id}}</td>
          <td><input type="text" name="guests_name" value="{{$form->guests_name}}"></td>
          <td><input type="text" name="guests_address" value="{{$form->guests_address}}"></td>
          <td><input type="text" name="guests_tel" value="{{$form->guests_tel}}"></td>
          <td><input type="submit" value="send"></td>
      </tr>
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