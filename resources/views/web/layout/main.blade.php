@includeIf('web.layout.header')
<!-- Start Main Area Section -->
<section class="container-fluid content">
    <div class="row">
        @includeIf('web.layout.leftbar')

            @yield('page')

        @includeIf('web.layout.rightbar')
    </div>
</section>
<!-- End Main Area Section -->
@includeIf('web.layout.footer')
