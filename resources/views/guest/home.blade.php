@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')

<main>
  <div class="jumbotron"></div>
  <div class="main-container">
      <h2 class="main-title">current series</h2>
  </div>
  <div class="container">
      <div class="thumbs">
        @foreach ($comics as $comic)
        <div class="thumb">
          <div class="img-container">
            <img src="{{ $comic['thumb'] }}" alt="">
          </div>
          <span class="subtitle">{{ $comic['title'] }}</span>
        </div>
        @endforeach
      </div>  
      <div class="container-btm">
          <div class="load-more">
              <span>load more</span>
          </div>
      </div>
  </div>

</main> 
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection