
<!-- Start Footer Section -->
<footer>
    <div class="container pt-4 pb-2">
        <div class="row">
            <div class="col-md-5 col-6">
                <h5 class="mb-4">Contact Information</h5>
                <p>{{ $addressLineOne }}<br>{{ $addressLineTwo }}</p>
                <p>Phone: {{ $siteEmail }}</p>
                <p>E-mail: {{ $sitePhone }}</p>
            </div>

            <div class="col-md-3 col-6 morelinks">
            </div>

            <div class="col-md-4 col-12">
                <h5 class="mb-4">Facebook Page</h5>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F{{ $fbPageId }}%2F&tabs=timeline&height=150&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="100%" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
        {{-- https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fপল্লী-প্রত্যাশা-106315105313155%2F&tabs=timeline&height=150&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="100%" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share --}}
        <hr>

        <div class="row">
            <div class="col-12 text-center">
                <b>&copy; {{ $copyrightText }} {{ Carbon\Carbon::now()->format('Y') }}</b>
            </div>
        </div>

    </div>
    </div>
</footer>
<!-- End Footer Section -->

<!-- Bootstrap Bundle JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
