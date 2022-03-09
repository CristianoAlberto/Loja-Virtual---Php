<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index01(){
        return view('index01');
    }

    public function index(){
        $produtos=Produto::all();
        return view ('events.index',['produtos'=>$produtos]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $produto=new Produto;
        $produto->nome=$request->nomeProduto;
        $produto->descricao=$request->descricaoProduto;
        $produto->preco=$request->precoProduto;
        $produto->data=$request->dataProduto;

        //imagem upload
        if($request->hasFile('imagemProduto')&&$request->file('imagemProduto')->isValid()){

            $requestImagem=$request->imagemProduto;
            $extension= $requestImagem->extension();
            //esse vai para o banco
            $imagemName=md5($requestImagem->getClientOriginalName(). Strtotime('now')). "." .$extension;

            $requestImagem->move(public_path("img/lojavirtual"), $imagemName);

            $produto->imagem=$imagemName;
        }

        $produto->save();

        return redirect('events.index')->with('msg','Produto criado com sucesso');
    }

    public function show($id){

        $produtos=Produto::findOrFail($id);
        return view ("events.show",['produtos'=>$produtos]);
    }

    public function update(Request $request,$id){
        $produto=Produto::findOrFail($id);
        $produto->nome=$request->nomeProduto;
        $produto->descricao=$request->descricaoProduto;
        $produto->preco=$request->precoProduto;
        $produto->data=$request->dataProduto;

        //imagem upload
        if($request->hasFile('imagemProduto')&&$request->file('imagemProduto')->isValid()){

            $requestImagem=$request->imagemProduto;
            $extension= $requestImagem->extension();
            //esse vai para o banco
            $imagemName=md5($requestImagem->getClientOriginalName(). Strtotime('now')). "." .$extension;

            $requestImagem->move(public_path("img/lojavirtual"), $imagemName);

            $produto->imagem=$imagemName;
        }

        $produto->save();

        return redirect('events.index')->with('msg','Produto actualizado com sucesso');

    }
}
