<?php

namespace App\Http\Controllers;

use App\Models\nivels;
use Illuminate\Http\Request;

class NivelsController extends Controller
{
    
    public function index()
    {
        if(auth()->user()->game->live == 0){
            return redirect()->route('dashboard')->with('danger', 'LO SIENTO MI AMOR, TE QUEDASTE SIN VIDAS da click en el boton inferior para solicitar una vida');
        }
        $niveles = nivels::all();

        foreach ($niveles as $nivel) {
            if ($nivel->status) {
                return view("nivels.nivel{$nivel->id}");
            }
        }

        return redirect()->route('dashboard')->with('info', 'FELICITACIONES TERMINASTE');
    }


    public function niveluno(Request $request)
    {
        $nivel = nivels::find($request->nivel);

        if ($nivel->answer == $request->resultado) {
            auth()->user()->game->increment('points');
            $nivel->update(['status' => false]);
            return redirect()->route('nivels')->with('info', '¡¡¡BIEN HECHO !!! tu respuesta fue correcta mi amor, acabas de suma un punto, sigue asi, aqui esta la siguiente pregunta');
        } else {
            auth()->user()->game->decrement('live');
            return redirect()->route('nivels')->with('danger', '¡¡¡UPS!!! Lo siento mucho bebe,  Tu respuesta :' . $request->resultado . ' es una ¡¡¡RESPUESTA INCORRECTA!!!,  acabas de perder una vida, pero sigue intentando');
        }
    }

    public function sex(){
        return view('sex');
    }

    public function test($id){
        switch($id){
            case 1:
                return view('retos.1');
                break;
            case 2:
                return view('retos.2');
                break;    
            case 3:
                return view('retos.3');
                break;    
            case 4:
                return view('retos.4');
                break;    
        }
            

        
    }

}
