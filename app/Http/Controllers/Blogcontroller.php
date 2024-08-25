<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Blog;
use Exception;

class Blogcontroller extends Controller
{
    //
    public function list(Request $request) 
    {
        $post = Blog::all();
        return response()->json($post, 200);
    }
    public function create(Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'url'=>'required',
            'contato'=>'required|max:10',
            'nome_empresa'=>'required',
            'cnpj'=>'required|min:14|max:14'
        ],[
            'url.required'=>'O campo URL e obrigatório',
            'contato.required'=>'O campo Contato e obrigatório',
            'nome_empresa.required'=>'O campo Nome da Empresa e obrigatório',
            'cnpj.required'=>'O campo CNPJ e obrigatório',
            'cnpj.min'=>'O campo CNPJ deve ter 14 digitos',
            'cnpj.max'=>'O campo CNPJ deve ter 14 digitos',
            'contato.max'=>'O campo Contato deve ter 10 digitos'

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        try 
        {
            $post = new Blog(); 
            $post->url = request()->url;
            $post->contato = request()->contato;
            $post->nome_empresa = request()->nome_empresa;
            $post->cnpj = request()->cnpj;
            $post->save();
            return response()->json($post, 201);
        } catch (Exception $e)
        {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function update(Request $request, $id) 
    {
        $post = Blog::find($id);
        $post->url = request()->url;
        $post->contato = request()->contato;
        $post->nome_empresa = request()->nome_empresa;
        $post->cnpj = request()->cnpj;
        $post->save();
        return response()->json($post, 200);
    }

    public function delete($id) 
    {
        $post = Blog::find($id);
        $post->delete();
        return response()->json('Post deletado com sucesso', 204);
    }
}
