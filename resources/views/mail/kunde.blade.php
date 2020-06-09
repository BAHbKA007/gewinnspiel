<div>
    Gewinnanforderung von {{ $request->firma }}
</div>

<div>
    <br><b>Kundennummer:</b> {{ $request->kundennummer ?? ''}}
    <br><b>Email:</b> {{ $request->kunde_mail ?? ''}}
    <br><b>Kommentar:</b> {{ $request->comment_kunde ?? ''}}
</div>