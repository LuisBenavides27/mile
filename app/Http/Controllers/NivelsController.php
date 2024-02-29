<?php

namespace App\Http\Controllers;

use App\Models\game;
use App\Models\nivels;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class NivelsController extends Controller
{

    public function index()
    {
        if (auth()->user()->game->live == 0) {
            return redirect()->route('dashboard')->with('danger', 'LO SIENTO MI AMOR, TE QUEDASTE SIN VIDAS da click en el boton inferior para solicitar una vida');
        }
        $niveles = nivels::all();

        foreach ($niveles as $nivel) {
            if ($nivel->status) {
                return view("nivels.nivel{$nivel->id}");
            }
        }

        return redirect()->route('dashboard')->with('info', 'FELICITACIONES MI AMOR TERMINASTE TODO EL JUEGO, TE AMO MUCHO');
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

    public function sex()
    {
        return view('sex');
    }

    public function panel()
    {
        $users = User::all();
        return view('panel', compact('users'));
    }

    public function live(Request $request)
    {
        
        if ($request->validar == 1) {   
            $live = Game::where('user_id', $request->user_id)->increment('live');         
            if ($live) {
                return redirect()->route('panel')->with('info', 'SE AGREGO UNA VIDA A MILENA');
            } else {
                return redirect()->route('panel')->with('danger', 'ALGO SALIO MAL Y NO FUE POSIBLE AGREGAR UNA VIDA, EMJOR VALIDA LA BASE DE DATOS');
            }
        }elseif($request->validar == 2){
            Game::where('user_id', $request->user_id)->increment('reto');
            return redirect()->route('panel')->with('info', 'SE CAMBIO DE RETO A MILENA');
        }else{
            return redirect()->route('panel')->with('danger', 'ALGO SALIO MAL Y NO FUE POSIBLE CAMBIAR DE RETO, EMJOR VALIDA LA BASE DE DATOS');
        }
    }

    public function users()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('users', compact('users', 'roles'));
    }

    public function test()
    {
        $game = game::where('user_id', auth()->user()->id)->pluck('reto')->first();

        switch ($game) {
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
            default:
                return view('retos.1');
        }
    }
}
