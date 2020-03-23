<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('img/virus.png')}}" type="image/icon" sizes="16x16">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <title>Corona Virus Tracker App | 2020 </title>
</head>
<script>
    $(document).ready(function() {
       // $('.count-numbers').text('cholo');
       $(".count-numbers").counterUp({delay:15,time:1500});
});
</script>
<body>
    <div id='app'></div>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>