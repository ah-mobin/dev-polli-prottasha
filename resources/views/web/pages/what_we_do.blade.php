@extends('web.layout.main')

@section('page')
    <div class="col-md-8 col-12">

        <div class="blog wwd my-4">
            <h3 class="text-center mb-5 py-2">{{ $title }}</h3>


            @foreach ($wwds as $i)
                
            @endforeach
            <div class="wwd_item mb-5">
                <div class="wwd_item_content">
                    <h5>{{ $i->desc }}</h5>
                    <p>{{ $i->image }}</p>
                </div>

                <img src="{{ $i->title }}" style="height: 220px" class="img-fluid w-100" alt="">
            </div>

        </div>

    </div>

@stop
