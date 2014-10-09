<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    @section('head')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="js/responsive-nav.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55618605-1', 'auto');
  ga('send', 'pageview');
  </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @show
</head>
<body>
		@yield('body')
</body>
</html>