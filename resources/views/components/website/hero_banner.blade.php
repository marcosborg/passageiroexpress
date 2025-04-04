@foreach (App\Models\HeroBanner::all() as $hero_banner)
<section id="section-hero" aria-label="section" class="full-height vertical-center" data-bgimage="url({{ $hero_banner->background->getUrl() ?? 'assets/website/images/background/7.jpg' }}) bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="spacer-double sm-hide"></div>
            <div class="col-lg-6" style="background-size: 100%;background-repeat: no-repeat;color: #ffffff;background-color: #000000a1;padding: 20px;">
                <h4><span class="id-color" style="color: #ffffff;">{{ $hero_banner->subtitle ?? '' }}</span></h4>
                <div class="spacer-10"></div>
                <h1 style="color: #ffffff;">{{ $hero_banner->title ?? '' }}</h1>
                <p class="lead" style="color: #ffffff">{{ $hero_banner->text ?? '' }}</p>

                <a class="btn-main" href="{{ $hero_banner->link ?? '' }}">{{ $hero_banner->button ?? '' }}</a>
            </div>

            <div class="col-lg-6">
                <img src="{{ $hero_banner->image->getUrl() ?? 'assets/website/images/misc/car-2.png' }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>
</section>
@endforeach
