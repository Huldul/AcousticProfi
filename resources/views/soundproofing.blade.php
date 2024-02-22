
@extends('layout')

@section('content')
<main class="main-page soundproofing about">
            <div class="soundproofing__img main-page__video">
                <div class="breadcrumbs container">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>•</li>
                        <li>Звукоизоляция</li>
                    </ul>
                </div>
                <img src="{{asset("storage/".$page->head_image)}}" alt="">
            </div>
            <div class="soundproofing-links__group about-links__group container">
                <a href="#">Звукоизоляция</a>
                <a href="/design">Акустическое проектирование</a>
            </div>
            <section class="soundproofing__more container">
                <div class="bg-svg">
                    <h1 class="soundproofing__title about-us__title title">Звукоизоляция</h1>
                    <svg class="animated-svg" width="112.000000" height="75.903931" viewBox="0 0 112 75.9039" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                {!!$page->head_text!!}     
                <div class="soundproofing__desc desc">
                <div class="desc__wrapper">
                    <div>
                        <h2>{{$page->main_title}}</h2>
                        {!!$page->main_text!!}
                    </div>
                    <video autoplay muted loop>
                        <?php
                    // Декодируем JSON строку
                    $data = json_decode(html_entity_decode($page->main_video), true);

                    // Получаем значение download_link
                    $downloadLink = $data[0]['download_link'];
                    ?>
                        <source src="{{asset("storage/".$downloadLink)}}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="soundproofing__wrapper">
                <div class="soundproofing__container">
                    <div class="bg-svg">
                        <h2 class=" title">Звукоизоляция</h2>
                        <svg class="animated-svg" width="112.000000" height="75.903931" viewBox="0 0 112 75.9039" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                @foreach ($advantages as $advantage)
                <a class="soundproofing__box" href="/soundproofing-inner/{{$advantage->slug}}">
                    <img src="{{asset("storage/".$advantage->image)}}" alt="">
                    <p>{{$advantage->title}}</p>
                </a>
                @endforeach
            </div>
            </section>
        </main>
        @endsection

