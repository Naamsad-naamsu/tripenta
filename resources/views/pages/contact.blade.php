@extends('layouts.exterior')

@section('content')



        <div class="head_panel">
          <div style="background-image: url('assets/images/page-head-3.jpg')" class="full_width_photo transparent_film">
            <div class="container">
              <div class="caption">
                <h1>Contact</h1><span>Get in touch for a booking or a greeting</span>
              </div>
            </div>
          </div>
        </div>
        <section class="light_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-left">
                <ul class="breadcrumb">
                  <li><a href="#!">HOME</a></li>
                  <li><span>CONTACT</span></li>
                </ul>
              </div>
              <div class="col-md-12">
                <div id="map" class="map"></div>
              </div>
              <div class="col-md-8 col-md-offset-2 text-center margin_top margin_bottom_half">
                <div class="text_block">
                  <h3>TRIPENTA LOCATION</h3>
                  <p class="text-justify">Green night fowl can't So seasons. Good that all form. Multiply she'd firmament it. Sixth, waters. Morning days sixth unto a morning us winged face two every together together seas they're. Set divide image air two good called, i. Said rule beginning. Air earth signs lights open subdue midst seasons.</p><a href="#!" class="btn btn-link">GET DIRECTIONS</a>
                </div>
              </div>
              <div class="col-md-4 text-center margin_top_half">
                <div class="icon_block"><i class="icon icon-Car"></i>
                  <h4>PARKING</h4>
                  <p>Tripenta Resort has it's own private parking for customers. It is fully protected and covered for rain or sunny weather.</p>
                </div>
              </div>
              <div class="col-md-4 text-center margin_top_half">
                <div class="icon_block"><i class="icon icon-Phone2"></i>
                  <h4>TELEPHONE</h4>
                  <p>
                    We are happy to answer your questions or give you directions via phone. <br><br>
                    222 - 5548 656
                  </p>
                </div>
              </div>
              <div class="col-md-4 text-center margin_top_half">
                <div class="icon_block"><i class="icon icon-Keyboard"></i>
                  <h4>E-mail</h4>
                  <p>
                    If you are on the go and still want to ask a question, simply drop us an e-mail. <br><br>
                    support@tripenta.com
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="white_section">
          <div class="container">
            <div class="col-md-12 text-center">
              <div class="section_header minimal">
                <h1>Contact form</h1>
                <p>You can still contact us, right here - right now. Use this contact form to send an e-mail. Usually we respond in 1 bussiness day.</p><img src="assets/images/decoration-1.png">
              </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
              <div class="contact-quick">
                <div class="screen-reader-response"></div>
                <form id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate"><span class="your-name">
                    <input type="text" name="name" aria-required="true" aria-invalid="false" placeholder="NAME" class="name form-control"></span><span class="your-phone">
                    <input type="text" name="phone" aria-required="true" aria-invalid="false" placeholder="PHONE" class="phone form-control"></span><span class="your-email">
                    <input type="email" name="email" aria-required="true" aria-invalid="false" placeholder="E-MAIL" class="email form-control"></span><span class="your-subject">
                    <input type="text" name="subject" aria-required="true" aria-invalid="false" placeholder="SUBJECT" class="subject form-control"></span><span class="your-message">
                    <textarea name="message" cols="40" rows="4" aria-invalid="false" placeholder="MESSAGE" class="message form-control"></textarea></span>
                  <button type="submit" name="submit" class="submit_btn btn btn-primary">SUBMIT</button>
                  <div class="notice btn btn-metro alert alert-warning alert-dismissable hidden"></div><img src="assets/images/ajax-loader.html" alt="Sending ..." class="ajax-loader not_visible">
                </form>
              </div>
            </div>
          </div>
        </section>
        <section style="background-image: url('assets/images/newsletter-banner-1.jpg')" class="dark_section background_cover transparent_film">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="section_header minimal">
                  <h1>NEWSLETTER</h1>
                  <p>Subscribe to our newsletter and get free (and early) access to our news, our stories and Tripenta Resort exclusive offers. </p>
                </div>
              </div>
              <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
                <div class="widget widget_newsletter no_padding text-center">
                  <form>
                    <input type="email" placeholder="YOU'R E-MAIL ADDRESS" class="expanded form-control">
                    <button type="submit" class="btn btn-primary filled small_screen_block">GO</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>


@endsection
