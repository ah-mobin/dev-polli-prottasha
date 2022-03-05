<!-- Main Section Left Sidebar -->
<div class="col-md-2 col-12 home-main-leftbar">
    <div class="mb-4">
        <ul>
            <li class="ps-1 py-1">Welcome to PolliProttasha</li>
            {{-- <p>Welcome to the Polliprottasha's website, a renown socio-economic organization in Bangladesh. Polliprottasha is a good practiced MFI which has the aims to improve...</p> --}}
            @php
              $note = App\Models\WelcomeNote::find(1);
              $note = $note->note;  
            @endphp
            {!! substr($note,0,150) !!} ...
            <br>
            <a href="{{ route('page.welcome-note') }}">Read More <i class="fas fa-arrow-right"></i></a>
        </ul>
    </div>

    <div class="mb-4">
        <ul>
            <li class="ps-1 py-1">News/Events</li>
            <li><a target="_blank" href="https://dailybahadur.com/%e0%a6%97%e0%a7%8c%e0%a6%b0%e0%a7%80%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%87-%e0%a6%aa%e0%a6%b2%e0%a7%8d%e0%a6%b2%e0%a7%80-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b6%e0%a6%be/">গৌরীপুরে পল্লী প্রত্যাশা</a></li>
        </ul>
    </div>
</div>
