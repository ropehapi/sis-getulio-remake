@extends("layout.index")

@section("content_header")
    {{__("Usuários")}}
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table id="usersTable" class="table table-bordered table-hover dataTable dtr-inline">
                <thead>
                <tr>
                    <th class="sorting">{{__("Nome")}}</th>
                    <th class="sorting">{{__("Email")}}</th>
                    <th class="sorting">{{__("Perfil")}}</th>
                    <th class="sorting">{{__("Ações")}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->profile}}</td>
                        <td>
                            <form method="GET" action="{{route("editUser",$user->id)}}" style="display: inline">
                                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            </form>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" onclick="setDeleteModalContent({{$user->id}},'{{$user->name}}')"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <form method="POST" action="{{route('deleteUser')}}">
        @csrf
        @method("DELETE")
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">{{__("Excluir registro")}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{__("Tem certeza que deseja excluir o registro ")}}<b id="record"></b></p>
                        <input type="text" name="id" id="id" hidden>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-outline-light" data-dismiss="modal">{{__("Cancelar")}}</button>
                        <button class="btn btn-outline-light">{{__("Excluir")}}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section("js")
    <script>
        $(document).ready(function(){
            $('#usersTable').DataTable();
        });

        function setDeleteModalContent(id, record){
            $("#id").val(id);
            $("#record").text(record);
        }
    </script>
@endsection
