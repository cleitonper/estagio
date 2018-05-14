@extends('layout.default')

@section('content')
    <h1>Usuários deletados</h1>
    @include('user.component.list', ['users' => $users, 'active' => false])
@endsection