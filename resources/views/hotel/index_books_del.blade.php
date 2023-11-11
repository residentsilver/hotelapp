@extends('layouts.hotelapp')
@section('title','Hotel.index')

@section('menubar')
    @parent
    登録中の予約内容を削除
@endsection

@section('content')
{{-- DBの内容を削除--}}
  <table>
  <tr>
        <th>ID</th>
        <th>利用者名</th>
        <th>人数</th>
        <th>チェックイン時刻</th>
        <th>チェックアウト時刻</th>
        <th>更新</th>
    </tr>

          <form action="/hotel/books/del" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$form->book_id}}">
                    <td>{{$form->book_id}}</td>
                    <td>{{$form->guests->guests_name}}</td>
                    <td>{{$form->number_of_people}}</td>
                    <td>{{$form->checkin_date}}</td>
                    <td>{{$form->checkout_date}}</td>
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