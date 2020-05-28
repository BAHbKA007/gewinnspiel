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

				$('#cookie_footer').fadeOut();
			});

			$("#submit").on('click', function () {
				if (!$('#einverstanden').is(':checked')) {
					$("#zustimmung").show();
				}
			});

			$("#einverstanden").on('click', function () {
				if (!$('#einverstanden').is(':checked')) {
					$("#zustimmung").show();
				} else {
					$("#zustimmung").hide();
				}
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