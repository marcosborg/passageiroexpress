@extends('layouts.website')

@section('content')

<x-website.hero_banner />

<x-website.cars_component />

<section id="section-transfers" style="padding-top: 0px; margin-top: -50px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2>Transfers e Tours</h2>
                <a href="/transfers" class="btn btn-main btn-sm">Todos</a>
                <div class="spacer-20"></div>
            </div>
            <div class="clearfix"></div>
            <div id="items-carousel" class="owl-carousel wow fadeIn owl-loaded owl-drag animated" style="background-size: 100%; background-repeat: no-repeat; visibility: visible; animation-name: fadeIn;">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1116px;">
                        <div class="owl-item active" style="width: 346.78px; margin-right: 25px;">
                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="https://passageiroexpress.gestvde.pt/storage/781/67d6f4ca01aad_80b1ad34-fcb1-4e07-8c02-5f546717014c.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>TESLA Model 3 Performance</h4>
                                            <div class="d-price">
                                                <span>€400.00</span>
                                                <a class="btn-main" href="/rent/7/tesla-model-3-performance">Saber mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 346.78px; margin-right: 25px;">
                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="https://passageiroexpress.gestvde.pt/storage/779/67d6f2026dc5e_IMG_4066.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Peugeot E-208</h4>
                                            <div class="d-price">
                                                <span>€230.00</span>
                                                <a class="btn-main" href="/rent/9/peugeot-e-208">Saber mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 346.78px; margin-right: 25px;">
                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="https://passageiroexpress.gestvde.pt/storage/782/67d6f594c13c3_IMG_9CF173A49356-1.jpeg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Peugeot 208</h4>
                                            <div class="d-price">
                                                <span>€230.00</span>
                                                <a class="btn-main" href="/rent/10/peugeot-208">Saber mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
</section>

<x-website.featured />

<x-website.service-component />

<x-website.testimonial-component />

@endsection
