<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function store(PessoaRequest $request) : JsonResponse
    {
        $data = $request->all();

        $pessoa = Pessoa::create($data);

        return  response()->json($pessoa, 201);
    }

    public function show(Request $request) : JsonResponse
    {
        $pessoa = Pessoa::where('cpf', $request->cpf)->get();

        return response()->json($pessoa, 200);
    }

}
