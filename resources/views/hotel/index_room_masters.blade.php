@extends('layouts.hotelapp')

@section('title','Hotel.index')

@section('menubar')
    @parent
    部屋マスターを表示
@endsection


@section('content')
{{-- DBの内容を表示 --}}

  <table>
    <tr>
        <th>ID</th>
        <th>部屋タイプ</th>
        <th>宿泊可能人数</th>
        <th>部屋番号</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->room_type_id}}</td>
          <td>{{$item ->room_name}}</td>
          <td>{{$item ->room_stay_people}}</td>
<!-- hasmany箇所 -->
<td>@if ($item->Hotel_rooms !=null)
            <table width="100%">
              <tr>
              @foreach($item->Hotel_rooms as $obj)
                <td>{{$obj->room_number}}</td>
              </tr>
              @endforeach
              </table>
              @endif
          </td>
        </tr>
    @endforeach
</table>
<table>
  
  {{-- validateしている --}}
<!-- @if (count($errors) >0)
  <div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
@endif -->


@endsection