@extends('guest.layout.base')

@section('documentTitle')
{{$nomePagina}}
@endsection

@section('content')
<div class="jumbo-comic"></div> 
<div class="blue-banner"></div>
<div class="container">
    <div class="comic-container">
        <img class="thumb-img" src="{{ $comic['thumb'] }}" alt="{{$comic['title'] }}">
    </div>
    <h3>{{$comic['title']}}</h3>
    
</div>

@endsection