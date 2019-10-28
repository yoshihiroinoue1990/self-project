<html>
<head>
  <title>@yield('title')</title>
  <style>
  body { font-size:16pt; color:#999; margin:5px;}
  h1 { font-size:50pt; text-align:right; color:#808080; margin:20px 20px -30px 20px; letter-spacing: -4pt; position: relative;/*←相対位置*/}
  ul { font-size:12pt}
  hr { margin:25px 100px; border-top: 1px dashed #ddd; }
  .menutitle {font-size: 40px; font-weight: bold; margin:0px;}
  .content{ text-align: center }
  .footer{ text-align: right;font-size: 12pt;margin:10px; border-bottom: solid 1px #ccc; color:#ccc;}
  th {background-color:#999; color:fff; padding:5px 10px;}
  td {border: solid 1px #aaa; color:#999; padding 5px 10px; }
  table{ width: 1000px;}
.wrapper{
    min-height: 100vh;
    position: relative;/*←相対位置*/
    padding-bottom: 120px;/*←footerの高さ*/
    box-sizing: border-box;
}

footer{
    width: 100%;
    background-color: #ccc;
    text-align: center;
    padding: 30px 0;
    position: absolute;/*←絶対位置*/
    bottom: 0; /*下に固定*/
}
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
  <header class="site-header">
    <h1>@yield('title')</h1>
  </header>
@section('menubar')
<ul>
  @if(Auth::check())
  <p class="menutitle">Menu</p>
  <div>@show</div>
  <form action="/logout" method="post">
    @csrf
  <p><button type="show">登録データ参照</button></p>
  <p><button type="submit">ログアウト</button></p>
  </form>
  @else

  @endif
</ul>
<hr size="1">
<div class="content">
  @yield('content')
</div>
<footer>
  @yield('footer')
</footer>
</div>
</body>
</html>
