@extends('layouts.anatema')

@section('aside-page-title','CONTACT US')

@section('sayfa-title')
    <title>RD Global OEM | Contact Us </title>
@endsection

@section('sayfa-description','')

@section('sayfa-keywords','')

@section('sayfa-author','')

@section('content')

    <iframe class="mapbox2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.017700767932!2d32.70948431538013!3d39.896235979429015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc835f0742bf469fd!2sRD%20GLOBAL%20GENEL%20MERKEZ!5e0!3m2!1str!2str!4v1575197200563!5m2!1str!2str" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen="">

    </iframe>
    <section class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col">

                    <h2 class="font-weight-bold appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">Contact Us</h2>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon">
                                    <i class="fas fa-home fa-2x text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0 ">Adress</h3>
                                    </div>
                                    <p><a >1961. Cd. No:27 , Mutlukent Çankaya / Ankara / Turkey</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon icon-box-icon-no-top">
                                    <i class="fas fa-envelope fa-2x text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">Email adress</h3>
                                    </div>
                                    <p><a href="mailto:globalsales@rdglobal.com.tr">globalsales@rdglobal.com.tr</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon">
                                    <i class="fas fa-phone fa-2x text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">Phone Number</h3>
                                    </div>
                                    <p><a href="tel:+903122357735">+90 (312) 235 77 35 </a>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                    <form class="contact-form form-style-2" method="post">
                        <div class="contact-form-success alert alert-success d-none">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>
                        <div class="contact-form-error alert alert-danger d-none">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message d-block"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" placeholder="Your Name" class="form-control text-color-dark text-4 line-height-5" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="email" class="form-control text-color-dark text-4 line-height-5" placeholder="Email" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" name="subject" class="form-control text-color-dark text-4 line-height-5" placeholder="Subject" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <textarea name="message" class="form-control text-color-dark text-4 line-height-5" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col">
                                <input type="submit" name="submit" value="Send" class="btn btn-info">
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>



@endsection
