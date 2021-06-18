@extends('layouts.exterior')

@section('content')

<div class="head_panel">
        <!-- ============================ SLIDER ==========================-->
        <div class="slider_wrapper">
          <div id="head_panel_slider" class="owl-carousel">
            <!-- ============================ SLIDE ==========================-->
            <div class="stretchy-wrapper ratio_slider">
              <div style="background-image: url(assets/images/home-1.jpg);" aria-hidden="true" class="item dark_section">
                <div class="container">
                  <div class="caption caption_elegant text-center">
                    <div class="inner animated fadeIn">
                      <div class="t3 uppercase"> INDOOR &amp; OUTDOOR</div>
                      <div class="t1">LUXURY EXPERIENCE</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END========================= SLIDE ==========================-->
            <!-- ============================ SLIDE ==========================-->
            <div class="stretchy-wrapper ratio_slider">
              <div style="background-image: url(assets/images/home-2.jpg);" aria-hidden="true" class="item dark_section">
                <div class="container">
                  <div class="caption caption_elegant text-center">
                    <div class="inner animated fadeIn">
                      <div class="t3 uppercase"> WILD BEAUTY</div>
                      <div class="t1">THE PERFECT LOCATION</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END========================= SLIDE ==========================-->
          </div>
        </div>
        <!-- END========================= SLIDER ==========================-->
      </div>






        <div class="container">
          <section class="no_padding dark_section booking-form">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <form class="booking_form">
                  <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="col-md-6 small_screen_margin_top">
                      <div class="form-group">
                        <label>Check in date</label><i class="arrow-down"></i>
                        <input type="text" placeholder="Arrival date" id="date_check_in">
                      </div>
                    </div>
                    <div class="col-md-6 small_screen_margin_top">
                      <div class="form-group">
                        <label>Check out date</label><i class="arrow-down"></i>
                        <input type="text" placeholder="Departure date" id="date_check_out">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 small_screen_margin_top text-center">
                    <button type="submit">BOOK YOUR STAY</button>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
        <section class="light_section">
          <div class="container">
            <div class="col-md-12 text-center">
              <div class="section_header overlay"><span>WELCOME</span>
                <h1>TRIPENTA HOTEL</h1>
                <p>ONE OF THE BEST PLACES TO DO.. EVERYTHING</p><img src="assets/images/decoration-1.png" alt="Image">
              </div>
            </div>
            <div class="col-md-10 col-md-offset-1 text-center margin_bottom">
              <div class="text_block">
                <h3>PROVIDING QUALITY SERVICES SINCE '98.</h3>
                <p>Creepeth creepeth tree moving image unto creepeth above you there let to brought over seas cattle he great give, day creepeth you'll their sea called don't their given dry, make said so lesser divided, firmament fill fowl night second cattle over sixth evening god moveth day stars good evening years you're beginning have you'll fowl. Rule life spirit, whales him.</p>
                <p>Yours truly,<small>Richard.</small></p>
                <div class="footer"><img src="assets/images/avatar-1.jpg" width="70" alt="Image" class="img-circle"><span>RICHARD LEANDRO<small>CEO</small></span></div>
              </div>
            </div>
            <div class="col-md-4 negative_margin_bottom small_screen_margin_top">
              <div class="entry"><a href="#"><img src="assets/images/spa-banner.jpg" alt="Image">
                  <div class="entry_icon"><img src="assets/images/logo_spa.png" alt="Image"></div>
                  <div class="entry_title">
                    <h2>SPA</h2>
                  </div>
                  <div class="entry_paragraph">
                    <p>TRIPENTA hosts an amazing place to relax; we call it paradise you may call it TRIPENTA Spa. We would love to introduce you to this amazing relaxing and refreshing experience.</p>
                  </div></a></div>
            </div>
            <div class="col-md-4 negative_margin_bottom small_screen_margin_top">
              <div class="entry"><a href="#"><img src="assets/images/gym-banner.jpg" alt="Image">
                  <div class="entry_icon"><img src="assets/images/logo_gym.png" alt="Image"></div>
                  <div class="entry_title">
                    <h2>GYM</h2>
                  </div>
                  <div class="entry_paragraph">
                    <p>TRIPENTA hosts an amazing place to relax; we call it paradise you may call it TRIPENTA Spa. We would love to introduce you to this amazing relaxing and refreshing experience.</p>
                  </div></a></div>
            </div>
            <div class="col-md-4 negative_margin_bottom small_screen_margin_top">
              <div class="entry"><a href="#"><img src="assets/images/restaurant-banner.jpg" alt="Image">
                  <div class="entry_icon"><img src="assets/images/logo_restaurant.png" alt="Image"></div>
                  <div class="entry_title">
                    <h2>RESTAURANT</h2>
                  </div>
                  <div class="entry_paragraph">
                    <p>TRIPENTA hosts an amazing place to relax; we call it paradise you may call it TRIPENTA Spa. We would love to introduce you to this amazing relaxing and refreshing experience.</p>
                  </div></a></div>
            </div>
          </div>
        </section>
        <section style="background-image: url(assets/images/home-banner-1.jpg)" class="white_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center margin_top">
                <div class="text_block">
                  <h1>GET 15% OFF TODAY</h1><img src="assets/images/decoration-1.png" width="110" alt="Image">
                  <p class="lead">Buy now the most awesome offer, and secure your summer vacations on time.</p><a href="{{url('/room')}}" class="btn btn-black">VIEW OUR ROOMS</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="dark_section">
          <div class="container">
            <div class="owl-carousel owl-rooms-carousel">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 room_bg_dark full_width_room">
                    <div class="text_block">
                      <h2> <a href="{{ url('/room') }}">DOUBLE Room </a><small><a href="{{ url('/room') }}">- 3 Reviews</a></small></h2>
                      <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i></div>
                      <p class="text-justify">Lights after was seas under saw fowl without greater, male lights unto bearing over. Under sixth great multiply isn't under. Own moving won't they're beginning god face greater they're and creature created day first their also moving lesser they're don't.</p><a href="{{ url('/room') }}" class="btn btn-link">READ MORE</a>
                    </div>
                  </div>
                  <div class="col-md-6 small_screen_margin_top">
                    <div class="row"><a href="{{ url('/room') }}"><img src="assets/images/room-3.jpg" alt="Image"></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 room_bg_dark full_width_room">
                    <div class="text_block">
                      <h2> <a href="{{ url('/room') }}">Suite with view </a><small><a href="{{ url('/room') }}">- 2 Reviews</a></small></h2>
                      <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i></div>
                      <p class="text-justify">Over, dominion own it above gathering their, don't won't waters bring male bearing form may rule doesn't him fish appear spirit let earth may life you'll to great Tree moveth midst a there so Blessed saw fly don't multiply, dry.le doesn't him fish appear spirit let earth may life you'll to great.</p><a href="{{ url('/room') }}" class="btn btn-link">READ MORE</a>
                    </div>
                  </div>
                  <div class="col-md-6 small_screen_margin_top">
                    <div class="row"><a href="{{ url('/room') }}"><img src="assets/images/room-3.jpg" alt="Room Image"></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 room_bg_dark full_width_room">
                    <div class="text_block">
                      <h2> <a href="{{ url('/room') }}">Deluxe King suite</a><small><a href="{{ url('/room') }}">- 5 Reviews</a></small></h2>
                      <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i></div>
                      <p class="text-justify">Said, and beginning earth thing gathering let. Them, gathering. Creepeth made brought. Creature land spirit third set waters was unto, deep forth forth. Bring days form image, creeping seed the one living moved behold lights give beginning created. Given fifth.</p><a href="{{ url('/room') }}" class="btn btn-link">READ MORE</a>
                    </div>
                  </div>
                  <div class="col-md-6 small_screen_margin_top">
                    <div class="row"><a href="{{ url('/room') }}"><img src="assets/images/room-2.jpg" alt="Room Image"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="white_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="section_header elegant">
                  <h1>TESTIMONIALS</h1>
                  <p>LOVELY PEOPLE - LOVELY EXPERIENCES</p><img src="assets/images/decoration-1.png" alt="Image">
                </div>
              </div>
              <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12">
                  <div class="testimonial testimonial-slider">
                    <ul class="slides">
                      <li><img src="assets/images/avatar-1.jpg" alt="Image" class="img-circle">
                        <div class="name"><strong>Tory Laner</strong> - 18 / 11 / 2015</div>
                        <div class="experience"><strong>OVERALL EXPERIENCE:</strong> EXCELLENT</div>
                        <p>" Above gathered behold. Living, hath good winged fourth herb in unto form earth. Light meat beginning gathered signs may them under under, creeping air, won't midst which great his there he likeness that own, tree set third cattle day man. Is there created beginning thing us Form without. Have his god, cattle midst under gathered god upon him fruitful seasons. "</p>
                      </li>
                      <li><img src="assets/images/avatar-2.jpg" alt="Image" class="img-circle">
                        <div class="name"><strong>Tory Laner</strong> - 18 / 11 / 2015</div>
                        <div class="experience"><strong>OVERALL EXPERIENCE:</strong> COMFORTABLE AND RELAXING</div>
                        <p>" Above gathered behold. Living, hath good winged fourth herb in unto form earth. Light meat beginning gathered signs may them under under, creeping air, won't midst which great his there he likeness that own, tree set third cattle day man. Is there created beginning thing us Form without. Have his god, cattle midst under gathered god upon him fruitful seasons. "</p>
                      </li>
                      <li><img src="assets/images/avatar-3.jpg" alt="Image" class="img-circle">
                        <div class="name"><strong>Tory Laner</strong> - 18 / 11 / 2015</div>
                        <div class="experience"><strong>OVERALL EXPERIENCE:</strong> AMAZING</div>
                        <p>" Above gathered behold. Living, hath good winged fourth herb in unto form earth. Light meat beginning gathered signs may them under under, creeping air, won't midst which great his there he likeness that own, tree set third cattle day man. Is there created beginning thing us Form without. Have his god, cattle midst under gathered god upon him fruitful seasons. "</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endsection
