<div>
    Hallo {{ $teilnehmer->vorname }},
</div>
    <br>
<div>
    {{ $teilnehmer->firma }} wurde unter <a href="gastro-neustart.de">gastro-neustart.de</a> als Gewinnspielteilnehmer eingetragen.
</div>
<br>
<div>
    Um am an der Verlosung teilzunehmen, musst du Deine E-Mail Adresse bestätigen: <a href="{{url()->current()}}/{{$teilnehmer->hash}}">Link</a>
</div>
<br>
<div>
    Alternativ folgende URL im Webbrowser aufrufen: {{url()->current()}}/{{$teilnehmer->hash}}
</div>
