<div>
    <div class="card">
        <div class="card-header">
            <input wire:model='search' class="form-control" type="text" placeholder="Búsqueda de usuario">
        </div>
        @if($users->count())
            <div class="card-body">
                <table class="table table-dark table-responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{ $user->proessa->name }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->status}}</td>
                            <td width="10px;">
                                <a class="btn btn-primary" href="{{ route('admin.users.edit',$user) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{ route('admin.users.destroy',$user) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex flex-row mt-2 card-footer">
                {{$users->links('pagination::bootstrap-4')}}
            </div>
        @else
            {{--https://adminlte.io/themes/dev/AdminLTE/pages/UI/general.html--}}
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> No hay resultados</h5>
                    Intente teclear otra palabra
                </div>
            </div>
        @endif

    </div>
</div>
