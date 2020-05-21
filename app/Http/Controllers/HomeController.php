<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teilnehmer;
use App\Exports\TeilnehmerExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teilnehmer = Teilnehmer::all();
        return view('home', [
            'var' => [
                'teilnehmer' => $teilnehmer
            ]
        ]);
        
    }

    public function export() 
    {
        return Excel::download(new TeilnehmerExport, 'Gewinnspiel Teilnehmer.xlsx');
    }
}
