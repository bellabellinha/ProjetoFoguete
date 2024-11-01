<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultado; // Certifique-se de importar o modelo Resultado

class FogueteController extends Controller
{
    public function calcularDistancia(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'vinagre' => 'required|numeric',
            'bicarbonato' => 'required|numeric',
            'peso' => 'required|numeric',
            'equipe' => 'required|string|max:255',
        ]);

        // Receber os valores do formulário
        $vinagre = $request->input('vinagre');
        $bicarbonato = $request->input('bicarbonato');
        $peso = $request->input('peso');

        // Fórmula aleatória para calcular a distância
        $distancia = ($vinagre * 3) + ($bicarbonato * 2) - ($peso * 0.5);

        // Armazenar os resultados na tabela 'resultados'
        Resultado::create([
            'nome_equipe' => $request->input('equipe'),
            'distancia_percorrida' => $distancia,
            'quantidade_vinagre' => $vinagre,
            'quantidade_bicarbonato' => $bicarbonato,
        ]);

        // Redirecionar para a rota de resultado com as informações
        return redirect()->route('foguete')->with([
            'distancia' => $distancia,
            'equipe' => $request->input('equipe'),
        ]);
    }
    public function exibirRanking()
    {
        // Busca os resultados do banco de dados, ordenados pela distância percorrida em ordem decrescente
        $ranking = Resultado::orderBy('distancia_percorrida', 'desc')->get();

        // Retorna a view 'ranking' com os dados do ranking
        return view('ranking', ['ranking' => $ranking]);
    }

}
