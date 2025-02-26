<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringController extends Controller
{
    public function todasStringsMaisLongas(Request $request): \Illuminate\Http\JsonResponse
    {
        // Validação: garantir que o input seja um array
        $request->validate([
            'inputArray' => 'required|array',
            'inputArray.*' => 'string|max:10',  
        ]);

        // Pega o array de strings do input
        $inputArray = $request->input('inputArray');

        // Obtém o tamanho da maior string
        $maxLength = max(array_map('mb_strlen', $inputArray));

        // Filtra e retorna as strings com o maior tamanho
        $result = array_filter($inputArray, function ($string) use ($maxLength) {
            return mb_strlen($string) === $maxLength;
        });

        return response()->json([
            'stringsMaisLongas' => array_values($result) // array_values para reindexar a array
        ]);
    }
}
