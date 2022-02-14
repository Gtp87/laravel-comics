@extends('guest.layout.base')

@section('documentTitle')
{{$nomePagina}}
@endsection

@section('content')
    <main class="comic">
        <div class="jumbo-comic"></div>
        <div class="blue-banner"></div>
        <div class="container-55">
            <div class="comic-info">
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title'] }}">
                <div class="blue-bar book">comic book</div>
                <div class="blue-bar gallery">view gallery</div>
            </div>
            <div class="book-container">
                <div class="description">
                    <h3 class="comic-title">{{$comic['title']}}</h3>
                    <div class="container-available">
                        <div class="left-col">
                            <div class="price">
                                <span class="us-price">U.S. Price: </span><span>{{$comic['price']}}</span>
                            </div>
                            <div class="available">
                                <span class="check-available">available</span>
                            </div>
                        </div>
                        <div class="right-col">
                            <div class="text-available">
                                <span>Check Availability</span>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
                <div class="advertisement">
                    <span>advertisement</span>
                    <img src="{{asset('img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </main>
@endsection