<div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $img)
            <div class="carousel-item home-header-carousel @if($loop->first) active @endif">
                <img src="{{ $img->image }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="slider-logo">
                        <img src="{{ $logo }}" class="logo img-fluid" alt="polli prottasha">
                        <span>{{ $siteNameBn }}</span>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
