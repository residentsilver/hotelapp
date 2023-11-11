@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    部屋を表示
@endsection


@section('content')
{{-- DBの内容を表示--}}
  <table>
    <tr>
        <th>ID</th>
        <th>部屋タイプ</th>
        <th>部屋番号</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->room_id}}</td>
          <td>{{$item ->rooms->room_name}}</td>
          <td>{{$item ->room_number}}</td>
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