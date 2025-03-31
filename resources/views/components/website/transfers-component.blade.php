<section id="section-transfers" style="padding-top: 0px; margin-top: -50px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2>Transfers e Tours</h2>
                <a href="/transfers" class="btn btn-main btn-sm">Todos</a>
                <div class="spacer-20"></div>
            </div>
            <div class="clearfix"></div>
            <div id="items-carousel" class="wow fadeIn" style="background-size: 100%; background-repeat: no-repeat; visibility: visible; animation-name: fadeIn;">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all;">
                        <div class="row">
                            @foreach ($transfer_tours as $transfer_tour)
                            <div class="col-md-4">
                                <div class="owl-item">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="{{ $transfer_tour->photo[0]->getUrl() }}" style="width: 100%;" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>{{ $transfer_tour->name }}</h4>
                                                <div class="d-price">
                                                    @if ($transfer_tour->under_consultation)
                                                    <span>Sob consulta</span>
                                                    @else
                                                    <span>€{{ $transfer_tour->price }}</span>
                                                    @endif
                                                    <a class="btn-main" href="/rent/7/tesla-model-3-performance">Saber mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>console.log({!! $transfer_tours !!})</script>