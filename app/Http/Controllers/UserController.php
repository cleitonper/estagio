<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if(Auth::user()->cant('update', $user)) {
            return redirect()->route('home')->withErrors([
                'error' => 'Você não possui autorização para atualizar este usuário.'
            ]);
        }
        return view('user.edit', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'email'    => 'required|unique:users',
            'password' => 'required',
            'name'     => 'required',
        ]);

        User::create($user);

        return redirect()->route('login')->with(
            'success', 'Usuário criado com êxito. Faça login para continuar.'
        );
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        if(Auth::user()->cant('update', $user)) {
            return redirect()->route('home')
            ->withInput()
            ->withErrors([
                'error' => 'Você não possui autorização para atualizar este usuário.'
            ]);
        }

        $request->validate([
            'email'    => "required|unique:users,email,$id",
            'name'     => 'required',
        ]);

        $user->update($request->all());

        return redirect()->back()->with(
            'success', 'Dados atualizados com êxito.'
        );
    }

    public function list()
    {
        $this->authorize('manage', User::class);
        return view('user.active', ['users' => User::all()]);
    }

    public function trashed()
    {
        $this->authorize('manage', User::class);
        return view('user.trashed', ['users' => User::onlyTrashed()->get()]);
    }

    public function delete($id)
    {
        $this->authorize('manage', User::class);
        if($id === Auth::id()) {
            return redirect()->back()->withErrors([
                'error' => 'Não é possível excluir sua própria conta.'
            ]);
        }

        User::find($id)->delete();

        return redirect()->back()->with(
            'success', 'Usuário excluído com êxito'
        );
    }
}
