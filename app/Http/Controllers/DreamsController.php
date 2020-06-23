<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dream;

class DreamsController extends Controller
{

    public function home(){
        $dreams= Dream::latest()->take(4)->get();

        return view('home', [
            'dreams' =>  $dreams
        ]);

    }

    public function index ()
    {
        return view('dreams/index', [
            'dreams' =>  Dream::all()
        ]);
    }

    public function create()
    {
        return view('dreams/create');
    }

    public function store ()
    {
        Dream::create($this->validateDream());
        return redirect('/dreams');
    }

    public function show (Dream $dream)
    {
       return view('/dreams/show', ['dream' => $dream]);
    }

    public function edit (Dream $dream)
    {
        return view('dreams/edit', ['dream' => $dream]);
    }

    public function update(Dream $dream)
    {
        $dream->update($this->validateDream());
        return view('/dreams/show', ['dream' => $dream]);
    }


    public function delete (Dream $dream)
    {
        $dream->delete();
        return redirect('dreams/');
    }

    protected function validateDream(){
        return request()->validate([
            'title' => ['required','max:255'],
            'body' => 'required'
        ]);
    }


}
