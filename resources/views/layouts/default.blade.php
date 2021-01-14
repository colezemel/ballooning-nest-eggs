<!doctype html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
</head>
<body>
<div>
   <header>
       @include('includes.header')
   </header>
   <div>
       @yield('content')
   </div>
</div>
</body>
</html>