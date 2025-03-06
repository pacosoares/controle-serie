<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $lista = Serie::all();
        //dd($lista);

        return view('series.index')->with('series', $lista);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        if(Serie::insert('insert into serie (nome) values (?)', [ $request->input("nome")])){
            return redirect('/series');
        }else{
            return "Erro ao inserir";
        }
    }
}
