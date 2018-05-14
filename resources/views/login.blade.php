@extends('layout.base')

@section('body')
    <main class="login-page">
        <section class="login-panel">
            <header class="login-header">
                Login
            </header>
            
            <form action="{{ route('logon') }}" method="post" class="login-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <input type="submit" value="Entrar" class="btn btn-block btn-orange login-submit">
                <a href="{{ route('create.user') }}" class="btn btn-link orange">Criar conta</a>
            </form>
        </section>
    </main>
@endsection