@extends('layouts.helloapp')

@section('title','Hotel.Add')

@section('menubar')
    @parent
    新規作成ページ
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
<form action="/hotel/guests/add" method="post">
<table>
    @csrf
    <tr>
        <th>ID:</th>
        <td><input type="hidden" name="guests_id"></td>
    </tr>
    <tr>
        <th>name:</th>
        <td><input type="text" name="guests_name" value="{{old('guests_name')}}"></td>
    </tr>
    <tr>
        <th>price:</th>
        <td><input type="text" name="guests_address" value="{{old('guests_address')}}"></td>
    </tr>
    <tr>
        <th>price:</th>
        <td><input type="text" name="guests_tel" value="{{old('guests_tel')}}"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
    </tr>
@endsection