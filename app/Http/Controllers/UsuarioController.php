<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UsuarioRequest;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;


    public function registrar(UsuarioRequest $request)
    {
        $credenciais = array_merge($request->all(), [
            'password' => bcrypt($request->input('password')),
        ]);

        User::create($credenciais);

        return view('home');
    }

    public function login(LoginRequest $request)
    {
        $credenciais = $request->only('email', 'password');

        if (!Auth::attempt($credenciais, false)) {
            return redirect()
                ->back()
                ->with('Erro', 'O email ou a senha estão incorretos');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return view('home');
    }
}
