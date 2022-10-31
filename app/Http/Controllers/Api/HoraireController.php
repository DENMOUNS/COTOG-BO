<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horaire;

class HoraireController extends Controller
{
    public function allPosition(){
        $position = Horaire::all();
        $response = [
            'message_fr'    => "Liste des positions",
            'message_en'    => "List of positions",
            'data' => $position
        ];
        return response()->json($response, 200);
    }

    public function arriveeDepart(int $type){
        $arrivee = Horaire::where('type', 0)->orderByDesc('id')->get();
        $response = [
            'message_fr'    => "Liste des positions",
            'message_en'    => "List of positions",
            'data' => $arrivee
        ];
        return response()->json($response, 200);
    }
}
