<?php

namespace App\Http\Controllers;

class GuitarsController extends Controller {
    public function index() {
        return view('guitars.index', [
            'guitars' => $this->getData()
        ]);
    }
    
    public function show($guitar) {
        $guitars = $this->getData();
    
        if (!array_key_exists($guitar, $guitars)) {
            abort(404);
        }
    
        return view('guitars.show', [
            'guitar' => $guitars[$guitar]
        ]);
    }

    public function create() {
        return view('guitars.create');
    }

    private function getData() {
        return [
            'strat' => [
                'title' => 'Fender American Standard Strat',
                'make' => 'Fender',
                'year' => '1992',
                'description' => 'This is the description for Fender American Standard Strat'
            ],
            'les-paul' => [
                'title' => 'Gibson Les Paul Studio',
                'make' => 'Gibson',
                'year' => '2014',
                'description' => 'This is the description for Gibson Les Paul Studio'
            ]
        ];
    }
}