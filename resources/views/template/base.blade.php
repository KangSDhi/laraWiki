<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"></link>
</head>
<body>
	<nav class="navbar navbar-expand-lg " style="background-color:#278ab0 ;">
		<a class="navbar-brand" href="{{ route('main') }}" style="color: #eaeae0;">T-Bucket</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item active">
			  <a class="nav-link" href="{{ route('tentang') }}" style="color: #eaeae0;">Tentang </a>
			</li>
		  </ul>
		</div>
        <div class="d-inline">
            <div class="btn-group" role="group">
                <a href="{{ route('login') }}" class="btn" style="background-color: #1dc690">Masuk</a>
                
            </div>
        </div>
	  </nav>
	@yield('content')

<script src="{{ asset('js/jquery.slim.min.js') }}"> </script>
<script src="{{ asset('js/popper.min.js') }}"> </script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>


</body>
</html>
