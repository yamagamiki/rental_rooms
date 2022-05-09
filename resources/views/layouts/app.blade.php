<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>貸し会議室予約システム</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
  <div id="app">
    @include('layouts/header')
    <main>
      @yield('content')
    </main>
  </div>
</body>

</html>
