@extends('web.layout.main')

@section('page')

    <!-- Main Section Content -->
    <div class="col-md-8 col-12">

        <!-- Main Content Part One -->
        <div id="carouselExampleIndicators" class="home-main-carousel-one carousel slide px-3 py-4 mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    {!! $secOne->item_one !!}
                </div>
                <div class="carousel-item">
                    {!! $secOne->item_two !!}
                </div>
                <div class="carousel-item">
                    {!! $secOne->item_three !!}
                </div>
            </div>
        </div>


        <!-- Main Content Part Two -->
<div id="carouselExampleIndicatorsTwo" class="home-main-carousel-two carousel slide text-light py-2 mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @if($stories->count() > 4)
        <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        @endif
        @if($stories->count() > 2 && $stories->count() < 5 )
        <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
        @endif
    </div>
    <div class="carousel-inner"> 
        <div class="carousel-item active">
            <div class="item-header">
              <h4 class="text-center py-2">Success Stories</h4>
            </div>

            <div class="item-content p-2">
              <div class="row">
                @if(!empty($stories[0]))
                <div class="col-6">
                  <img src="{{ $stories[0]->image ?? '' }}" class="img-fluid" alt="">
                </div>
                @endif
                @if(!empty($stories[1]))
                <div class="col-6">
                  <img src="{{ $stories[1]->image ?? '' }}" class="img-fluid" alt="">
                </div>
                @endif
              </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="item-header">
              <h4 class="text-center py-2">Success Stories</h4>
            </div>

            <div class="item-content p-2">
              <div class="row">
                @if(!empty($stories[2]))
                <div class="col-6">
                  <img src="{{ $stories[2]->image ?? '' }}" class="img-fluid" alt="">
                </div>
                @endif
                @if(!empty($stories[3]))
                <div class="col-6">
                  <img src="{{ $stories[3]->image ?? '' }}" class="img-fluid" alt="">
                </div>
                @endif
              </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="item-header">
              <h4 class="text-center py-2">Success Stories</h4>
            </div>

            <div class="item-content p-2">
              <div class="row">
                @if(!empty($stories[4]))
                <div class="col-6">
                  <img src="{{ $stories[4]->image ?? '' }}" class="img-fluid" alt="">
                </div>
                @endif
                @if(!empty($stories[5]))
                <div class="col-6">
                  <img src="{{ $stories[5]->image ?? '' }}" class="img-fluid" alt="">
                </div>
                @endif
              </div>
            </div>
        </div>
    </div>

</div>


        <!-- Main Content Part Three -->
        <div class="home-blog-section mb-3">
            <div class="row p-4">
                @foreach($threes as $i)
                <div class="col-md-6 col-12 mb-2">
                    <div class="content-box p-2">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-center text-capitalize border rounded py-2">{{ $i->title }}</h6>
                                <img src="{{ $i->image }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Main Content Part Four -->
        <div class="home-video-section p-3 mb-3">
            <div class="row">
                @foreach($videos as $v)
                <div class="col-md-6 col-12">
                    <div class="video-box mb-4">
                        <h5 class="py-2 text-center text-capitalize border text-light">{{ $v->title }}</h5>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $v->yt_vide_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>


@stop
