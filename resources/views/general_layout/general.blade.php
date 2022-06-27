<?php
//Запускаем сессию

session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <script src="/js/app.js"></script>
    <!-- <script src="JS/jquery.maskedinput.js"></script> -->
    <!-- <script src="JS/jquery.inputmask.js"></script> -->
    <title>MyGallery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/mystyle.css">   
    <link rel="shortcut icon" href="main.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content">

        @include('includes.header')

        @include('includes.messages')
        
        @yield('main_content')

    </div>
    <script src="/js/all_js.js"></script>
</body>

@include('includes.footer')

</html>