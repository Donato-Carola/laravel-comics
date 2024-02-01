@extends('layouts.app')



@section('main-content')
  <main class="homeMain">
    <section id="imagine" class="">
        <img class="container-fluid w-100 p-0 h-75" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">

    </section>

    <section class="comics pt-5 pb-5">
        <div class="container">
            <div class="row">


                @foreach ($comics as $comicc)
                    <div class="col-md-4 col-lg-2  mb-2">
                        <div class="card h-100 ">
                            <img src="{{ $comicc['thumb'] }}" alt="">
                            <div class="card-body">
                               <h5>{{ $comicc['title'] }}</h5>


                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class=" btn text-white  ">LOAD MORE</button>

        </div>


    </section>

    <section id="preFooter">

        <ul class="container pt-3 pb-3 mb-0 d-flex justify-content-around align-items-center">
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
            <li>
                <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
            </li>
        </ul>

    </section>
</main>
@endsection
