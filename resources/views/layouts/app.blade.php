<!doctype html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <title>Et3am</title>
    {{--<!-- Bootstrap 3.3.7 -->--}}
    <link rel="stylesheet" href="{{ asset('feed/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('feed/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('feed/css/font-awesome-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('feed/css/rtl.css') }}">
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
        .bodyContent{
            color:black ;
           margin: 100px;
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
        .custom{
            background-color: #85144b;
        }
    </style>


</head>
<body class="text-center">
<div id="app">
     <header>
         <div class="pos-f-t">
             <div class="{{ 'url' =='/'? 'collapsible':'collapse'}}" id="navbarToggleExternalContent">
                 <div class="bg-light p-4">
                     <h5 class="text-dark h4">اطعام</h5>
                     <span class="text-muted">{ ويطعمون الطعام على حبه مسكيناً ويتيماً وأسيرا ً}</span>
                 </div>
             </div>
             <nav class="navbar navbar-light custom">
                 @yield('nav')
             </nav>
         </div>

     </header>
     <main class="py-4">
     @yield('content')
     </main>
     <footer>

     </footer>
</div>



{{--<!-- jQuery 3 -->--}}
<script src="{{ asset('feed/js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('feed/js/popper.min.js') }}"></script>
{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="{{ asset('feed/js/bootstrap.min.js') }}"></script>
{{--<!--custom js -->--}}
<script src="{{ asset('feed/js/custom.js') }}"></script>

</body>
</html>