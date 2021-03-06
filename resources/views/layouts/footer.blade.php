				<!-- Copyright -->
                <div id="copyright">
					<ul>
						<li><a href="https://www.werner-ebert.de" target="_blank">&copy; Werner Ebert GmbH 2020</a></li>
						<li><a href="/Impressum">IMPRESSUM</a></li>
					</ul>
				</div>
				
			</div>

			@if ( Session::get('CookieAccepted') != 1)
	
				<div id="cookie_footer" class="cookie">
					<div class="cookie_box">
						<div class="right">
							<a id="cookie" class="right button small primary">akzeptieren</a>
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

			function showForm(art) {
				if (art === 'form_kunde') {
					$('#form_kunde').fadeIn();
					$('#form_neukunde').hide();

				} else {

					$('#form_neukunde').fadeIn();
					$('#form_kunde').hide();	
				}
			}

			$("#cookie").on('click', function () {
				var that = this;
				$.ajax({
					type: "POST",
					url:'/akzeptieren',
					data: {
						"_token": "{{ csrf_token() }}"
					}
				});

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
		@isset($var['double_ustid'])
		<script>
			$("#ustid").focus(); 
			document.getElementById("ustid").scrollIntoView();
		</script>
		@endisset
</body>
</html>