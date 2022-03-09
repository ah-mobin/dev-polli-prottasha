@extends('web.layout.main')

@section('page')
    <div class="col-md-8 col-12">

        <div class="blog my-4">
            <h3 class="text-center mb-3 py-2">Our History</h3>

            {!! $history->history !!}
        </div>

    </div>

@stop
