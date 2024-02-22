
@extends('layout')

@section('content')
<main class="main-page soundproofing about">
                <div class="breadcrumbs container">
                    <ul class="breadcrumbs__list breadcrumbs__list-other">
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>•</li>
                        <li>Наши проекты</li>
                    </ul>
                </div>
                <section class="projects container">
                    <h1 class="projects__title partners__title">Наши проекты</h1>
                    <div class="projects__wrapper">
                        @foreach ($projects as $project)
                        <div class="projects__container">
                            <img src="{{asset("storage/".$project->image)}}" alt="">
                            <h2>{{$project->title}}</h2>
                            <p>{{$project->main}}</p>
                        </div>
                        @endforeach
                    </div>
                </section>
        </main>
        @endsection

