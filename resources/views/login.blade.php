<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<!-- <div id="app">
    <root>aaaa</root>
</div>
<ul id="demo">
    <li v-for="item in items">
    </li>
</ul> -->

<div id="app">
   <login-component></login-component>
</div>

<!-- <script src="/js/app.js"></script> -->
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
