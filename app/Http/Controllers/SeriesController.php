<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $lista = Serie::query()->orderBy('nome')->get();
        //dd($lista);

        return view('series.index')->with('series', $lista);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = new Serie();
        $serie->nome = $request->input("nome");
        
        if($serie->save()){
            return redirect('/series');
        }else{
            return "Erro ao inserir";
        }
    }
}
