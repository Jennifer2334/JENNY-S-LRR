<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lab Report Repository') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body>
    
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	Lab Report Repository
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="#">Portals</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personnel <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Students</a></li>
							<li><a href="#">Professors</a></li>
							<li><a href="#">Staff</a></li>
						</ul>
					</li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 class="title-green">Lab Report Repository</h1>
                <p></p>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register Now</a>
            </div>
        </div>
    </header>
    
    <footer class="page-footer">
    
        <div class="contact">
        	<div class="container">
				<h2 class="section-heading">Contact Us</h2>
				<p><span class="glyphicon glyphicon-earphone"></span><br> +86(131)000000</p>
				<p><span class="glyphicon glyphicon-envelope"></span><br> admin@zjnu.com</p>
        	</div>
        </div>
        	
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Project Management 2019</p>
        	</div>
        </div>
        
    </footer>

</body>

