@extends('layouts.website')

@section('content')

<div class="container" style="margin-top: 150px; margin-bottom: 50px;">
    <h1 style="color: #555555; text-align: center;">{{ $transfer_tour->name }}</h1>
</div>

<section id="section-car-details">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($transfer_tour->photo as $photo)
                        <div class="swiper-slide">
                            <img src="{{ $photo->getUrl() }}" style="width: 100%;" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <hr>
                {!! $transfer_tour->description !!}
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="de-price text-center">
                            @if ($transfer_tour->under_consultation)
                            <h3>Preço sob consulta</h3>
                            @else
                            <h3>€{{ $transfer_tour->price }}</h3>
                            @endif
                        </div>
                        <div class="spacer-30"></div>
                        <div class="de-box mb25">
                            <form action="/forms/transfer" method="post" id="rent">
                                @csrf
                                <h4>Pedido de contacto</h4>
                                <div class="spacer-20"></div>
                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <h5>Nome *</h5>
                                        <input type="text" name="name" placeholder="" class="form-control" required="">
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Telefone *</h5>
                                        <input type="text" name="phone" placeholder="" class="form-control" required="">
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Email *</h5>
                                        <input type="email" name="email" placeholder="" class="form-control" required="">
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Mensagem</h5>
                                        <textarea name="message" placeholder="" class="form-control">Pretendo ser contactado para o tour/transfer {{ $transfer_tour->name }}.</textarea>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="rgpd" name="rgpd" style="border: solid 1px #999;" required="">
                                            <label class="form-check-label" for="rgpd">
                                                Autorizo o tratamento dos dados fornecidos
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" id="send_message" value="Pedir contacto" class="btn-main btn-fullwidth">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 600px;
        height: 400px;
    }

</style>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal'
        , loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination'
        , },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next'
            , prevEl: '.swiper-button-prev'
        , },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        , }
    , });

</script>
@endsection
