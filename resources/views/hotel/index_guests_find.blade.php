@extends('layouts.hotelapp')
@section('title','Hotel.index')



@section('menubar')
    @parent
    検索結果を表示
@endsection

{{-- 検索結果を表示している --}}
@section('content')
    <form action="/hotel/guests/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
    </form>
    @if (isset($item))
    <table>
        <tr>
            <th>ID</th>
            <th>利用者名</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        @foreach($item as $guests)
            <tr>
                <td>{{$guests->guests_id}}</td>
                <td>{{$guests->guests_name}}</td>
                <td>{{$guests->guests_address}}</td>
                <td>{{$guests->guests_tel}}</td>
            </tr>
        @endforeach
    </table>
@endif
@endsection