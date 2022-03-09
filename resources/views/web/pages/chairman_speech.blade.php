@extends('web.layout.main')

@section('page')
    <div class="col-md-8 col-12">

        <div class="blog speech my-4">
            <h3 class="text-center mb-3 py-2">{{ $chr->title }}</h3>

            <div class="text-center">

                <img src="{{ $chr->image }}" class="w-25 mb-3" alt="">

                {!! $chr->speech !!}

            </div>

        </div>

    </div>

@stop
