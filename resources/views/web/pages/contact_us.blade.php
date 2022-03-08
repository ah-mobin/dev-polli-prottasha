@extends('web.layout.main')

@section('page')
    <div class="col-md-8 col-12">

        <div class="contact my-4">
            <h3 class="text-center text-purple mb-3">Contact Information</h3>

            <iframe src="https://www.google.com/maps/embed?pb={{ $googleMap }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


            <div class="contact-with-us">

                <h4 class="text-center mt-3 mb-5 border rounded py-2 text-lightblue">Contact With Us</h4>
                <div class="row">
                    <div class="col-md-4 col-12 contact-type">
                        <div class="text-center">
                            <span class="fa fa-map-marker-alt"></span>
                            <h2>Location</h2>
                            <p>Ma Babar Dowa Villa<br>Baluapara, Gauripur, Mymensingh</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="text-center contact-type">
                            <span class="fa fa-envelope"></span>
                            <h2>Email</h2>
                            <a href="mailto:info@polliprottasha.org">info@polliprottasha.org</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="text-center contact-type">
                            <span class="fa fa-phone-alt"></span>
                            <h2>Phone Number</h2>
                            <a href="tel:01618700030">+880-1618-7000-30</a>
                        </div>
                    </div>
                </div>


                <div class="contact-form">
                    <h4 class="text-center my-5">IF You Have Any Question<br>
                        Please Do Not Hesitate To send A Message</h4>

                    <form action="{{ route('contact.message.store') }}" method="post">

                        @includeIf('flash')

                        @csrf
                        <div class="form-group mb-4">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="">
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="">
                        </div>

                        <div class="form-group mb-4">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" value="">
                        </div>

                        <div class="form-group mb-4">
                            <label for="message">Your Message</label>
                            <textarea name="message" class="form-control" id="message"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn w-25 text-light bg-lightgreen rounded">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
