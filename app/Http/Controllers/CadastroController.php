<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;

class CadastroController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('cadastro', compact('users'));
    }
}
