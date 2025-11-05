@extends('frontend.master')

@section('title', 'Services')
@section('services-active', 'active')

@section('hero')
    <x-frontend.hero-section title="Contact Us" subtitle="Contact"></x-frontend.hero-section>
@endsection

@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
                <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working
                        contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                        and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    @if(session('message_success'))
                        <div class="form-control border-0 rounded-pill w-100 ps-4 pe-5" role="alert">
                            {{ session('message_success') }}
                        </div>
                    @else
                        <form action="{{route('frontend.contact.store')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email"
                                               placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject" class="form-control" id="subject"
                                               placeholder="Subject">
                                        <label for="subject">Subject</label>
                                        <x-input-error :messages="$errors->get('subject')" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here"
                                              id="message"
                                              style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                        <x-input-error :messages="$errors->get('message')" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection