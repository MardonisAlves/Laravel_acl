@extends('Painel.templates.templatePainel')

@section('content')

<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div><!--Actions-->

<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Listagem dos Noticias
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th width="150px">Ações</th>
        </tr>
     
        @forelse( $notices as $notice )
        <tr>
            <td>{{$notice->title}}</td>
            <td>{{$notice->description}}</td>
            <td>
            @can('update',$notice)
                <a href="{{url("/painel/post/$notice->id/edit")}}" class="permission">
                    <i class="fa fa-lock"></i>
                </a>
                <a href="{{url("/painel/post/$notice->id/edit")}}" class="edit">
                    <i class="fa fa-pencil-square"></i>
                </a>
                <a href="{{url("/painel/post/$notice->id/delete")}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
            @endcan
        </tr>
        @empty
        <tr>
            <td colspan="90">
                <p>Nenhum Resultado!</p>
            </td>
        </tr>
        @endforelse
    </table>

</div>

@endsection