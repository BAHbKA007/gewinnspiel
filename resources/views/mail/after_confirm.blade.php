@include('layouts/header')
<!-- Main -->
<div id="main">
    <!-- Post -->
    <section id="jump-action" >

        @if (isset($var['teilnehmer']))
            <h1>
                E-Mail bestätigt
            </h1>

            <h2>Vielen Dank für Deine Teilnahme. <br> Wir wünschen Dir viel Erfolg.</h2>
            <p>
                Jetzt vormerken, die Verlosung erfolgt am 8.6 ab 17 Uhr als Live-Videostream unter 
                <a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span> Facebook</a> & 
                <a href="https://www.instagram.com/werner.ebert.stgt/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span> Instagram</a>.
            </p>
            <p>
                Wenn Du gewinnst benachrichtigen wir Dich über Deine angegebene E-Mail-Adresse. Bitte prüfe ggf. Deinen Spam-Ordner. 
                Wir bitten Dich den Empfang innerhalb von 14 Tagen, spätestens bis 22.06.2020 zu bestätigen, damit wir sicher gehen können, 
                dass die Gewinner ihr Nachricht auch erhalten haben.
            </p>
            <br>
            <p>
                Mehr über uns:             
                <ul class="icons alt">
                    <li><a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/werner.ebert.stgt/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.werner-ebert.de/" class="icon brands alt fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
                </ul>
            </p>
        @else
            <h2>... etwas hat nicht geklappt</h2>
            <p>
                Bitte überprüfen Sie die aufgerufene URL.
            </p>
            <p>
                Mehr über uns:             
                <ul class="icons alt">
                    <li><a href="https://www.facebook.com/werner.ebert.stgt" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/werner.ebert.stgt/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.werner-ebert.de/" class="icon brands alt fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
                </ul>
            </p>
        @endif

    </section>
</div>
@include('layouts/footer')