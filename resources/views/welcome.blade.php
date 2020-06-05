@include('layouts/header')

<!-- Main -->
<div id="main" class="cover blur-in">
	<section class="post" id="jump-action">
		@if ($var['page'] == 'start')
		<!-- Form -->
			<div>
				@if(isset($var['not_passed']))
					<h2>Wir wollen die Region stärken.
						Leider befindest Du Dich außerhalb des definierten Teilnahemgebiets.
						Die genauen Teilnahmebedingungen findest Du hier: <a href="/Teilnahmebedingungen">Link</a>
					</h2>	
					<h2>
						Natürlich kannst Du die Seite gerne an deine Kollegen aus dem Gebiet weiterempfehlen, damit sie die Chance nutzen können.
					</h2>
					<span class="image fit" style="margin-left: auto;margin-right: auto;width: 100%;max-width: 600px;">
						<img src="images/Vorlag-600x600px-Karte.png" alt="" />
					</span>
					<p>
						Mehr über uns:
					</p>
		
					<ul class="icons alt">
						<li><a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/werner.ebert.stgt/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.werner-ebert.de/" class="icon brands alt fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
					</ul>

				@else
			
				<p class="pic_left_right"><span class="image left"><img src="images/Vorlag-600x600px-Aktion.png" alt="" /></span>
					Wir schätzen Euch als Gastronomen, die unseren Produkten durch Ihre Zubereitung den letzten Schliff geben. Eure Orte zum Begegnen, Genießen und Verweilen 
					haben wir sehr vermisst. Schön, dass ihr wieder zurück seid. Beim Neustart möchten wir Euch gerne unterstützen.
					Dazu verlosen wir unter allen teilnehmenden Gastronomen der Region Stuttgart und Umgebung 100 Warengutscheine à 1.000,- EUR aus unserem gesamten Sortiment, 
					mit dem wir täglich eine breite Auswahl an frischem Obst, Gemüse und Spezialitäten anbieten.
				</p>
			</div>

				<p class="pic_left_right"><span class="image right"><img src="images/Vorlag-600x600px-Karte.png" alt="" /></span>
					Einfach Postleitzahl eingeben, und prüfen ob ihr in unserer Region liegt, dann anmelden und Gewinnchance sichern. <br><br>
					Hier findet Ihr die <br><br><a href="/Teilnahmebedingungen" class="button small">Teilnahmebedingungen</a> <br><br>
					Teilnahmeschluss ist der 6. Juni 2020.<br><br>
					Die Verlosung findet am 8. Juni live bei 
					<a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span> Facebook</a> & 
					<a href="https://www.instagram.com/werner.ebert.stgt/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span> Instagram</a>
					statt.
					Die Gewinner werden per E-Mail benachrichtigt - also checkt Euer Postfach.
					Teilnahmeberechtigt sind gewerblich tätige Gastronomiebetriebe als Unternehmer mit Geschäftssitz in unserem Liefergebiet.
				</p>

		
			@endif
			@if (!isset($var['not_passed']))
				<form method="get" action="/check">
				<div class="row gtr-uniform">
					<div class="col-12 col-12-xsmall">
						<span style="font-size: 200%; margin-bottom:10px">
							Bitte gib Deine Postleitzahl ein, um zu prüfen, ob Du teilnahmeberechtigt bist.
						</span>
						<input style="margin-top: 22px;" type="number" name="Postleitzahl" id="plz" value="" placeholder="Postleitzahl" min="1001" max="99998" required/>
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
		@endif

		@if ($var['page'] == 'formular')

			<!-- Gewinnspiel -->
			<p>
				<h2>Liebe Gastronomen</h2>
				Wir verlosen 100 x 1.000,- EUR Warengutscheine für das gesamte Sortiment der Werner Ebert GmbH & Co. KG, Stuttgart, einzulösen durch den Teilnehmer bis 31. Dezember 2020.
				<br><br> Die Gewinner werden per Verlosung im öffentlichen Live-Video auf unseren Social Media Seiten ermittelt und per E-Mail benachrichtigt.
				<br><br>Teilnahmeberechtigt sind gewerblich tätige Gastronomiebetriebe als Unternehmer mit Geschäftssitz im Liefergebiet der Werner Ebert GmbH & Co. KG, Stuttgart (PLZ gem. der Teilnahmebedingungen).
				<br><br>Teilnahmeschluss: 6. Juni 2020.
				<br><br>Es gelten die auf der Webseite gastro-neustart.de abrufbaren <a href="/Teilnahmebedingungen" target="_blank">Teilnahmebedingungen</a> und <a href="/Datenschutz" target="_blank">Datenschutzerklärung</a>.
			</p>
			
			<form method="post" action="/teilnahme">
				@csrf
				<div id="jump-action" class="row gtr-uniform">

					<!-- Ansprechpartner -->
					<div class="col-2 col-12-xsmall">
						<select name="anrede" id="anrede" required>
							@if (!isset($var['request']->anrede))
								<option value="" selected disabled hidden>Anrede</option>
							@endif
							<option value=" ">keine Angabe</option>
							<option {{ (isset($var['request']->anrede) && $var['request']->anrede == 'Frau') ? 'selected' : ''}} value="Frau">Frau</option>
							<option {{ (isset($var['request']->anrede) && $var['request']->anrede == 'Herr') ? 'selected' : ''}} value="Herr">Herr</option>
						</select>
					</div>
					<div class="col-5 col-12-xsmall">
						<input type="text" name="vorname" id="vorname" value="{{ $var['request']->vorname ?? ''}}" placeholder="Vorname" required/>
					</div>
					<div class="col-5 col-12-xsmall">
						<input type="text" name="nachname" id="nachname" value="{{ $var['request']->nachname ?? ''}}" placeholder="Nachname" required/>
					</div>
					
					<!-- wichtig -->
					<div class="col-12 col-12-xsmall" hidden>
						<input type="text" name="wichtig" id="wichtig" value="" placeholder="wichtig"/>
					</div>
					
					<!-- Firma -->
					<div class="col-12 col-12-xsmall">
						<input type="text" name="fiirma" id="firma" value="{{ $var['request']->fiirma ?? ''}}" placeholder="Firma" required/>
					</div>

					<div class="col-8 col-12-xsmall">
						<input type="text" name="strasse" id="strasse" value="{{ $var['request']->strasse ?? ''}}" placeholder="Straße" required/>
					</div>
					<div class="col-4 col-12-xsmall">
						<input type="text" name="hausnummer" id="hausnummer" value="{{ $var['request']->hausnummer ?? ''}}" placeholder="Nr." required/>
					</div>

					<div class="col-4 col-12-xsmall">
						<input type="text" name="plz" id="plz" value="{{ $var['request']->plz ?? $var['Postleitzahl']->plz}}" placeholder="Postleitzahl" required/>
					</div>
					<div class="col-8 col-12-xsmall">
						<input type="text" name="ort" id="" value="{{ $var['request']->ort ?? $var['Postleitzahl']->ort}}" placeholder="Ort" required/>
					</div>

					<div class="col-6 col-12-xsmall">
						<input type="email" name="email" placeholder="E-Mail" value="{{ $var['request']->email ?? ''}}" required/>
					</div>

					<div class="col-6 col-12-xsmall">
						<input type="text" name="tel" placeholder="Telefon" value="{{ $var['request']->tel ?? ''}}" required/>
					</div>
					
					<div class="col-12 col-12-xsmall">
						<input id="ustid" type="text" name="ustid" placeholder="Umsatzsteuer-Identifikationsnummer" value="{{ $var['request']->ustid ?? ''}}" required/>
						@isset($var['double_ustid'])
							<span style="color: red;font-size:14px;font-style: italic;">Die USt-ID nimme bereits an dem Gewinnspiel teil.</span>
						@endisset
					</div>
					
					<!-- Erklärungen -->
					<div class="col-12 col-12-small">
						Mit Klicken des "Jetzt teilnehmen"-Buttons erklärt sich der Teilnehmer mit der Teilnahme am Gewinnspiel gemäß der  
						<a href="/Teilnahmebedingungen">Teilnahmebedingungen Gewinnspiel</a> und der Verarbeitung gemäß der 
						<a href="/Datenschutz">Datenschutzerklärung Gewinnspiel</a> einverstanden. Wir weisen darauf hin, dass die Gewinner 
						per Verlosung im öffentlichen Live-Video auf unseren Social Media Seiten ermittelt und per E-Mail benachrichtigt werden.
					</div>

					<!-- Break -->
					<div class="col-12">
						<ul class="actions">
							<li><input id="submit" type="submit" value="Jetzt teilnehmen" class="primary" /></li>
						</ul>
					</div>
				</div>
			</form>
		@endif
	</section>	
</div>

@include('layouts/footer')