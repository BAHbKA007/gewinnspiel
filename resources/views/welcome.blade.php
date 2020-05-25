@include('layouts/header')

<!-- Main -->
<div id="main" class="cover blur-in">
	@if ($var['page'] == 'start')
	<!-- Form -->
	<div id="jump-action"  class="box">
		@if(isset($var['not_passed']))
			<h2>Wir wollen die Region stärken.
				Leider befindest Du Dich außerhalb des definierten Teilnahemgebiets.
				Die genauen Teilnahmebedingungen findest Du hier: <a href="/Teilnahmebedingungen">Link</a>
			</h2>	
		@else
	
			<p>
				Wir schätzen Sie als Gastronomen, die unseren Produkten durch Ihre Zubereitung den letzten Schliff geben. Ihre Orte zum begegnen, genießen und verweilen haben wir sehr vermisst. Schön das Sie wieder zurück sind. Beim Neustart möchten wir Sie gerne unterstützen.
				<br><br>
				Dazu verlosen wir unter allen teilnehmenden Gastronomen der Region Stuttgart und Umgebung 100 Warengutscheine à 1.000,- EUR aus unserem Sortiment. Hier finden Sie eine reichhaltige Auswahl an Gemüse, Obst und Spezialitäten, täglich frisch in Top Qualität.
				<br><br>
				Die kompletten Teilnahmebedingungen finde  ihr hier <a href="/Teilnahmebedingungen">Link</a>
				<br><br>
				Einfach Postleitzahl eingeben, und prüfen ob ihr in unserer Region liegt, dann anmelden und Gewinnchance sichern.
				Teilnahmeschluss ist der 6. Juni 2020.
				<br><br>
				Die Verlosung findet am 8. Juni live bei Facebook.com/werner.ebrt.stgt statt.
				Die Gewinner werden per E-Mail benachrichtigt - also check Euer Postfach.
				<br><br>
				Teilnahmeberechtigt sind alle Gastronomen in der Region Stuttgart.
				Bitte gib Deine Postleitzahl ein, um zu prüfen, ob Du dazuzählst.
			</p>
	
		@endif
	</div>
		@if (!isset($var['not_passed']))
		<form method="get" action="/check">
			<div class="row gtr-uniform">
				<div class="col-12 col-12-xsmall">

					<label for="plz">Teilnahmeberechtigt sind alle Gastronomen in der Region Stuttgart. Bitte gib Deine Postleitzahl ein, um zu prüfen, ob Du dazuzählst:</label>
						<input type="number" name="Postleitzahl" id="plz" value="" placeholder="Postleitzahl" min="1001" max="99998" required/>
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
		<p>Wir schätzen Sie als Gastronomen, die unseren Produkten durch Ihre Zubereitung den letzten Schliff geben. 
			Ihre Orte zum begegnen, genießen und verweilen haben wir sehr vermisst. Schön das Sie wieder zurück sind. Beim Neustart möchten wir Sie gerne unterstützen.
			<br><br>
			Dazu verlosen wir unter allen teilnehmenden Gastronomen der Region Stuttgart und Umgebung 100 Warengutscheine à 1.000,- EUR (gültig bis 31.12.2020) aus unserem Sortiment. 
			Hier finden Sie eine reichhaltige Auswahl an Gemüse, Obst und Spezialitäten, täglich frisch in Top Qualität.
			<br><br>
			Teilnahmeschluss ist der 6. Juni 2020.
			<br><br>
			Teilnahme nur über diese Webseite (gastro-neustart.de) möglich 
			<br><br>
			Die Gewinner werden per Verlosung im öffentlichen Live-Video auf unseren Social Media Seiten ermittelt und per E-Mail benachrichtigt.
			<br><br>
			Die kompletten Teilnahmebedingung findest Du hier: <a href="/Teilnahmebedingungen">Link</a>
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
					<input type="text" name="ustid" placeholder="Umsatzsteuer-Identifikationsnummer" value="{{ $var['request']->ustid ?? ''}}" required/>
					@isset($var['double_ustid'])
						<span style="color: red;font-size:14px;font-style: italic;">Die USt-ID nimme bereits an dem Gewinnspiel teil.</span>
					@endisset
				</div>
				
				<!-- Erklärungen -->
				<div class="col-12 col-12-small">
					<input type="checkbox" id="einverstanden" name="einverstanden" {{ (isset($var['request']->einverstanden) && $var['request']->einverstanden == 'on') ? 'checked' : ''}} required>
					<label for="einverstanden">Ich akzeptiere die <a href="/Teilnahmebedingungen">Teilnahmebedingungen</a> und die <a href="/Datenschutz">Datenschutzerklärung.</a></label> 
				</div>

				<!-- Break -->
				<div class="col-12">
					<ul class="actions">
						<li><input type="submit" value="teilnehmen" class="primary" /></li>
					</ul>
				</div>
			</div>
		</form>
	@endif
	
</div>



@include('layouts/footer')