<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    .all {
      padding: 10px;
      /*background-color: red;*/
    }

    .header {
      /*background-color: greenyellow;*/
      position: relative;
      height: 60px;
    }

    .title {
      font-weight: bold;
      display: inline-block;
      position: absolute;
      margin-left: 30px;
    }

    .link {
      /*background-color: blue;*/
      display: inline-block;
      position: absolute;
      right: 0;
      margin-top: 20px;
    }

    .card {
      background-color: #EEEEEE;
      height: 400px;
      margin-top: 0px;
      text-align: center;
      padding-bottom: 30px;
    }

    .hooter {
      text-align: center;
      margin-top: 5px;
    }

    svg.w-5.h-5 {
      /*paginateメソッドの矢印の大きさ調整のために追加*/
      width: 30px;
      height: 30px;
    }
  </style>
</head>

<body>
  <div class="all">
    <div class=header>
      <h1 class="title">Atte</h1>
      <div class="link">
        @yield('header')
      </div>
    </div>
    <div class="card">
      @yield('card')
    </div>
    <p class=hooter>Atte,inc</p>
  </div>
</body>

</html>