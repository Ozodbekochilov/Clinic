<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public $url;

    public function redirectToUserLevel()
    {

        if (Auth::user()->role == 'admin') {
            $this->url = 'admin/';
        } else if (Auth::user()->role == 'user') {
            $this->url = 'user/';
        }

        return $this->url;
    }

    public function isAdmin()
    {
        if (Auth::user()->role == 'admin') {
            return true;
        } else {
            return false;
        }
    }

    public function isUser()
    {
        if (Auth::user()->role == 'user') {
            return true;
        } else {
            return false;
        }
    }
}
