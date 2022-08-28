<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function dd;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request); dd() Función de laravel
        // dd($request->get('name'));

        $this->validate($request, [
            'name' => 'required|max:30', //el nombre tiene que ser el mismo del atributo name
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required'
        ]);

    }
}
