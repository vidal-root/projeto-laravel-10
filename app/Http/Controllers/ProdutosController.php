<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $findProduto = ProdutoModel::all();
        
        return view('pages.produtos.paginacao', compact('findProduto'));
    }
}
