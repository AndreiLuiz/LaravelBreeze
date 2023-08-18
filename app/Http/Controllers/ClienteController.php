<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function queries()
    {
        $cliente=Clientes::all();
        return view('listar', compact('cliente'));
    }

    public function store(Request $request)
    {
        $cad=Clientes::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'data_nascimento' => $request->data_nascimento,
            'observacao' => $request->observacao,
          ]);
          if($cad){
            return redirect('/listar');
        }
    }

    public function show(string $id)
    {
        $clientes=Clientes::find($id);
        return view('ver', compact('clientes'));
    }

    public function listar()
    {
        $clientes= Clientes::all();
        return view('listar', compact('clientes'));
    }

    public function edit(string $id)
    {
        $clientes=Clientes::find($id);
        return view('editar', compact('clientes'));
    }

    public function update(Request $request, string $id)
    {
        Clientes::where(['id'=>$id])->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'data_nascimento' => $request->data_nascimento,
            'observacao' => $request->observacao,
          ]);
            return redirect('/listar'); 
    }

    public function destroy(string $id)
    {
        if( $cliente = Clientes::findOrFail($id)){
            $cliente->delete();}
            return redirect('/listar');
    }

    public function delete($id)
    {
        $clientes=Clientes::find($id);
        return view('deletar', compact('clientes'));
    }
}

?>