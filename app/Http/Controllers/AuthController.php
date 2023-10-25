<?php

namespace App\Http\Controllers;

use App\Models\User;
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
