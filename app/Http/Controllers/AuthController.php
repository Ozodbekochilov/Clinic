<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $fl;

    public function __construct(RoleController $fl)
    {
        $this->fl = $fl;
    }

    function register(Request $req)
    {

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role' => 'user'
        ]);

        return $this->login($req);
    }

    function login(Request $req)
    {
        $credentials = $req->only('name', 'password');

        if (Auth::attempt($credentials)) {

            $req->session()->regenerate();

            return redirect($this->fl->redirectToUserLevel());
        }

        return back()->with('error', 'Invalid Credeantials');
    }
}
