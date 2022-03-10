<!-- Main Section Rightbar -->
<div class="col-md-2 col-12 home-main-leftbar">
    <div class="mb-4">
        <ul>
            <li class="ps-1 py-1">{{ $promoBanner->title }}</li>
            <img src="{{ $promoBanner->image }}" class="img-fluid" alt="">
        </ul>
    </div>

    <div class="mb-4">
        <ul>
            <li class="ps-1 py-1">{{ $chairmanSpeech->title }}</li>
            <img src="{{ $chairmanSpeech->image }}" class="img-fluid w-100" alt="">
            {!! substr($chairmanSpeech->speech,0,150) !!} ..
            <br>
            <a href="{{ route('page.chairman-speech') }}">Read More <i class="fas fa-arrow-right"></i></a>
        </ul>

        <ul>
            <li class="ps-1 py-1">{{ $ed->title }}</li>
            <img src="{{ $ed->image }}" class="img-fluid w-100" alt="">
            {!! substr($ed->speech,0,150) !!} ..
            <br>
            <a href="{{ route('page.executive-director') }}">Read More <i class="fas fa-arrow-right"></i></a>
        </ul>

    </div>

    <div class="mb-4">
        <ul class="notice-board">
            <li class="ps-1 py-1">Latest News / Notices</li>
            <li><a href="{{ $notice->link ?? $notice->image }}" target="_blank">
                    <img src="{{ $notice->image }}" class="img-fluid w-100" alt="">
                </a></li>
        </ul>
    </div>
</div>
