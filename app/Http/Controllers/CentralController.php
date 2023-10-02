<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CentralController extends Controller
{
    public function Index(){
        return view('home');
    }    

    public function BibliotecaJogos(){
        return view('jogos');
    }

    public function Login(){
        return view('login');
    }

    public function Cadastro(){
        return view('cadastro');
    }

    public function Cadastrar(Request $request){
        $User = $request->validate([
            'nickuser' => 'string|required|max:20',
            'password' => 'string|required|min:5'
        ]);
        $User['password'] = bcrypt($User['password']);
        User::create($User);
        return view('jogos');
    }
    
    public function Logar(Request $request){
    // dd($request);
        $this->validate($request,[
            'nickuser' => 'required',
            'password' => 'required'
        ],[
            'nickuser.required' => 'Nickname obrigatorio.',
            'password.required' => 'Senha obrigatoria.'
        ]);
    if (Auth::attempt(['nickuser' => $request->nickuser, 'password' => $request->password])) {
        return view('jogos');
    } else {
        return redirect()->back()->with('danger','Nick ou senha inválido.');
    }
    
    }
    
}
