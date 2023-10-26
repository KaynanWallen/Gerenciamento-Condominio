<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Residents;

class ResidentController extends Controller
{
    public readonly Residents $resident;

    public function __construct(){
        $this-> resident =  new Residents();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function VerificarResident(Request $request){
        $user = DB::table('residents')->where('nome', 'kaynan')->first();
        dd($user);
    }

    public function logout(Request $request){

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this -> resident -> create([
            'nome' => $request->input('nome'),
            'rg'=> $request->input('rg'),
            'cpf'=> $request->input('cpf'),
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
