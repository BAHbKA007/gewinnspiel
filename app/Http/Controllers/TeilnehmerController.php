<?php

namespace App\Http\Controllers;

use App\Teilnehmer;
use App\Postleitzahl;
use Illuminate\Http\Request;

class TeilnehmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'var' => [
                'page' => 'start',
                'active' => 'Gewinnspiel'
            ]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        if (Postleitzahl::where('plz', $request->plz)->exists()) {
            return view('welcome', [
                'var' => [
                    'page' => 'formular',
                    'Postleitzahl' => Postleitzahl::where('plz', $request->plz)->first(),
                    'active' => 'Gewinnspiel'
                ]]);
        } else {
            return view('welcome', [
                'var' => [
                    'page' => 'start',
                    'Postleitzahl' => $request->plz,
                    'not_passed' => 1,
                    'active' => 'Gewinnspiel'
                ]]);
        };
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Teilnehmer::where('ustidnr', $request->ustid)->exists()) {
            return view('welcome', [
                'var' => [
                    'page' => 'formular',
                    'Postleitzahl' => Postleitzahl::where('plz', $request->plz)->first(),
                    'request' => $request,
                    'double_ustid' => 1,
                    'active' => 'Gewinnspiel'
                ]]);
        } else {
            $teilnehmer = new Teilnehmer;
            $teilnehmer->anrede = $request->anrede;
            $teilnehmer->vorname = $request->vorname;
            $teilnehmer->nachname = $request->nachname;
            $teilnehmer->firma = $request->fiirma;
            $teilnehmer->strasse = $request->strasse;
            $teilnehmer->nr = $request->hausnummer;
            $teilnehmer->plz = $request->plz;
            $teilnehmer->ort = $request->ort;
            $teilnehmer->email = $request->email;
            $teilnehmer->telefon = $request->tel;
            $teilnehmer->ustidnr  = $request->ustid;
            $teilnehmer->zugestimmt  = (isset($request->einverstanden)) ? 'ja' : 'nein';
    
            $teilnehmer->save();

            return view('teilnahme_erfolgreich', [
                'var' => [
                    'page' => 'start',
                    'teilnehmer' => $teilnehmer,
                    'not_passed' => 1,
                    'active' => 'Gewinnspiel'
                ]]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teilnehmer  $teilnehmer
     * @return \Illuminate\Http\Response
     */
    public function show(Teilnehmer $teilnehmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teilnehmer  $teilnehmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Teilnehmer $teilnehmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teilnehmer  $teilnehmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teilnehmer $teilnehmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teilnehmer  $teilnehmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teilnehmer $teilnehmer)
    {
        //
    }

}
