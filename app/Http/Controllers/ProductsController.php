<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Products::all();
        return view('admin.products.list_products',['products' => $products]);
    }
    public function renderiza_tela(){
        return view('admin.products.create_product');
    }
    public function create(Request $request){
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'product_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
                    
        $file = rand(0,9999).'-'.$request->file('product_img')->getClientOriginalName();
        $path = $request->file('product_img')->storeAs('upload', $file);
            
        $product = Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'product_img' => $path
        ]);
            
        return redirect()->route('products.index')->with('success', 'Produto salvo com sucesso!'); 
    }

    public function detail($id){
        $product = Products::findOrFail($id);
        return view('admin.products.detail_product',['product' => $product]);        
    }
    
    public function update(Request $request, $id){
        $product = Products::findorFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso!');  
    }

    public function delete($id){
        $product = Products::findorFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto excluido com sucesso!');  
    }
    
}