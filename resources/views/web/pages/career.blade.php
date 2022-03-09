@extends('web.layout.main')

@section('page')

    <div class="col-md-8 col-12">

        <div class="career-positions mb-3">
            <h4 class="mb-4 py-2 border bg-purple text-white ps-2">Latest Positions</h4>
            <ul class="list-group list-group-flush">
                @foreach ($careers as $it)
                <li class="list-group-item">
                    <a href="{{ $it->image }}" target="_blank">
                        <h6>{{ $it->title }}</h6>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


@stop
