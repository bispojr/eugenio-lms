<div class="row">
    <div class="col-md-6">
        <h1>Lista de Usuários</h1>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ url('/usuario/criar') }}" class="btn btn-success">Novo Usuário</a>
    </div>
</div>



<hr>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row text-center">
        <table class="table">
            <tr>
                <th class="text-center">Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Matricula</th>
                <th class="text-center">Perfil</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->matricula }}</td>
                    <td>{{ $user->perfil }}</td>
                </tr>
            @endforeach
        </table>
    </div>
  </div>
</div>
