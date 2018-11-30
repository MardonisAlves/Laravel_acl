@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <h1>{{$notice->title}}</h1>
        <p>{{$notice->description}}</p><br>
        <b>Auth:{{$notice->user->name}}</b>
        <hr>
        
  
       
</div>
@endsection
