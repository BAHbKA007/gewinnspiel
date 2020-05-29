<div>
    Hallo {{ $teilnehmer->vorname }},
</div>
    <br>
<div>
    {{ $teilnehmer->firma }} wurde unter <a href="gastro-neustart.de">gastro-neustart.de</a> als Gewinnspielteilnehmer eingetragen.
</div>
<br>
<div>
    Um am an der Verlosung teilzunehmen, muss die E-Mail Adresse bestätigen werden: <a href="{{url()->current()}}/{{$teilnehmer->hash}}">Link</a>
</div>
<br>
<div>
    Alternativ folgende URL im Webbrowser aufrufen: {{url()->current()}}/{{$teilnehmer->hash}}
</div>
<div>
Werner Ebert GmbH & Co. KG
<br><br>
<br>Langwiesenweg 30
<br>70327 Stuttgart
<br><br>
<br>Telefon: 0711/480451-0
<br>Fax: 0711/480451-50
<br>E-mail: werner-ebert@werner-ebert.de
<br>Sitz: Stuttgart - HRA 10640
<br>Umsatzsteuer-Ident-Nummer: DE147437710
<br>Amtsgericht Stuttgart
<br>Geschäftsführer: Werner Funke
<br>Verantwortlich: Werner Funke
</div>
