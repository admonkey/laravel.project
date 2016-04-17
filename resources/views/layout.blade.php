<?php
$path_web_root = dirname($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href="{{ $path_web_root }}{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">

    @yield('header')

</head>

<body>

    @yield('content')

</body>

    @yield('footer')

</html>
