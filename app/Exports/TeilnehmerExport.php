<?php

namespace App\Exports;

use App\Teilnehmer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TeilnehmerExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'ID',
            'Anrede',
            'Vorname',
            'Nachname',
            'Firma',
            'Straße',
            'Nr.',
            'PLZ',
            'Ort',
            'E-Mail',
            'Telefon',
            'UStID-Nr.:',
            'hash',
            'E-Mail Bestätigt',
            'Gewinnbenachrichtigung versand',
            'Gewinn angefordert',
            'erstellt',
            'geändert'
        ];
    }

    public function collection()
    {
        return Teilnehmer::all();
    }

}
