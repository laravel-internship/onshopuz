<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UsoterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderby('id', 'desc')->paginate(\request()->get('perPage', 10));

        return view('admin.user', ['user' => $user]);
    }
    public function create()
    {
        return view('admin.uform');
    }
    public function store(UsoterRequest $request)
    {
        // dd(getdate());
        $params = $request->validated();
        $params['password'] = Hash::make($params['password']);
        // dd($params);
        $params = User::create($params);
        $params->assignRole('supplier');

        return redirect()->route('user');
    }
    public function edit($id)
    {
        $user = User::find($id);
        // dd($product);
        return view('admin.uform', ['user' => $user]);
    }

    public function update(UsoterRequest $request, $id)
    {
        $params = $request->validated();
        $params['password'] = Hash::make($params['password']);

        $user = User::find($id);
        $user->update($params);
        return redirect()->route('user');
    }


    public function delete($id)
    {
        $params = User::find($id);
        // dd($id);
        $params->delete();
        return redirect()->route('user');
    }
}
