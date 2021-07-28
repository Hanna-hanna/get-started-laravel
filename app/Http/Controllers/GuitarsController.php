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
        request()->validate([
            'title' => 'required',
            'make' => 'required',
            'year' => ['required', 'integer'],
            'description' => 'required'
        ]);
        $guitar = new Guitar();
        $guitar->title = request('title');
        $guitar->make = request('make');
        $guitar->year = request('year');
        $guitar->description = request('description');

        $guitar->save();

        return redirect()->route('guitars.index');
    }

    public function edit($guitar) {
        return view('guitars.edit', [
            'guitar' =>  Guitar::findOrFail($guitar)
        ]);
    }

    public function update($guitar) {
        request()->validate([
            'title' => 'required',
            'make' => 'required',
            'year' => ['required', 'integer'],
            'description' => 'required'
        ]);

        $record = Guitar::findOrFail($guitar);
        $record->title = request('title');
        $record->make = request('make');
        $record->year = request('year');
        $record->description = request('description');
        
        $record->save();

        return redirect()->route('guitars.show', $record->id);
    }
}