<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function listar(){
        // $produtos = Produto::all();
        $produtos = Produto::where('loja',Auth::user()->loja)->get();
        return view('produtosListar',['produtos'=>$produtos]);
    }
    
    public function cadastrar(){
        return view('produtoCadastrar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        $produto["loja"] = Auth::user()->loja;
        $produto["descricao"] = $dados["descricao"];
        $produto["nome"] = $dados["nome"];
        $produto["preco"] = (float)$dados["preco"];
        $produto["quantidade"] = (int)$dados["quantidade"];
        $produto["cod_barras"] = $dados["cod_barras"];

        Produto::create($produto);
        return redirect()->route('produtos.listar');
    }

    public function editar($req){
        $produto = Produto::find($req);
        return view('produtoEditar',['produto'=> $produto]);
    }

    public function atualizar(Request $req){
        $dados = $req->all();
        $produto["descricao"] = $dados["descricao"];
        $produto["nome"] = $dados["nome"];
        $produto["preco"] = (float)$dados["preco"];
        $produto["quantidade"] = (int)$dados["quantidade"];
        $produto["cod_barras"] = $dados["cod_barras"];

        // dd(Produto::find($dados["id"]));
        Produto::find($dados["id"])->update($produto);
        return redirect()->route('produtos.listar');
    }


}
