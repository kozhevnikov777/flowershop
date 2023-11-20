@extends('main.main_layout')

@section('content')

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h1 class="edica-page-title" data-aos="fade-up">Contact</h1>
                <section class="edica-contact py-5 mb-5">
                    <div class="row">
                        <div class="col-md-12 contact-form-wrapper">
                            <h5 data-aos="fade-up">Contact form</h5>
                            <div class="row">
                                <div class="form-group col-md-6" data-aos="fade-up">
                                    <label for="name">Whatsapp</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your full name">
                                </div>
                                <div class="form-group col-md-6" data-aos="fade-up">
                                    <label for="phone">Viber</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label for="email">EMAIL</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label for="subject">VK</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <h5>Contact us</h5>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1894.0171376821602!2d50.8312756774946!3d61.65935912238425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43f7d4b5a5a5bd55%3A0xafb8bcf0ce4e68d2!2z0KHRi9GB0L7Qu9GM0YHQutC-0LUg0YguLCAxLzMsINCh0YvQutGC0YvQstC60LDRgCwg0KDQtdGB0L8uINCa0L7QvNC4LCAxNjcwMDA!5e0!3m2!1sru!2sru!4v1700193149146!5m2!1sru!2sru" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Download it now.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"> <img src="assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store</button>
                <button class="btn btn-success"> <img src="assets/images/android@1x.svg" alt="android" class="mr-2"> Google Play</button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
        </div>
    </div>
</section>

@endsection
