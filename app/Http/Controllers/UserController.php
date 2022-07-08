<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function index()
    {
        $users = User::all();

        return  view('users.index', compact('users'));
    }
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request )
    {
      $data = $request->all();
      $data['password'] = bcrypt($request->password);
      $this->model->create($data);
      
      return redirect()->route('users.index');
    }
}
