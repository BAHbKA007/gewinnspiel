@include('layouts/header')
<!-- Main -->
<div id="main">
    <!-- Post -->
    <section id="jump-action"  class="post pic_left_right">

        @if (isset($var['teilnehmer']))
            <h1>
                E-Mail bestätigt
            </h1>

            <h2>Vielen Dank für Deine Teilnahme. Wir wünschen Dir viel Erfolg.</h2>
            <p>
                Jetzt vormerken, die Verlosung erfolgt am 8.6 ab 17 Uhr als Live-Videostream unter <a href="https://www.facebook.com/werner.ebert.stgt" target="_blank">facebook.com/werner.bert.stgt</a> und <a href="https://www.instagram.com/werner.ebert.stgt" target="_blank">instagram.com/werner.bert.stgt</a>
            </p>
            <p>
                Wenn Du gewinnst benachrichtigen wir Dich über Deine angegebene E-Mail-Adresse. Bitte prüfe ggf. Deinen Spam-Ordner. 
                Wir bitten Dich den Empfang innerhalb von 7 Tagen, spätestens bis 17.05.2020 zu bestätigen, damit wir sicher gehen können, 
                dass die Gewinner ihr Nachricht auch erhalten haben.
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