@extends('guest.layouts.base')

@section('content')
    {{-- <ul>
        @foreach ($comics as $comic)
            <li>{{$comic['title']}}</li>
        @endforeach
    </ul> --}}

    <div class="container-black">
        <div class="main-img"></div>
        <div class="main-back">
          <div class="current-series">
            <p>CURRENT SERIES</p>
          </div>
          <div class="container cartoon-card">


            @include('guest.partials.cards')
          </div>
          <div class="">
            <button class="load-more">LOAD MORE</button>
          </div>
        </div>
      </div>
      <div class="container-blue-icon">
        <div class="container icons">
          <div class="icon">
            <img class="icon-img" src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="" />
            <span>DIGITAL COMICS</span>
          </div>
          <div class="icon">
            <img class="icon-img" src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
            <span>DC MERCHANDISE</span>
          </div>
          <div class="icon">
            <img class="icon-img" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
            <span>SUBSCRIPTION</span>
          </div>
          <div class="icon">
            <img class="icon-img" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
            <span>COMIC SHOP LOCATOR</span>
          </div>
          <div class="icon">
            <img class="icon-img" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
            <span>DC POWER VISA</span>
          </div>
        </div>
      </div>
@endsection
