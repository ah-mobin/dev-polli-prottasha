<!-- Main Section Left Sidebar -->
<div class="col-md-2 col-12 home-main-leftbar">
    <div class="mb-4">
        <ul>
            <li class="ps-1 py-1">{{ $welcomeNote->title }}</li>
            {!! substr($welcomeNote->note,0,150) !!} ...
            <br>
            <a href="{{ route('page.welcome-note') }}">Read More <i class="fas fa-arrow-right"></i></a>
        </ul>
    </div>

    <div class="mb-4">
        <ul>
            <li class="ps-1 py-1">News/Events</li>
            @foreach ($news as $i)
            <li><a target="_blank" href="{{ $i->link }}">{{ $i->title }}</a></li>
            @endforeach
            
        </ul>
    </div>
</div>
