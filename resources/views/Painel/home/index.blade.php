@extends('Painel.templates.templatePainel')

@section('content')

<div class="relatorios">
    <div class="container">
        <ul class="relatorios">
            <li class="col-md-6 text-center">
                <a href="/painel/posts">
                    <img src="{{url("assets/Painel/imgs/noticias-acl.png")}}" alt="Posts" class="img-menu">
                    <h1>{{$totalNotices}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="/painel/roles">
                    <img src="{{url("assets/Painel/imgs/funcao-acl.png")}}" alt="Roles" class="img-menu">
                    <h1>{{$totalRole}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="/painel/permissions">
                    <img src="{{url("assets/Painel/imgs/permissao-acl.png")}}" alt="Permissions" class="img-menu">
                    <h1>{{$totalPermission}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="/painel/users">
                    <img src="{{url("assets/Painel/imgs/perfil-acl.png")}}" alt="Usuários" class="img-menu">
                    <h1>{{$totalUser}}</h1>
                </a>
            </li>
        </ul>
    </div>
</div><!--Relatorios-->

@endsection()