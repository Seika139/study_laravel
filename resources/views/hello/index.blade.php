<html>
  <head>
    <style>
      body {font-size:16pt; color:#999;}
      h1{font-size:100pt; text-align:right; color:#f6f6f6;
        margin: -20px 0px -30px 0px; letter-spacing:-4pt;}
      ul { font-size:12pt;}
      hr {margin:25px 100px; border-top:1px dashed #ddd;}
      .menutitle {font-size:14px; font-weight:bold; margin: 0px;}
      .content {margin:10px;}
      .footer {text-align:right;font-size:10pt;margin:10px;
        border-bottom:1px solid #ccc;color:#ccc;}
    </style>
    <title>@yield('title')</title>
  </head>
  <body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>
    <form action="/hello" method="post">
      {{ csrf_field() }}
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>
