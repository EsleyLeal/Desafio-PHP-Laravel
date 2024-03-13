<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest; 
use Illuminate\Support\Facades\Storage;


class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create() 
    {
        return view('clientes.create');
    }


    


    public function store(ClienteRequest $request)
{
    $data = $request->all();

    if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')->store('clientes', 'public');
    }


    Cliente::create($data);

    return redirect()->route('clientes.index');
}




    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }



    public function update(ClienteRequest $request, $id)
{
    $cliente = Cliente::findOrFail($id);

    $cliente->update($request->except('foto'));

    if ($request->hasFile('foto')) {
        $novaFoto = $request->file('foto')->store('clientes', 'public');

        if ($novaFoto) {
            
            Storage::disk('public')->delete($cliente->foto);
            $cliente->foto = $novaFoto;
            $cliente->save();
        }
    }

    return redirect()->route('clientes.index');
}





    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }




    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }
}
