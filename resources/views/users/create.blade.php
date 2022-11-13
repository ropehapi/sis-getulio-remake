@extends("layout.index")

@section("content_header")
    {{__("Usuário")}}
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{__("Cadastrar usuário")}}</h3>
                </div>

                @if(isset($user))
                    <form method="POST" action="{{route("updateUser", $user->id)}}">@csrf @method("PUT")
                @else
                    <form method="POST" action="{{route("storeUser")}}">@csrf
                @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>{{__("Nome")}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__("Ex: Pedro Yoshimura")}}" value="{{$user->name??old("name")}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{__("Email")}}</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="{{__("Ex: pedro@gmail.com")}}" value="{{$user->email??old("email")}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>{{__("Senha")}}</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{__("Confirmação senha")}}</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>{{__("Setores")}}</label>
                                    <div class="form-check">
                                        <input name="secretaria" class="form-check-input" type="checkbox" <?= isset($secretaria) ? 'checked' : '' ?>>
                                        <label class="form-check-label">{{__("Secretaria")}}</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="hospitalaria" class="form-check-input" type="checkbox" <?= isset($hospitalaria) ? 'checked' : '' ?>>
                                        <label class="form-check-label">{{__("Hospitalaria")}}</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="tesouraria" class="form-check-input" type="checkbox" <?= isset($tesouraria) ? 'checked' : '' ?>>
                                        <label class="form-check-label">{{__("Tesouraria")}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="form-check">
                                        <input name="controladoria" class="form-check-input" type="checkbox" <?= isset($controladoria) ? 'checked' : '' ?>>
                                        <label class="form-check-label">{{__("Controladoria")}}</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="materiais" class="form-check-input" type="checkbox" <?= isset($materiais) ? 'checked' : '' ?>>
                                        <label class="form-check-label">{{__("Materiais")}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">{{__("Salvar")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function(){});
    </script>
@endsection
