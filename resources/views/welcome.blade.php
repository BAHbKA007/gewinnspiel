@include('layouts/header')
<!-- Main -->
<div id="main">

	@if ($var['page'] == 'start')
	<!-- Form -->
		<h2>Postleitzahl</h2>
		<form method="post" action="/">
			@csrf

			@isset($var['not_passed'])
			<span style="color: red;">Leider kann die Postleitzahl {{$var['Postleitzahl']}} bei dem Gewinnspiel nicht mitmachen :/ </span>	
			@endisset

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

		<form method="post" action="/teilnahme">
			@csrf
			<div class="row gtr-uniform">

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