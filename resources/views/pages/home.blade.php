@extends('layouts.app')



@section('main-content')
    <section id="imagine" class="">
        <img class="container-fluid w-100 p-0 h-75" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">

    </section>

    <section class="comics">
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3"></div>

                @foreach ($comics as $comicc)
                    <div class="col">
                        <div class="card">
                            <img src="" alt="">
                            <div class="card-body">
                                <h3>
                                    {{ $comicc['title'] }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class=" btn text-white  ">LOAD MORE</button>

        </div>


    </section>

    <section  id="preFooter">

        <ul class="container pt-3 pb-3 mb-0 d-flex justify-content-around align-items-center">
            <li >
                <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
            </li>
            <li>
                <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
            </li>
            <li>
                <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
            </li>
            <li>
                <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
            </li>
            <li>
                <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
            </li>
        </ul>

    </section>
@endsection
