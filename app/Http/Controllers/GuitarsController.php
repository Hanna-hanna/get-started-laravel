<?php

namespace App\Http\Controllers;

use App\Models\Guitar;

class GuitarsController extends Controller {
    public function index() {
        return view('guitars.index', [
            'guitars' => Guitar::all()
        ]);
    }
    
    public function show($guitar) {
        return view('guitars.show', [
            'guitar' =>  Guitar::findOrFail($guitar)
        ]);
    }

    public function create() {
        return view('guitars.create');
    }

    public function store() {
        $guitar = new Guitar();
        $guitar->title = request('title');
        $guitar->make = request('make');
        $guitar->year = request('year');
        $guitar->description = request('description');

        $guitar->save();

        return redirect()->route('guitars.index');
    }
}