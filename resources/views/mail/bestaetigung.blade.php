<div>
    Hallo {{ $teilnehmer->vorname }},
</div>
    <br>
<div>
    {{ $teilnehmer->firma }} wurde unter <a href="gastro-neustart.de">gastro-neustart.de</a> als Gewinnspielteilnehmer eingetragen.
</div>
<div>
    Bitte bestätige deine E-Mail über den folgenden <a href="{{url()->current()}}/{{$teilnehmer->hash}}">Link</a>
</div>
<div>
    hash: {{ $teilnehmer->hash }}
</div>
