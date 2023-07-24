<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eletrodomestico;
use App\Services\EletrodomesticoService;

class EletrodomesticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Eletrodomestico::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'tensao' => 'required|string',
            'marca' => 'required|string',
        ]);

        return Eletrodomestico::create($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Eletrodomestico::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eletrodomestico = Eletrodomestico::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'tensao' => 'required|string',
            'marca' => 'required|string',
        ]);

        $eletrodomestico->update($validatedData);

        return $eletrodomestico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eletrodomestico = Eletrodomestico::findOrFail($id);
        $eletrodomestico->delete();

        return response()->json(['message' => 'Registro removido com sucesso']);
    }
}
