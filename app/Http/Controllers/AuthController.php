<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public readonly User $user;

    public function __construct(){
        $this-> user =  new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login');
    }

    public function confirmarLogin(Request $request){
        $credenciais = $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email não é válido',
            'password.required' => 'O campo senha é obrigatório'
        ]);

        if(Auth::attempt($credenciais)){
            $request -> session()->regenerate();
            return redirect() -> intended('/dashboard');
        }else {
            return redirect() -> back() -> with('erro', 'Email ou senha inválido');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this -> user -> create([
            'cpf' => $request->input('cpf'),
            'nome' => $request->input('nome'),
            'email'=> $request->input('email'),
            'endereco'=> $request->input('endereco'),
            'password'=> $request->input('senha'),
        ]);
        
        if($created) {
            return dd('Criado');
        }
        return dd('Não criou'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
