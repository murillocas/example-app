<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return $posts;
    }

    public function create(Request $request){
        $posts = new Aluno();
        $posts->nomeUsuario = $request->nomeUsuario;
        $posts->fotoPerfilLink = $request->fotoPerfilLink;
        $posts->legendaFoto = $request->legendaFoto;
        $status = $posts->save();

        if($status){
            return response('Gravado com sucesso.', 201);
        }
        else{
            return 'Deu ruim';
        }
    }
}
