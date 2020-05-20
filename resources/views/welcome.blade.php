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

				@if ($var['page'] == 'start')
				<!-- Intro -->
					<div id="intro">
                        <img style="max-width:200%; max-height:100%;" src="/images/logo.png" alt="">
                        {{-- <ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul> --}}
					</div>
				@endif

				<!-- Header -->
					<header id="header">
						<a href="#nav" class="logo">Gastro Neustart</a>
					</header>
					

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="/">Gewinnspiel</a></li>
							<li><a href="elements.html">Teilnahmebedingungen</a></li>
							<li><a href="generic.html">Impressum</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						@if ($var['page'] == 'start')
						<!-- Form -->
							<h2>Postleitzahl</h2>
							
							<form method="post" action="/">
								@csrf
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<input type="number" name="plz" id="plz" value="" placeholder="Postleitzahl" min="1001" max="99998" />
									</div>
									<!-- Break -->
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="prüfen" class="primary" /></li>
										</ul>
									</div>
								</div>
							</form>
						@endif

						@if ($var['page'] == 'formular')

							<!-- Gewinnspiel -->
							<h2>Gratulation! Sie können mitmachen... oder so ähnlich</h2>

							<form method="post" action="#">
								<div class="row gtr-uniform">

									<!-- Ansprechpartner -->
									<div class="col-2 col-12-xsmall">
										<select name="anrede" id="anrede">
											<option value="" selected disabled hidden>Anrede</option>
											<option value="1">keine Angabe</option>
											<option value="2">Frau</option>
											<option value="3">Herr</option>
										</select>
									</div>
									<div class="col-5 col-12-xsmall">
										<input type="text" name="vorname" id="vorname" value="" placeholder="Vorname" />
									</div>
									<div class="col-5 col-12-xsmall">
										<input type="text" name="nachname" id="nachname" value="" placeholder="Nachname" />
									</div>

									<!-- Firma -->
									<div class="col-12 col-12-xsmall">
										<input type="text" name="fiirma" id="firma" value="" placeholder="Firma" />
									</div>

									
									<!-- Break -->
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High</label>
									</div>
									<!-- Break -->
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">I am a human</label>
									</div>
									<!-- Break -->
									<div class="col-12">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<!-- Break -->
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						@endif
						

					</div>

				<!-- Footer -->
					{{-- <footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer> --}}

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>