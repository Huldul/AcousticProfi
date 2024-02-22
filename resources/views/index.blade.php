
@extends('layout')

@section('content')
 <main class="main-page">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                  @foreach ($swippers as $swipper)
                  <div class="swiper-slide">
                    <img src="{{asset("storage/".$swipper->image)}}" alt="">
                  </div>
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <h1 class="main-page__title">{{$page->head_title}}</h1>
              </div>
              <section class="main-page__services services">
                <div class="services__wrapper">
                    <h2 class="services__title title">{{$page->services_title}}</h2>
                    <div class="services__container">
                        <a href="/soundproofing" class="services__card">
                            <img src="{{asset("storage/".$page->sound_image)}}" alt="">
                            <h3 class="card__title">{{$page->sound_title}}</h3>
                        </a>
                        <a href="/design" class="services__card">
                            <img src="{{asset("storage/".$page->acoustic_image)}}" alt="">
                            <h3 class="card__title">{{$page->acoustic_title}}</h3>
                        </a>
                    </div>
                </div>
              </section>
        </main>
        @endsection
