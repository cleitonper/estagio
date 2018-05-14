<table class="table">
    <thead>
        <tr>
            <th width="50px">#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th width="120px">
                {{ $active ? '' : 'Excluido' }}
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                @if($active)
                    <td class="text-right">
                        @if(Auth::id() != $user->id)
                            <button type="submit" class="btn btn-danger" title="Excluir usuário" data-toggle="modal" data-target="#confirmation-modal" data-id="{{ $user->id }}" data-username="{{ $user->name }}">
                                <i class="far fa-trash"></i>
                            </button>
                        @endif
                        <a href="{{ route('edit.user', ['id' => $user->id]) }}" class="btn btn-info" title="Editar usuário">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                @else
                    <td>{{ (new DateTime($user->deleted_at))->format('d/m/Y') }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>