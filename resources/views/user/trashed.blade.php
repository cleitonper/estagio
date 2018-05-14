@extends('layout.default')

@section('content')
    <h1>Usuários deletados</h1>
    @if($users->isNotEmpty())
        @include('user.component.list', ['users' => $users, 'active' => false])
    @else
        <p>Não há usuários deletados.</p>
    @endif
@endsection