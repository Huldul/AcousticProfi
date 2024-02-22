
@extends('layout')

@section('content')
<main class="main-page design soundproofing about">
                <div class="breadcrumbs container">
                    <ul class="breadcrumbs__list breadcrumbs__list-other">
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>•</li>
                        <li><a href="/soundproofing">{{$category}}</a></li>
                        <li>•</li>
                        <li>{{$page->title}}</li>
                    </ul>
                </div>
                <section class="service container">
                    <h1 class="service__main-title">{{$page->title}}</h1>
                    <h2 class="service__title">{{$page->subtitle}}</h2>
                    <div class="service__wrapper">
                        <div class="service__group">
                            <img src="{{asset("storage/".$page->image)}}" alt="">
                            {!!$page->main!!}
                        </div>
                        <div class="service__container">
                            <h3 class="service__subtitle">Характеристики</h3>
                            {!!$page->features!!} 
                            <h3 class="service__subtitle">Назначение</h3>
                            {!!$page->purpose!!}
                        </div>
                    </div>
                </section>
                <section class="service__chart chart container">
                    <h2 class="chart__title title">Производительность</h2>
                    <div class="chart__wrapper">
                        <span>Коэффициент поглощения</span>
                        <img src="{{asset("storage/".$page->perf_image)}}" alt="">
                    </div>
                    <h2 class="chart__title title">Galan Hydrid / Absorber - Diffuser</h2>
                    <div class="chart__wrapper">
                        <img src="{{asset("storage/".$page->gal_image)}}" alt="">
                    </div>
                </section>
                <section class="service__coating coating container">
                    <h2 class="chart__title title">Доступные варианты отделки</h2>
                    <span>Отделка ткани</span>
                    <div class="coating__wrapper">
                        @foreach ($page->finishes as $finish)
                            @if ($finish->type =="fabric")
                                <div class="coating__color">
                                    <img src="{{asset("storage/".$finish->image)}}" alt="">
                                    <span>{{$finish->title}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <span>Отделка деревом</span>
                    <div class="coating__wrapper">
                        @foreach ($page->finishes as $finish)
                            @if ($finish->type =="wood")
                                <div class="coating__color">
                                    <img src="{{asset("storage/".$finish->image)}}" alt="">
                                    <span>{{$finish->title}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>
                <section class="service__feedback feedback container">
                    <div class="feedback__wrapper">
                        <div class="bg-svg">
                            <h2 class="feedback__title"><span>Настройте</span> свой продукт и свяжитесь с нами</h2>
                            <svg class="animated-svg" width="230" height="180" viewBox="0 0 112 75.9039" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                        Created with Pixso.
                                </desc>
                                <defs/>
                                <g opacity="">
                                    <path id="Path 2 Copy 3" d="M1.05127 43.1438L1.03174 43.1644C0.472168 43.1823 0.0180664 42.7565 0.000488281 42.1968C-0.0170898 41.637 0.408691 41.1832 0.968262 41.1655L0.98877 41.1848L1.05127 43.1438ZM110.98 42.8L111 42.78C111.56 42.78 112 43.2201 112 43.78C112 44.3401 111.56 44.78 111 44.78L110.98 44.76L110.98 42.8Z" fill="#D8D8D8" fill-opacity="0" fill-rule="nonzero"/>
                                    <path id="Path 2 Copy 3" d="M1 42.165C1 42.165 9.82959 41.8845 14.0522 46.8248C18.2749 51.7651 18.6914 31.7396 22.373 35.9084C26.0547 40.0774 26.605 61.0441 29.7607 56.0261C32.9165 51.0083 32.0933 1 37.1021 1C42.1108 1 38.7891 74.9039 44.3628 74.9039C49.936 74.9039 48.5713 16.6534 52.5747 16.6534C56.5776 16.6534 54.2979 63.9969 59.6045 59.0049C64.9116 54.0128 62.8301 32.358 66.4272 33.2247C70.0244 34.0914 69.5967 52.594 74.3638 50.6152C79.1309 48.6364 77.5396 36.7406 81.8491 36.7406C86.1582 36.7406 84.2451 46.8248 89.2104 46.8248C94.1763 46.8248 93.688 40.6135 96.333 40.6135C98.9785 40.6135 100.095 43.78 102.838 43.78C105.582 43.78 111 43.78 111 43.78" stroke="#FAAD67" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <form action="#" class="feedback__form" method="post">
                        <div class="select-group">
                            <select>
                                @foreach ($page->finishes as $finish)
                                    @if ($finish->type =="fabric")
                                    <option value="{{$finish->title}}">{{$finish->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <select>
                                @foreach ($page->finishes as $finish)
                                    @if ($finish->type =="wood")
                                    <option value="{{$finish->title}}">{{$finish->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Имя">
                            <input type="tel" id="phone" placeholder="Телефон">
                            <select>
                                <option value="Алматы" selected>Алматы</option>
                                <option value="Астана">Астана</option>
                            </select>
                        </div>
                        <textarea name="" id="" rows="5" placeholder="Сообщение"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </section>
        </main>
        @endsection
