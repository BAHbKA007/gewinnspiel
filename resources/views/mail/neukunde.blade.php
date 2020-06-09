<div>
    Gewinnanforderung von Neukunde {{ $request->firma ?? ''}}
</div>

<h2>1. Rechnungsempfänger:</h2>
<div>
    <br><b>Rechnungsempfänger:</b> {{ $request->neukunde_rechnungsempfaenger ?? ''}}
    <br><b>Straße:</b> {{ $request->re_strasse ?? ''}}
    <br><b>Postleitzahl:</b> {{ $request->plz ?? ''}}
    <br><b>Ort:</b> {{ $request->ort ?? ''}}
    <br><b>Email:</b> {{ $request->mail ?? ''}}
    <br><b>Webseite:</b> {{ $request->web ?? ''}}
</div>
</b>
<h2>2. Lieferanschrift, wenn abweichend von 1:</h2>
<div>
    <br><b>Name/Firma:</b> {{ $request->liefername ?? ''}}
    <br><b>Straße + Hausnummer::</b> {{ $request->ls_strasse ?? ''}}
    <br><b>Postleitzahl:</b> {{ $request->ls_plz ?? ''}}
    <br><b>Ort:</b> {{ $request->ls_ort ?? ''}}
</div>

<h2>3. Ansprechpartner:</h2>
<div>
    <br><b>Name:</b> {{ $request->ansprechpartner_name ?? ''}}
    <br><b>Telefon:</b> {{ $request->ansprechpartner_phone ?? ''}}
    <br><b>Mobil:</b> {{ $request->ansprechpartner_mobil ?? ''}}
    <br><b>Fax:</b> {{ $request->ansprechpartner_fax ?? ''}}
    <br><b>Kommentar:</b> {{ $request->comment_kunde ?? ''}}
</div>