<form action="{{ $action }}" method="post">
    {{ method_field($method) }}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $user->name ?? old('name') ?? '' }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="{{ $user->email ?? old('email') ?? '' }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-medium btn-orange text-uppercase">
        <strong>{{ $label }}</strong>
    </button>
    <button type="reset" class="btn btn-medium btn-link orange text-uppercase">
        Limpar
    </button>
</form>