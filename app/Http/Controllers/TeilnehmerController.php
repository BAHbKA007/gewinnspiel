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
                'page' => 'start'
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
                    'Postleitzahl' => Postleitzahl::where('plz', $request->plz)->first()
                ]]);
        } else {
            return 'uafanculo';
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
        //
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
