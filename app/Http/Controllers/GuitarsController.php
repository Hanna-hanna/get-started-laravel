<?php

namespace App\Http\Controllers;

class GuitarsController extends Controller {
    public function index() {
        return view('guitars');
    }
    
    public function show($guitar) {
        $guitars = [
            'strat' => 'Standart Mexican Strat',
            'les-paul' => 'Gibson Les Paul Studio'
        ];
    
        if (!array_key_exists($guitar, $guitars)) {
            abort(404);
        }
    
        return view('guitar', [
            'description' => $guitars[$guitar]
        ]);
    }
}