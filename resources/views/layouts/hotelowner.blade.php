<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    body {font-size: 16pt; 
        color: #999; 
        margin: 0 auto; 
        width: 1000px;
        

    }
    h1 {font-size: 50pt ; 
        text-align: left; 
        color:rgba(0, 0, 255, 0.534);
        margin: auto auto; 
        letter-spacing: -4pt;
    }
        ul{
            font-size: 12pt;
        }
        hr{
            margin: 25px 100px ; 
            border-top: 1px dashed #ddd;
        }
        .manutitle {
            font-size: 14pt; 
            font-weight: bold;
            margin: 0px;
        }
        .content {
            margin: 10px;
        }
        .footer {
            text-align: right;
            font-size: 10pt;
            margin: 0px;
        border-bottom: solid 1px #ccc;
        color: #ccc;
        }
        th {
            background-color: #854be2;
            color: fff;
            padding: 5px 10px;
        }

        td{
            border: solid 1px #854be2;
            color: #999;
            padding: 5px 10px;
        }
        
        td.id{
            width: 20px;
            text-align: center;
        }
        
        input.del{
            margin-top: 15px;
        }

        input.add{
            margin-left:500px; 
        }
        .selectbox-002 {
    position: relative;
}

.selectbox-002::before,
.selectbox-002::after {
    position: absolute;
    content: '';
    pointer-events: none;
}

.selectbox-002::before {
    right: 0;
    display: inline-block;
    width: 2.8em;
    height: 2.8em;
    border-radius: 0 3px 3px 0;
    background-color: #2589d0;
    content: '';
}

.selectbox-002::after {
    position: absolute;
    top: 50%;
    right: 1.4em;
    transform: translate(50%, -50%) rotate(45deg);
    width: 6px;
    height: 6px;
    border-bottom: 3px solid #fff;
    border-right: 3px solid #fff;
    content: '';
}

.selectbox-002 select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    min-width: 230px;
    height: 2.8em;
    padding: .4em 3.6em .4em .8em;
    border: 2px solid #2589d0;
    border-radius: 3px;
    color: #333333;
    font-size: 1em;
    cursor: pointer;
}

.selectbox-002 select:focus {
    outline: 1px solid #2589d0;
}


</style>
</head>
<body>
    <h1><a href="/hotel/rooms">ホテルページ</a></h1>

    @section('menubar')

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <a href="/hotel/index">管理者トップ</a>
    <a href="/hotel/guests">利用者一覧</a>
    <a href="/hotel/books">予約一覧</a>
    <a href="/hotel/room_masters">部屋マスター</a>
    <a href="/login">ログイン</a>
    <div>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('ログアウト') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    </nav>
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
</body>
</html>