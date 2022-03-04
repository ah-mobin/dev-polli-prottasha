@extends('web.layout.main')

@section('page')

    <!-- Main Section Content -->
    <div class="col-md-8 col-12">

        <!-- Main Content Part One -->
        <div id="carouselExampleIndicators" class="home-main-carousel-one carousel slide px-3 py-4 mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>Welcome to the Polliprottasha's website, a renown socio-economic organization in Bangladesh. Polliprottasha is a good practiced MFI which has the aims to improve the life quality of the people living at the bottom of the socio-economic pyramid. Polliprottasha focus at awareness-raising and group formation for the aiming at integrated development by establishing rights of the poor Women, Education, Healthcare, Agriculture and credit for income generation activities.</p>
                    <p>Nearly one thousand people in Gouripur, Mymensingh are getting benefit from the services and activities of Polliprottasha.</p>
                    <p>We hope this website will be helpful for you to know about Polliprottasha. Thanks and good wishes to all who are interested in microfinance which is effective tools to reduce poverty from the society.</p>
                </div>
                <div class="carousel-item">
                    <p>Polliprottasha is a socio-economic organization which was founded in 2003, at remote. Village Baluapara, Gouripur, Mymensingh. With welfare of the local community. It has a dynamic leadership approach which is key to make it possible to establish organizational sustainability with in the shortest time.</p>
                </div>
                <div class="carousel-item">
                    <p>Our mission is to support and develop the rural economy by facilitating access to finance and other service for the disadvantaged people.</p>
                    <p>Building a poverty free Bangladesh through social awareness and income generating activities for the poor people.</p>
                </div>
            </div>
        </div>


        <!-- Main Content Part Two -->
        <div id="carouselExampleIndicatorsTwo" class="home-main-carousel-two carousel slide text-light py-2 mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="item-header">
                        <h4 class="text-center py-2">Success Stories</h4>
                    </div>

                    <div class="item-content p-2">
                        <div class="row">
                            <div class="col-6">
                                <img src="assets/img/s-01.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <img src="assets/img/s-02.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Main Content Part Three -->
        <div class="home-blog-section mb-3">
            <div class="row p-4">
                <div class="col-md-6 col-12 mb-2">
                    <div class="content-box p-2">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-center text-capitalize border rounded py-2">Working Area</h6>
                                <img src="assets/img/map-gauripur.jpg" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-12 mb-2">
                  <div class="content-box p-2">
                    <div class="row">
                      <div class="col-md-12 col-lg-7 col-7">
                        <h6 class="text-center text-capitalize border rounded py-2">Working Area</h6>
                        <img src="assets/img/details1.png" class="img-fluid w-100" alt="">
                      </div>
                      <div class="col-md-12 col-lg-5 col-5">
                        <p class="mt-7">Padakhep has expanded its activities throughout the country. The organization implements its different programs/ projects...</p>
                        <a href="blog.html" class="btn btn-rounded btn-sm btn-danger">Read More</a>
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
        </div>

        <!-- Main Content Part Four -->
        <div class="home-video-section p-3 mb-3">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="video-box mb-4">
                        <h5 class="py-2 text-center text-capitalize border text-light">Documentary Film</h5>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/0FjFHmbyUTM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="video-box mb-4">
                        <h5 class="py-2 text-center text-capitalize border text-light">Documentary On Palli Prottasha</h5>
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/xaYx3rZah1s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>


        </div>
    </div>


@stop
