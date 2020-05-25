@include('layouts/header')
<!-- Main -->
<div id="main">
    <!-- Post -->
    <section class="post">

        @if (isset($var['teilnehmer']))
            <h1>
                E-Mail bestätigt
            </h1>

            <h2>Vielen Dank für Deine Teilnahme. Wir wünschen Dir viel Erfolg.</h2>
            <p>
                Jetzt vormerken, die Verlosung erfolgt am 8.6 ab xx Uhr unter <a href="www.facebook.com/werner.bert.stgt">www.facebook.com/werner.bert.stgt</a>
            </p>
            <p>
                Wenn Du gewinnst benachrichtigen wir Dich über Deine angegebene E-Mail-Adresse. Bitte prüfe ggf. Deinen Spam-Ordner. Wir bitten Dich den Empfang innerhalb von xx Tagen, spätestens bis xx.xx.2020 zu bestätigen, damit wir sicher gehen können, dass die Gewinner ihr Nachricht auch erhalten haben.
            </p>
            <p>
                Mehr über uns: <a href="https://www.werner-ebert.de" target="_blank">Werner Ebert GmbH</a>
            </p>
        @else
        <header class="major">
            ... etwas hat nicht geklappt
        </header>
        @endif

    </section>
</div>
@include('layouts/footer')