<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="" id="app">

      <Myheader></Myheader>
      <div class="container">
        <router-view></router-view>
      </div>
      <Myfooter></Myfooter>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
