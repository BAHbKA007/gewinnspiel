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
        <link rel="stylesheet" href="/assets/css/main.css?v=8" />

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
        
        <meta name="application-name" content="Gastro Neustart">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Gastro Neustart">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
        <meta name="msapplication-config" content="favicons/browserconfig.xml?v=200521061320">
        <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png?v=200521061320">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png?v=200521061320">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-36x36.png?v=200521061320" sizes="36x36">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-48x48.png?v=200521061320" sizes="48x48">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-72x72.png?v=200521061320" sizes="72x72">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-96x96.png?v=200521061320" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-144x144.png?v=200521061320" sizes="144x144">
        <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png?v=200521061320" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png?v=200521061320" sizes="16x16">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png?v=200521061320" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png?v=200521061320" sizes="96x96">
        <link rel="shortcut icon" type="image/x-icon" href="/favicons/favicon.ico?v=200521061320">
        <meta name="msapplication-TileImage" content="mstile-150x150.png?v=200521061320">
        <meta name="msapplication-square70x70logo" content="mstile-70x70.png?v=200521061320">
        <meta name="msapplication-square150x150logo" content="mstile-150x150.png?v=200521061320">
        <meta name="msapplication-wide310x150logo" content="mstile-310x150.png?v=200521061320">
        <meta name="msapplication-square310x310logo" content="mstile-310x310.png?v=200521061320">
        <link href="/favicons/apple-touch-startup-image-320x460.png?v=200521061320" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-640x920.png?v=200521061320" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-640x1096.png?v=200521061320" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-748x1024.png?v=200521061320" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 1) and (orientation: landscape)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-750x1024.png?v=200521061320" media="" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-750x1294.png?v=200521061320" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-768x1004.png?v=200521061320" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 1) and (orientation: portrait)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-1182x2208.png?v=200521061320" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-1242x2148.png?v=200521061320" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-1496x2048.png?v=200521061320" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" rel="apple-touch-startup-image">
        <link href="/favicons/apple-touch-startup-image-1536x2008.png?v=200521061320" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" rel="apple-touch-startup-image">
        <link rel="manifest" href="/favicons/manifest.json?v=200521061320" />
        
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
                        <h1>
                            100.000,- EURO ZUM NEUSTART
                            DER STUTTGARTER GASTRONOMIE
                        </h1>
                        <ul class="actions">
                            <li><a href="#jump-action" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
                        </ul>
					</div>


				<!-- Header -->
					{{-- <header id="header">
						<a href="#nav" class="logo">Gastro Neustart</a>
					</header> --}}
                    
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
                            @if ($var['active'] == "Datenschutz" )
                            class="active"
                            @endif
                            ><a href="/Datenschutz">Datenschutz</a></li>
                            
                            <li 
                                @if ($var['active'] == "Impressum")
                                    class="active"
                                @endif
                            ><a href="/Impressum">Impressum</a></li>

                            <li 
                            @if ($var['active'] == "UeberUns" )
                                class="active"
                            @endif
                            ><a href="/Wir">über uns</a></li>						</ul>
						<ul class="icons">
							<li><a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/werner.ebert.stgt/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						</ul>
					</nav>

