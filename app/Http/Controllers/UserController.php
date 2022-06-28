<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome' => [ 
                'Marcos Oliveira',
                'José Lira'
            ],
        ];

        dd($users);
    }
    public function show($id)
    {
        dd('O ID do Usuario é ' . $id);
    }
}
