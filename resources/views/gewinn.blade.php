@include('layouts/header')
<!-- Main -->
<div id="main">
    <!-- Post -->
    <section id="jump-action"  class="post">
        <header class="major">
            <h1>Gewinn einfordern:</h1>
        </header>

        <p>
            Um Deinen Gewinn für <span style="font-weight: bold">{{$var['teilnehmer']->firma}}</span> einzufordern, muss der Betrieb bei uns als Kunde angelegt werden.
        </p>

        <div class="row gtr-uniform">
            <div class="col-6 col-12-small">
                <input type="radio" id="demo-priority-low" name="demo-priority" onclick="showForm('form_kunde')">
                <label for="demo-priority-low">ich bin bereits Kunde</label>
            </div>
            <div class="col-6 col-12-small">
                <input type="radio" id="demo-priority-normal" name="demo-priority" onclick="showForm('form_neukunde')">
                <label for="demo-priority-normal">Neukunde</label>
            </div>
        </div>

        <div id="form_kunde" style="display: none;">
            <p>
                <h4>Bitte teile uns Deine Kundennummer mit:</h4>
            </p>
            <form method="post" action="/einfordern">
                @csrf
                <div class="row gtr-uniform">
                    <div class="col-4">
                        <input type="number" min="0" max="99999" name="kundennummer" id="kundennummer" value="" placeholder="Kundennummer" required>
                    </div>
                    <div class="col-8">
                        <input type="email" name="kunde_mail" id="kunde_mail" value="{{$var['teilnehmer']->email}}" placeholder="Email" required>
                    </div>
                    <div class="col-8">
                        <input type="hidden" name="firma" id="firma" value="{{$var['teilnehmer']->firma}}">
                        <input type="hidden" name="hash" id="hash" value="{{$var['teilnehmer']->hash}}">
                    </div>
                    <!-- Break -->
                    <div class="col-12">
                        <textarea name="comment_kunde" id="comment_kunde" placeholder="Deine Fragen oder Anregungen..." rows="6"></textarea>
                    </div>
                    <!-- Break -->
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="EINFORDERN" class="primary"></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

        <div id="form_neukunde" style="display: none;">
            <p>
                <h3>Folgende Angaben werden für eine Neuanlage benötigt:</h3>
            </p>

            <form method="post" action="/einfordern/neukunde">
                @csrf
                <div class="row gtr-uniform">
                    <p>
                        <h4>1. Rechnungsempfänger:</h4>
                    </p>
                    <div class="col-8">
                        <input type="hidden" name="firma" id="firma" value="{{$var['teilnehmer']->firma}}">
                        <input type="hidden" name="hash" id="hash" value="{{$var['teilnehmer']->hash}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="neukunde_rechnungsempfaenger" id="neukunde_rechnungsempfaenger" value="{{$var['teilnehmer']->firma}}" placeholder="Rechnungsempfänger" required>
                    </div>

                    <div class="col-12">
                        <input type="text" name="re_strasse" id="re_strasse" value="{{$var['teilnehmer']->strasse}} {{$var['teilnehmer']->nr}}" placeholder="Straße" required>
                    </div>

                    <div class="col-6">
                        <input type="number" name="plz" id="plz" value="{{$var['teilnehmer']->plz}}" placeholder="Postleitzahl" required>
                    </div>
                    <div class="col-6">
                        <input type="text" name="ort" id="ort" value="{{$var['teilnehmer']->ort}}" placeholder="Ort" required>
                    </div>

                    <div class="col-12">
                        <input type="email" name="mail" id="mail" value="{{$var['teilnehmer']->email}}" placeholder="Email" required>
                    </div>

                    <div class="col-12">
                        <input type="text" name="web" id="web" placeholder="Webseite">
                    </div>

                    <!-- Break -->
                    <p>
                        <h4>2. Lieferanschrift, wenn abweichend von 1:</h4>
                    </p>

                    <div class="col-12">
                        <input type="text" name="liefername" id="liefername" placeholder="Name/Firma">
                    </div>

                    <div class="col-12">
                        <input type="text" name="ls_strasse" id="strasse" placeholder="Straße + Hausnummer">
                    </div>

                    <div class="col-6">
                        <input type="number" name="ls_plz" id="plz" placeholder="Postleitzahl">
                    </div>
                    <div class="col-6">
                        <input type="text" name="ls_ort" id="ort" placeholder="Ort">
                    </div>

                    <!-- Break -->
                    <p>
                        <h4>3. Ansprechpartner:</h4>
                    </p>

                    <div class="col-12">
                        <input type="text" name="ansprechpartner_name" id="ansprechpartner_name" value="{{$var['teilnehmer']->vorname}} {{$var['teilnehmer']->nachname}}" placeholder="Name" required>
                    </div>

                    <div class="col-12">
                        <input type="text" name="ansprechpartner_phone" id="ansprechpartner_phone" value="{{$var['teilnehmer']->telefon}}" placeholder="Telefon">
                    </div>

                    <div class="col-12">
                        <input type="text" name="ansprechpartner_mobil" id="ansprechpartner_mobil" placeholder="Mobil">
                    </div>

                    <div class="col-12">
                        <input type="text" name="ansprechpartner_fax" id="ansprechpartner_fax" placeholder="Fax">
                    </div>

                    <!-- Break -->
                    <div class="col-12">
                        <textarea name="comment_kunde" id="comment_kunde" placeholder="Deine Fragen oder Anregungen..." rows="6"></textarea>
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="EINFORDERN" class="primary"></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>


    </section>
</div>
@include('layouts/footer')