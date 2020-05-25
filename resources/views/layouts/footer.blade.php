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
                    <ul><li>&copy;<a href="https://www.werner-ebert.de" target="_blank">Werner Ebert GmbH</a></li></ul>
				</div>
				
			</div>

			@if ( Session::get('CookieAccepted') != 1)
	
				<div id="cookie_footer" class="cookie">
					<div class="cookie_box">
						<div class="right">
							<a id="cookie" href="#" class="right button small primary">akzeptieren</a>
						</div>
					</div>
					<div class="left">
						Diese Website verarbeitet Informationen über Ihren Besuch unter Einsatz von Cookies, um die Leistung der Website zu verbessern. Genauere Informationen entnehmen Sie bitte
						der <a style="color: #f15a23" href="/Datenschutz" target="_blank">Datenschutzerklärung</a>.
					</div>
				</div>
				
			@endif

    <!-- Scripts -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery.scrollex.min.js"></script>
        <script src="/assets/js/jquery.scrolly.min.js"></script>
        <script src="/assets/js/browser.min.js"></script>
        <script src="/assets/js/breakpoints.min.js"></script>
        <script src="/assets/js/util.js"></script>
        <script src="/assets/js/main.js"></script>
        <script>
			$("#cookie").on('click', function () {
				var that = this;
				$.ajax({
					type: "POST",
					url:'/akzeptieren',
					data: {
						"_token": "{{ csrf_token() }}"
					}
				});

				console.log('clicked');

				$('#cookie_footer').fadeOut();
			});

            $(document).ready(function () {
                
                @isset($var['not_passed'])
                    $('html, body').animate({
                        scrollTop: $('#main').offset().top
                    }, 'slow');
                @endisset

                @if(isset($var['page']) && $var['page'] == 'formular')
                    $('html, body').animate({
                        scrollTop: $('#main').offset().top
                    }, 'slow');
				@endif
				

            });
        </script>
</body>
</html>