<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Resources\ProdutoResource as ProdutoR;


class ProdutoController extends Controller
{
    public function index01(){
        return view('index01');
    }

    public function index(){

        $search=request('pesquisarProduto');

        if($search){
            $produtos=Produto::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $produtos=Produto::all();
        }
        return view ('events.index',['produtos'=>$produtos, 'search'=>$search]);
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
        $produto->items=$request->items;
        $produto->quantidade=$request->quantidadeProduto;

        //imagem upload
        if($request->hasFile('imagemProduto')&&$request->file('imagemProduto')->isValid()){

            $requestImagem=$request->imagemProduto;
            $extension= $requestImagem->extension();
            //esse vai para o banco
            $imagemName=md5($requestImagem->getClientOriginalName(). Strtotime('now')). "." .$extension;

            $requestImagem->move(public_path("img\lojavirtual"), $imagemName);

            $produto->imagem=$imagemName;
        }

        $produto->save();

        return redirect("events.index")->with('msg','Produto criado com sucesso');
    }

    public function show($id){

        $produtos=Produto::findOrFail($id);
        return view ("events.show",['produtos'=>$produtos]);
    }

    public function up($id){
        $produto=Produto::findOrFail($id);
        return view("events.update",['produtos'=>$produto]);
    }

    public function update(Request $request){

        $produto=Produto::findOrFail($request->id);
        $produto->nome=$request->nomeProduto;
        $produto->descricao=$request->descricaoProduto;
        $produto->preco=$request->precoProduto;
        $produto->data=$request->dataProduto;

        $produto->quantidade=$request->quantidadeProduto;

        //imagem upload
        if($request->hasFile('imagemProduto')&&$request->file('imagemProduto')->isValid()){

            $requestImagem=$request->imagemProduto;
            $extension= $requestImagem->extension();
            //esse vai para o banco
            $imagemName=md5($requestImagem->getClientOriginalName(). Strtotime('now')). "." .$extension;

            $requestImagem->move(public_path("/img/lojavirtual"), $imagemName);

            $produto->imagem=$imagemName;
        }

        $produto->save();

        return redirect('events/index')->with('msg','Produto actualizado com sucesso');

    }

    public function des($id){
        $produto=Produto::findOrFail($id);
        return view("events.destroy",['produtos'=>$produto]);
    }

    public function destroy($id){


        $produto=Produto::findOrFail($id);
        $produto->delete();
        new ProdutoR($produto);
        return redirect('events/index')->with('msg', 'Produto eliminado com sucesso');
    }
}
