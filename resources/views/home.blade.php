@extends('layouts.app')

@php
function zaehl_cookies()
{
    $fi = new FilesystemIterator("../storage/framework/sessions", FilesystemIterator::SKIP_DOTS);
    return iterator_count($fi) - 1;
}
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><span style="font-weight: bold;">{{count($var['teilnehmer'])}}</span> Einträge bei <span style="font-weight: bold;">{{zaehl_cookies()}}</span> Neuaufrufen:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Firma</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">teilgenommen</th>
                                <th scope="col">Ansprechpartner</th>
                                <th scope="col">sende E-Mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($var['teilnehmer'] as $item)
                                <tr 
                                @if ($item->gewinnmail_bestaetigt == 'ja')
                                    style="background-color:#58FA58"
                                @endif
                                >
                                    <td>{{$item->firma}}</td>
                                    <td>{{$item->strasse}} {{$item->nr}} {{$item->plz}} {{$item->ort}}</td>
                                    <td>{{$item->created_at->format('d.m.Y H:i:s')}}</td>
                                    <td><a href="#" data-toggle="popover" title="Kontakt" data-content="E-Mail: {{$item->email}} Telefon: {{$item->telefon}}">{{$item->anrede}} {{$item->vorname}} {{$item->nachname}}</a></td>
                                    @if ($item->gewinnmail_versendet == 'nein')
                                        <td><a disabled href="/gewinn/sendmail/{{$item->hash}}">Mail Senden</a></td>
                                    @else
                                        <td><span>versendet</span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/export" class="btn btn-primary active" role="button" aria-pressed="true">Download als Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
