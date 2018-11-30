
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @forelse($notices as $notice)

        @can('view',$notice)
            <h1>{{$notice->title}}</h1>
            <p>{{$notice->description}}</p><br>
            <b>Auth:{{$notice->user->name}}</b>
    
        
            <a href="{{url("/post/$notice->id/update")}}">Edit</a>

        @endcan
        
        @empty
        <p>Nao tem noticias cadastrada</p>
        @endforelse
        
</div>
@endsection
