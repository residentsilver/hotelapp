@extends('layouts.hotelapp')
@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の利用者を削除
@endsection

@section('content')
{{-- DBの内容を削除--}}
  <table>
    <tr>
        <th>ID</th>
        <th>利用者名</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>削除</th>
    </tr>
          <form action="/hotel/guests/del" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$form->guests_id}}">
                    <td>{{$form->guests_id}}</td>
                    <td>{{$form->guests_name}}</td>
                    <td>{{$form->guests_address}}</td>
                    <td>{{$form->guests_tel}}</td>
                    <td><input type="submit" value="send"></td>
            </form>
        </tr>
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