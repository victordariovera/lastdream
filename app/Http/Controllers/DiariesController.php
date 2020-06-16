<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiariesController extends Controller
{
    public function show ($id)
    {
       $diary= Diary::find($id);
       return view('display', [
           'diary' => $diary
           ]);
    }

    public function main (){

        return view('main', [
            'diaries' => Diary::latest()->take(4)->get()
        ]);

    }

    public function index (){

        return view('index', [
            'diaries' =>  Diary::all()
        ]);


    }

    public function edit ($id){

        $diary= Diary::find($id);
        return view('edit', [
            'diary' => $diary
            ]);


    }


    public function save ($id){

        $diary= Diary::find($id);
        $diary->title = request('title');
        $diary->body = request('body');

        $diary->save();

        return view('display', [
            'diary' => $diary
        ]);


    }

    public function new (Request $request){
        $diary = new Diary();
        $diary->title = request('title');
        $diary->body = request('body');


        $path = $request->file('image')->store('diaryimg');
        $diary->image = $path;

        $diary->save();

        return view('display', [
            'diary' => $diary
       ]);

    }

    public function delete ($id){
        $diary = Diary::find($id);
        $diary->delete();

        return view('index', [
            'diaries' =>  Diary::all()
        ]);

    }

}
