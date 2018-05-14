@extends('layout.default')

@section('content')
    <h1>Gerenciar usuários</h1>
    @include('user.component.list', ['users' => $users, 'active' => true])

    <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="confirmation-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmation-modal">Confirmação de exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir o cadastro do usuário <strong class="username"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form class="inline" id="delete-user-form" method="post" action="">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $('#confirmation-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var username = button.data('username');
            var userid = button.data('id');
            var modal = $(this);

            modal.find('.username').text(username);
            modal.find('#delete-user-form').attr('action', `users/${userid}`);
        });
    </script>
@endpush