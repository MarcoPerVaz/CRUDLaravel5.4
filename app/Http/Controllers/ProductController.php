<?php

namespace CRUDLaravel54\Http\Controllers;

use Illuminate\Http\Request;
// Importado CRUDLaravel5.4
use CRUDLaravel54\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'Desc')->paginate();
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with('info', 'El producto fue eliminado');
    }
}
