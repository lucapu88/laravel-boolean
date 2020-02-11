<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico" />
    <title>Il corso per diventare web developer</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  </head>
  <body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="{{asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
