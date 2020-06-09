<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailGewinnBenachrichtigung;
use Illuminate\Http\Request;
use App\Teilnehmer;

class GewinnBenachrichtigung extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendmail($hash)
    {
        try {
            $teilnehmer = Teilnehmer::where('hash', $hash)->first();
            Mail::to($teilnehmer->email)->send(new MailGewinnBenachrichtigung($teilnehmer));
            $teilnehmer->gewinnmail_versendet = 'ja';
            $teilnehmer->save();
        } catch (\Exception $e) {
            report($e);
        }

        return redirect('/home');
    }
}
