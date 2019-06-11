<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit-icons.min.js"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .uk-label{
            display: block;

            margin: 10px;
        }
        form{
            width: 300px;
        }
        .uk-input{
            width: 60%;
            margin-left: 10px;
        }

        .uk-select{
            width: 200px;
            margin-left: 20px;
        }
        .uk-number{
            padding: 10px;
            width: 50px;
        }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Спасибо за Вашу заявку!
        </div>

        <table class="uk-table">


            <tbody>
            <tr>
                <td>Заказ на имя:</td>
                <td>{{$client->FIO}}</td>
            </tr>
            <tr>
                <td>Номер маршрута:</td>
                <td>{{$route->id}}</td>
            </tr>
            <tr>
                <td>Маршрут:</td>
                <td>{{$route->country }} - {{$route->city }}</td>
            </tr>
            <tr>
                <td>Pейс:</td>
                <td>{{$flight1->flight_number }}
                    Дата и время вылета - {{$flight1->date_and_time_of_flight}}</td>
            </tr>

            <tr>
                <td>Отель:</td>
                <td>{{$hotel->hotel_name }} Звезд - {{$hotel->stars}}</td>
            </tr>
            </tbody>
        </table>



    </div>
</div>
</body>