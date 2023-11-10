@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の利用者を編集
@endsection

@section('content')
{{-- <p>本の名前を入力して検索できる。</p>
<form action="/book/find" method="post">
  @csrf
  <input type="text" name="input" value="">
  <input type="submit" value="find">
  </form> --}}

{{-- DBの内容を表示 更新　削除のボタン併設--}}
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
      <tr>
          <th>name:</th>
          <td><input type="text" name="guests_name" value="{{$form->guests_name}}"></td>
      </tr>
      <tr>
          <th>address:</th>
          <td><input type="text" name="guests_address" value="{{$form->guests_address}}"></td>
      </tr>
      <tr>
          <th>tel:</th>
          <td><input type="text" name="guests_tel" value="{{$form->guests_tel}}"></td>
      </tr>
      <tr>
          <th></th>
          <td><input type="submit" value="send"></td>
      </tr>
    </form>
</table>
          {{-- <form action="book/edit" method="post">
            @csrf
            <td class="id">{{$item ->id}}</td>
            <td><input type="text" name="name" value="{{$item ->name}}"></td>
            <td><input type="number" name="price" value="{{$item ->price}}"></td>
            <td>
                <input type="hidden" name="id" value="{{$item->id}}">
              <input type="submit" value="更新する">
            </form>
            </td>
            <td class="del">
              <form action="book/del" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
              <input class="del" type="submit" value="削除する">
            </form></td> --}}
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

{{--追加フォーム--}}
{{-- <form action="book\add" method="post">
  @csrf
  <tr>
    <td class="id"><input type="hidden" name="id"></td>
    <td><input type="text" name="name" value="{{old('name')}}"></td>
    <td><input type="number" name="price" value="{{old('price')}}"></td>
</tr>
</table>
      <input class="add" type="submit" value="追加ボタン">
</form> --}}


@endsection