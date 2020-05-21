<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <title>{{config('app.name')}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">


				<!-- Intro -->
					<div id="intro">
                        <img style="max-width:120%; max-height:100%;" src="/images/logo.png" alt="">
                        {{-- <ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul> --}}
					</div>


				<!-- Header -->
					<header id="header">
						<a href="#nav" class="logo">Gastro Neustart</a>
					</header>
                    
				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
                            <li 
                            @if ( $var['active'] == "Gewinnspiel" )
                            class="active"
                            @endif
                            ><a href="/">Gewinnspiel</a></li>
                            <li                                 
                            @if ($var['active'] == "Teilnahmebedingungen")
                            class="active"
                            @endif
                            ><a href="/Teilnahmebedingungen">Teilnahmebedingungen</a></li>
                            <li 
                                @if ($var['active'] == "Datenschutz" || $var['active'] == "Impressum")
                                    class="active"
                                @endif
                            ><a href="/Impressum">Impressum</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.werner-ebert.de/" class="icon brands fa-dribbble"><span class="label">Web</span></a></li>
						</ul>
					</nav>

