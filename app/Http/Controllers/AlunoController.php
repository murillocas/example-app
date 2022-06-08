<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all();
        return $alunos;
    }

    public function create(Request $request){
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->cpf = $request->cpf;
        $status = $aluno->save();

        if($status){
            return response('Gravado com sucesso.', 201);
        }
        else{
            return 'Deu ruim';
        }
    }
}
