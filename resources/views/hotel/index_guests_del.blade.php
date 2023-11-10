@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の利用者を表示
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
        <th>削除</th>
    </tr>

        <tr>
          <form action="/hotel/guests/del" method="post">
            <table>
                @csrf
                <input type="hidden" name="id" value="{{$form->id}}">
                <tr>
                    <th>name:</th>
                    <td>{{$form->guests_name}}</td>
                </tr>
                <tr>
                    <th>address:</th>
                    <td>{{$form->guests_address}}</td>
                </tr>
                <tr>
                    <th>tel:</th>
                    <td>{{$form->guests_tel}}</td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="send"></td>
                </tr>
            </table>
            </form>
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
<form action="book\add" method="post">
  @csrf
  <tr>
    <td class="id"><input type="hidden" name="id"></td>
    <td><input type="text" name="name" value="{{old('name')}}"></td>
    <td><input type="number" name="price" value="{{old('price')}}"></td>
</tr>
</table>
      <input class="add" type="submit" value="追加ボタン">
</form>


@endsection