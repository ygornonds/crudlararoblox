<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Categoria;
use App\Models\Criador;
class JogosController extends Controller
{
    public readonly Jogo $jogo;

    public function __construct()
    {
        $this->jogo = new Jogo();
    }

    public function index()
    {
        $jogos = $this->jogo->all();
        return view('jogos', ['jogos' => $jogos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $criadores = Criador::all();
        return view('jogos_create', [
            'categorias' => $categorias,
            'criadores' => $criadores
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->jogo->create([
            'nome' => $request->input('nome'),
            'id_categoria' => $request->input('id_categoria'),
            'id_criador' => $request->input('id_criador'),
        ]);

        if ($created) {
            return redirect()->route('jogos.index')->with('message', 'Jogo Cadastrado');
        }
        return redirect()->route('jogos.index')->with('message', 'Algo deu Errado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jogo $jogo)
    {
        return view('jogo_show', ['jogo' => $jogo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jogo $jogo)
    {
        return view('jogos_edit', ['jogo' => $jogo]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->jogo->where('id', $id)->update($request->except('_token', '_method'));
        if ($updated) {
            return redirect()->route('jogos.index')->with('message', 'Jogo Atualizado');
        }
        return redirect()->route('jogos.index')->with('message', 'Algo deu Errado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jogo = $this->jogo->find($id);
    
        if ($jogo) {
            $jogo->delete();
    
            return redirect()->route('jogos.index')->with('message', 'Jogo ' . $jogo->nome . ' deletado');
        }
    
        return redirect()->route('jogos.index')->with('error', 'Jogo não encontrado');
    }
}
