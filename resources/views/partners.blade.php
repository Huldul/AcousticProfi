
@extends('layout')

@section('content')
<main class="main-page soundproofing about">
                <div class="breadcrumbs container">
                    <ul class="breadcrumbs__list breadcrumbs__list-other">
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>•</li>
                        <li>Наши партнеры</li>
                    </ul>
                </div>
                <section class="partners container">
                    <h1 class="partners__title">Наши партнеры</h1>
                    @foreach ($partners as $partner)
                    <a href="{{$partner->url}}" class="partners__wrapper">
                        <div class="partners__container">
                            <img src="{{asset("storage/".$partner->image)}}" alt="">
                        </div>
                    </a>
                    @endforeach
                </section>
        </main>
        @endsection
