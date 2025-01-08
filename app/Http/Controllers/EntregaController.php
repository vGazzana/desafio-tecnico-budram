<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;

class EntregaController extends Controller
{
    public function index()
    {
        return view('entregas.index');
    }

    public function buscar(Request $request)
    {
        $cpf = $request->input('cpf');

        $entregas = Entrega::where('destinatario_cpf', $cpf)
            ->with('transportadora')
            ->get();

        if ($entregas->isEmpty()) {
            return back()->with('error', 'Nenhuma entrega encontrada para este CPF.');
        }

        return view('entregas.resultados', compact('entregas'));
    }

    public function detalhes($id)
    {
        $entrega = Entrega::with(['transportadora', 'rastreamentos'])->findOrFail($id);

        return view('entregas.detalhes', compact('entrega'));
    }
}
