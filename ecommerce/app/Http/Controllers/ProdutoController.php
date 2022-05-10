<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Fornecedor;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view("produto.index",
            compact("produtos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        return view("produto.create",
               compact("categorias", "fornecedores"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $produto = new Produto();
            $dados = $request->only($produto->getFillable());
            Produto::create($dados);
            return redirect()->action(
                [ProdutoController::class, 'index'])
                    ->with("resposta", "Registro inserido!");
        } catch (\Exception $e) {
            return redirect()->action(
                [ProdutoController::class, 'index'])
                ->with("resposta", "Erro ao inserir!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $produto = Produto::findOrFail($id);
        $fornecedores = Fornecedor::all();
        return view('produto.edit',
            compact('categorias', 'produto', 'fornecedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $produto = new Produto();
            $dados = $request->only($produto->getFillable());
            Produto::whereId($id)->update($dados);
            return redirect()->action([ProdutoController::class,'index'])
                    ->with("respota","Registro alterado!");
        } catch (\Exception $e) {
            return redirect()->action([ProdutoController::class,'index'])
                ->with("respota","Erro ao alterar!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Produto::destroy($id);
            return redirect()->
            action([ProdutoController::class, 'index'])
                ->with("resposta","Produto excluido!");
        } catch (\Exception $e) {
            return redirect()->action([ProdutosController::class, 'index'])
                ->with("resposta","Erro ao excluir produto!");
        }
    }
}
