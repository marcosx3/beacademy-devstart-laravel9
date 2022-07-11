<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUpdateFormRequest;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::paginate(5);

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

    public function store(StoreUpdateFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->imagem) {
            $file = $request['image'];
            $path = $file->store('profile', 'public');
            $data['image'] = $path;
        }

        $this->model->create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateFormRequest $request, $id)
    {
        $data = $request->all();
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        DB::table('users')->where('id', $id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);


        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        DB::table('users')
            ->where('id', $id)
            ->delete();

        return redirect()->route('users.index');
    }
}
