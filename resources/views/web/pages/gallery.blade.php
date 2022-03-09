@extends('web.layout.main')

@section('page')
    <div class="col-md-8 col-12">
        <div class="branches py-2 my-4">
            <h3 class="text-center mb-4">{{ $title }}</h3>
        </div>

        <div class="row gallery">
            @foreach ($gallery as $img)
            <div class="col-md-4 col-6 mb-3">
                <a href="{{ $img->image }}" data-lightbox="mygallery">
                    <img src="{{ $img->image }}" class="img-fluid w-100" alt="">
                </a>
            </div>
            @endforeach
        </div>

    </div>

@stop
