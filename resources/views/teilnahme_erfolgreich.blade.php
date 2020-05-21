@include('layouts/header')
<!-- Main -->
<div id="main">
    <!-- Post -->
    <section class="post">
        <header class="major">
            <h1>viel Erfolg<br />
                {{$var['teilnehmer']->firma}}
            </h1>
        </header>

        <!-- Text stuff -->
            <h2>
                @if (isset($var['teilnehmer']->anrede))
                    @if ($var['teilnehmer']->anrede == 'Herr')
                        lieber
                    @endif
                    @if ($var['teilnehmer']->anrede == 'Frau')
                        liebe
                    @endif
                @else
                    
                @endif
                {{$var['teilnehmer']->vorname}},</h2>
            <p>
                <b>{{$var['teilnehmer']->firma}}</b> wurde als Teilnehmer gespeichert. Sollten Sie als Gewinner ausgewählt werden, benachrichtigen wir Sie 
                per Mail oder telefonisch.

                Bis dahin, alles Gute!
            </p>

    </section>
</div>
@include('layouts/footer')