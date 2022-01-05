<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Afracode</title>
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="">
    <!--
    ========================================================================
    EXCLUSIVE ON themeforest.net
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Template Name   : ... - ...
    Author          : AfraCode
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Copyright (c) 2020 - AfraCode
    ========================================================================
    -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/afracode/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="/afracode/assets/css/styles.css" />
    <link rel="stylesheet" href="/afracode/assets/css/skins/skin-1.css" />
</head>

<body>

<!--Header-->
@include('layouts.partials.afracode.header')
<!--/-->
<!--Sidenav-->
@include('layouts.partials.afracode.sidenav')
<!--/-->

@yield('content')

<!--Footer-->
@include('layouts.partials.afracode.footer')
<!--/-->
<!--Scripts-->
<script src="/afracode/assets/js/jquery.min.js"></script>
<script src="/afracode/assets/js/plugins.min.js"></script>
<script src="/afracode/assets/js/main-scripts.js"></script>
<!-- <script src="/afracode/assets/js/.js"></script> -->
<!-- <script src="/afracode/assets/js/demo.js"></script> -->
<!--/-->
</body>

</html>
