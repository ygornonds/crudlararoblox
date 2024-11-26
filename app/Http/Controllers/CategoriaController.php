<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCategoriaRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    public readonly Categoria $categoria;

    public function __construct(){

        $this->categoria=new Categoria();
    }
    public function index()
    {
        $categoria = $this->categoria->all();
       return view('categorias', ['categorias'=> $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCategoriaRequest $request)
    {
     $created = $this->categoria->create([
        'nome' => $request->input('nome'),

     ]);

     if ($created) {
        return redirect()->route('categorias.index')->with('message', 'Categoria Cadastrada');
     }
     return redirect()->route('categorias.index')->with('message', 'Algo deu Errado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('categoria_show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
       return view('categoria_edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCategoriaRequest $request, string $id)
    {
         $updated = $this->categoria->where('id', $id)->update($request->except('_token', '_method'));
         if ($updated) {
            return redirect()->route('categorias.index')->with('message', 'Categoria Atualizada');
         }
         return redirect()->route('categorias.index')->with('message', 'Algo deu Errado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = $this->categoria->find($id);
    
        if ($categoria) {
            $categoria->delete();
    
            return redirect()->route('categorias.index')->with('message', 'Categoria ' . $categoria->nome . ' deletada');
        }
    
        return redirect()->route('categorias.index')->with('error', 'Categoria não encontrada');
    }
    
}
