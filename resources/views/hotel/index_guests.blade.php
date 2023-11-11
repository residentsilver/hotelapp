@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の利用者を表示
@endsection

@section('content')
<p>登録者の名前を入力して検索できる。</p>
<form action="/hotel/guests/find" method="post">
  @csrf
  <input type="text" name="input" value="">
  <input type="submit" value="find">
  </form>

{{-- DBの内容を表示 更新　削除のボタン併設--}}
  <table>
    <tr>
        <th>ID</th>
        <th>利用者名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>予約一覧</th>
        <th>更新</th>
        <th>削除</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->guests_id}}</td>
          <td>{{$item ->guests_name}}</td>
          <td>{{$item ->guests_address}}</td>
          <td>{{$item ->guests_tel}}</td>
<!-- hasmany箇所 -->
          <td>@if ($item->Hotel_books !=null)
            <table width="100%">
              <tr>
              @foreach($item->Hotel_books as $obj)
                <td>{{$obj->checkin_date}}</td>
              </tr>
              @endforeach
              </table>
              @endif
          </td>

          <td><a href="/hotel/guests/edit?id={{$item ->guests_id}}">更新</a></td>
          <td><a href="/hotel/guests/del?id={{$item ->guests_id}}">削除</a></td>
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

{{--追加フォーム--}}
<form action="/hotel/guests/add" method="post">
  @csrf
  <tr>
    <td class="id"><input type="hidden" name="guests_id"></td>
    <td><input type="text" name="guests_name" value="{{old('guests_name')}}"></td>
    <td><input type="text" name="guests_address" value="{{old('guests_address')}}"></td>
    <td><input type="text" name="guests_tel" value="{{old('guests_tel')}}"></td>
</tr>
</table>
      <input class="add" type="submit" value="追加ボタン">
</form>


@endsection