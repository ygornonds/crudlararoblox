<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateJogoRequest;
use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Categoria;
use App\Models\Criador;

class JogosController extends Controller
{
    private Jogo $jogo;

    public function __construct()
    {
        $this->jogo = new Jogo();
    }

    public function index()
    {
        $jogos = $this->jogo->all();
        return view('jogos', ['jogos' => $jogos]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        $criadores = Criador::all();
        return view('jogos_create', [
            'categorias' => $categorias,
            'criadores' => $criadores
        ]);
    }

    public function store(StoreUpdateJogoRequest $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'id_categoria' => 'required|exists:categorias,id',
            'id_criador' => 'required|exists:criadores,id',
        ]);

        $created = $this->jogo->create([
            'nome' => $request->input('nome'),
            'id_categoria' => $request->input('id_categoria'),
            'id_criador' => $request->input('id_criador'),
        ]);

        return redirect()
            ->route('jogos.index')
            ->with('message', $created ? 'Jogo cadastrado com sucesso!' : 'Erro ao cadastrar o jogo.');
    }

    public function show(Jogo $jogo)
    {
        return view('jogos_show', ['jogo' => $jogo]);
    }

    public function edit(Jogo $jogo)
    {
        $categorias = Categoria::all();
        $criadores = Criador::all();
        return view('jogos_edit', [
            'jogo' => $jogo,
            'categorias' => $categorias,
            'criadores' => $criadores
        ]);
    }

    public function update(StoreUpdateJogoRequest $request, Jogo $jogo)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'id_categoria' => 'required|exists:categorias,id',
            'id_criador' => 'required|exists:criadores,id',
        ]);

        $updated = $jogo->update($request->only(['nome', 'id_categoria', 'id_criador']));

        return redirect()
            ->route('jogos.index')
            ->with('message', $updated ? 'Jogo atualizado com sucesso!' : 'Erro ao atualizar o jogo.');
    }

    public function destroy(Jogo $jogo)
    {
        $nome = $jogo->nome;

        if ($jogo->delete()) {
            return redirect()
                ->route('jogos.index')
                ->with('message', "Jogo '$nome' deletado com sucesso!");
        }

        return redirect()
            ->route('jogos.index')
            ->with('error', 'Erro ao deletar o jogo.');
    }
}
