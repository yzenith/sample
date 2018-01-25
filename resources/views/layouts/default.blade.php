<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Sample') -- Sam Yan's Project</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
	@include('layouts._header')

	<div class="container">
          <div class="col-md-offset col-md-10">
    	   @include('shared._messages')
           @yield('content')
           @include('layouts._footer')
          </div>
	</div>
        
        <script src="/js/app.js"></script>
  </body>
</html>
