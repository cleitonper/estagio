@extends('layout.default')

@section('content')
    <h1>Editar usuário</h1>
    <hr>
    @include('user.component.form', [
        'action' => route('update.user', ['id' => $user->id]),
        'label' => 'atualizar',
        'method' => 'put']
    )
@endsection