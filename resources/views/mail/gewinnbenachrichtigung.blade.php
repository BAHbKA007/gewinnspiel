<div>
    Hallo {{ $teilnehmer->vorname }},
</div>
    <br>
<div>
    {{ $teilnehmer->firma }} wurde als glücklicher Gewinner ausgelost.
</div>
<br>
<div>
    Damit der Gewinn gutgeschrieben werden kann, benötigen wir von Dir noch ein paar Angaben: <a href="{{url()->current()}}/gewinn">Link</a>
</div>
<br>
<div>
    Alternativ folgende URL im Webbrowser aufrufen: {{url()->current()}}/gewinn
</div>
<div>
<br><br>Werner Ebert GmbH & Co. KG
<br>
<br>Langwiesenweg 30
<br>70327 Stuttgart
<br>
<br>Telefon: 0711/480451-0
<br>Fax: 0711/480451-50
<br>E-mail: werner-ebert@werner-ebert.de
<br>Sitz: Stuttgart - HRA 10640
<br>Umsatzsteuer-Ident-Nummer: DE147437710
<br>Amtsgericht Stuttgart
<br>Geschäftsführer: Werner Funke
<br>Verantwortlich: Werner Funke
</div>