<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    public function create(Request $request)
    {
        $request -> getPostVars();
        dd( $request -> getPostVars());

    }
}
