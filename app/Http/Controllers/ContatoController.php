<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    /*
    public function retornanome(){
        return "Francinildo";
    }

    public function listaProdutos(){
        return view('produtos');
    }

    public function listarContatos(){
        return view('contatos');
    }
    */

    public function index()
    {
        $contatos = Contato::all();
        //dd($contatos);
        return view('contato.index', compact('contatos'));
    }

    public function create()
    {
        return view('contato.create');

    }

    public function store(Request $request)
    {
        //dd($Request->all());

        /*
        $contato = new Contato();
        $contato->nome = $Request->nome;
        $contato->telefone = $Request->telefone;
        $contato->save();
        */

        Contato::create($request->all());
        return redirect('contatos');
    }

    public function edit($id)
    {
        //dd($id);
        $contato = Contato::find($id);
        //dd($contato->nome);

        //return view('contato.edit', compact('contatos'));
        return view('contato.edit')->with(['contato' => $contato]);

    }

    public function update(Request $request, $id)
    {
        $contato = Contato::find($id)->update($request->all());
        return redirect('contato.index');
    }
/*
    public function destroy($id)
    {
        $contatos = Contato::find($id)->delete();

        return view('contato.index');
    }
*/
}
