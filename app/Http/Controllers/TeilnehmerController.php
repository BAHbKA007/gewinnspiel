<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailBestaetigung;
use App\Teilnehmer;
use App\Postleitzahl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Redirect;

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
    public function check()
    {
        $plz = $_GET['Postleitzahl'];
        if (Postleitzahl::where('plz', $plz)->exists()) {
            return view('welcome', [
                'var' => [
                    'page' => 'formular',
                    'Postleitzahl' => Postleitzahl::where('plz', $plz)->first(),
                    'active' => 'Gewinnspiel'
                ]]);
        } else {
            return view('welcome', [
                'var' => [
                    'page' => 'start',
                    'Postleitzahl' => $plz,
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

            if (isset($request->wichtig)) {
                return Redirect::to('http://www.google.com');
            }
            
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
            $id = $teilnehmer->id;
            
            $teilnehmer = Teilnehmer::find($id);
            $teilnehmer->hash  = md5($id);
            $teilnehmer->save();
            
            try {
                Mail::to($teilnehmer->email)->send(new MailBestaetigung($teilnehmer));
            } catch (\Exception $e) {
                report($e);
            }

            return view('teilnahme_erfolgreich', [
                'var' => [
                    'page' => 'start',
                    'teilnehmer' => $teilnehmer,
                    'not_passed' => 1,
                    'active' => 'Gewinnspiel'
                ]]);
        }
    }

    public function check_mail($hash)
    {
        
        if (Teilnehmer::firstWhere('hash', $hash)->exists()) {
            $teilnehmer = Teilnehmer::firstWhere('hash', $hash);
            $teilnehmer->mail_confirmed = 'ja';
            $teilnehmer->save();
            return view('mail.after_confirm', [
                'var' => [
                    'teilnehmer' => $teilnehmer = Teilnehmer::firstWhere('hash', $hash),
                    'active' => 'Gewinnspiel',
                    'not_passed' => 1
                ]]);
        } else {
            return view('mail.after_confirm', [
                'var' => [
                    'active' => 'Gewinnspiel',
                    'not_passed' => 1
                ]]);
        };
    }

    public function cookie()
    {
        Session::put('CookieAccepted', true);
        return session()->get('CookieAccepted');
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
