<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCriadorRequest;
use Illuminate\Http\Request;
use App\Models\Criador;

class CriadorController extends Controller
{
    public readonly Criador $criador;

    public function __construct()
    {
        $this->criador = new Criador();
    }

    public function index()
    {
        $criador = $this->criador->all();
        return view('criador', ['criadores' => $criador]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('criador_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCriadorRequest $request)
    {
        $created = $this->criador->create([
            'nome' => $request->input('nome'),
        ]);

        if ($created) {
            return redirect()->route('criadores.index')->with('message', 'Criador Cadastrado');
        }
        return redirect()->route('criadores.index')->with('message', 'Algo deu Errado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Criador $criador)
    {
        return view('criador_show', ['criador' => $criador]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criador $criador)
    {
        return view('criador_edit', ['criador' => $criador]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCriadorRequest $request, string $id)
    {
        $updated = $this->criador->where('id', $id)->update($request->except('_token', '_method'));
        if ($updated) {
            return redirect()->route('criadores.index')->with('message', 'Criador Atualizado');
        }
        return redirect()->route('criadores.index')->with('message', 'Algo deu Errado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $criador = $this->criador->find($id);

        if ($criador) {
            $criador->delete();

            return redirect()->route('criadores.index')->with('message', 'Criador ' . $criador->nome . ' deletado');
        }

        return redirect()->route('criadores.index')->with('error', 'Criador não encontrado');
    }
}
