<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function entrar(Request $req)
    {
      $dados = $req->all();
      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
        return redirect()->route('inicio');
      }

      return redirect()->route('login');
    }

    public function sair()
    {
      Auth::logout();
      return redirect()->route('login');
    }

    public function index() {
      return view('inicio');
    }
}
