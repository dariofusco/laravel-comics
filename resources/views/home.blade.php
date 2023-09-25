@extends('layout')

@section('main')
    <main>
        <div class="hero"></div>
        <div class="container text-center py-5">
            <span class="badge badge-primary">CURRENT SERIES</span>
            <div class="row">
                <div class="col">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <p class="card-text">{{ $comic['series'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>
        <div class="bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="/images/buy-comics-digital-comics.png" alt="">
                        <span>DIGITAL COMICS</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-comics-merchandise.png" alt="">
                        <span>DC MERCHANDISE</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                        <span>SUBSCRIPTION</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-comics-shop-locator.png" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-dc-power-visa.svg" alt="">
                        <span>DC POWER VISA</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
