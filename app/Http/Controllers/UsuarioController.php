<?php

namespace App\Http\Controllers;

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


    public function registrar(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255', 'confirmed']
        ]);

        $credenciais = array_merge($request->all(), [
            'password' => bcrypt($request->input('password')),
        ]);

        User::create($credenciais);

        return view('home');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255']
        ]);

        $credenciais = $request->only('email', 'password');

        if (!Auth::attempt($credenciais, false)) {
            return redirect()
                ->back()
                ->with('falha', 'O email ou a senha estão incorretos');
        }

        return redirect(route('home.inicio'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
