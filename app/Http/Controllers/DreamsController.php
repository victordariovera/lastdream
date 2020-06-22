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
        $dream = new Dream();


        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $dream->title = request('title');
        $dream->body = request('body');
        $dream->save();

        $dreams= Dream::latest()->take(4)->get();

        return redirect('/');
    }

    public function show ($id)
    {
       $dream= Dream::find($id);
       return view('/dreams/show', [
           'dream' => $dream
        ]);
    }

    public function edit ($id)
    {
        $dream= Dream::find($id);
        return view('dreams/edit', [
            'dream' => $dream
        ]);
    }

    public function update($id)
    {
        $dream = Dream::find($id);

        request()->validate([
            'title' => ['required','max:255'],
            'body' => 'required'
        ]);

        $dream->title =  request('title');
        $dream->body = request('body');
        $dream->save();

        return view('/dreams/show', [
            'dream' => $dream
            ]);
    }


    public function delete ($id)
    {
        $dream = Dream::find($id);
        $dream->delete();

        return redirect('dreams/');

    }


}
