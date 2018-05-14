@extends('layout.base')

@section('body')
    <header class="main-header">
        @if(Auth::check())
            <div class="btn-group dropleft">
                <button type="button" class="btn btn-orange dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Olá {{ Auth::user()->name }}</span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('edit.user', ['id' => Auth::id()]) }}">Gerenciar conta</a>
                    @if(Auth::user()->isAdm())
                        <a class="dropdown-item" href="{{ route('list.users') }}">Gerenciar usuários</a>
                        <a class="dropdown-item" href="{{ route('trashed.users') }}">Usuários deletados</a>
                    @endif
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">Sair</a>
                </div>
            </div>
        @else
            <a href="/login" class="color-white">Login</a>
        @endif
    </header>

    <main class="main-cntent">
        @yield('content')
    </main>
@endsection