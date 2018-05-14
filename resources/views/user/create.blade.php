@extends('layout.default')

@section('content')
    <h1>Criar usuário</h1>
    <hr>
    @include('user.component.form', [
        'action' => route('store.user'),
        'label' => 'criar',
        'method' => 'post']
    )
@endsection