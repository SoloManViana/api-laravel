<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empregos;

class CadastroCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Regista o banco ativo sem depender de imports complexos
        \Illuminate\Support\Facades\Log::info("Banco ativo: " . \Illuminate\Support\Facades\DB::connection()->getDatabaseName());

        $empregos = new Empregos();
        $empregos->cargo = $request->cargo;
        $empregos->salario = $request->salario;

        $empregos->save();

        return response()->json([
            "message" => "Cargo Cadastrado com Sucesso!"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}