@extends('layouts.exterior')

@section('content')
    <div class="head_panel">
        <div style="background-image: url('assets/images/page-head-5.jpg')" class="full_width_photo transparent_film">
          <div class="container">
            <div class="caption">
              <h1>BOOKING</h1><span>Book your trip with us</span>
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
                  <li><span>BOOKING</span></li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="background-image: url('assets/images/book-widget-bg-2.jpg')" class="widget widget_book background_cover widget_no_line featured"><span>DOUBLE ROOM</span>
                  <h2>WEEKEND 50% OFF</h2>
                  <p>$ 99 / DAY</p>
                  <div><i class="icon icon-TV"></i><i class="icon icon-Espresso"></i><i class="icon icon-Signal"></i></div><a href="#!" class="btn btn-white">VIEW THE ROOM</a>
                </div>
                <div style="background-image: url('assets/images/book-widget-bg.jpg')" class="widget widget_book background_cover widget_no_line"><span>KING SUITE</span>
                  <h2>WINTER OFFER</h2>
                  <p>$ 199 / DAY</p><a href="#!" class="btn btn-white">VIEW THE ROOM</a>
                </div>
              </div>
              <div class="col-md-8">
                <form class="booking_form_full">
                  <input type="text" name="name" aria-required="true" aria-invalid="false" placeholder="NAME" class="name form-control">
                  <input type="text" name="email" aria-required="true" aria-invalid="false" placeholder="EMAIL" class="name form-control">
                  <input type="text" name="checkin" aria-required="true" aria-invalid="false" placeholder="CHECK IN DATE" id="date_check_in" class="name form-control">
                  <input type="text" name="checkout" aria-required="true" aria-invalid="false" placeholder="CHECK OUT DATE" id="date_check_out" class="name form-control">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="select-arrow"></div>
                      <select class="form-control">
                        <option>ADULTS</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="select-arrow"></div>
                      <select class="form-control">
                        <option>SELECT YOUR ROOM</option>
                        <option>Single room</option>
                        <option>Double room</option>
                        <option>Suite with view</option>
                        <option>Deluxe king suite</option>
                      </select>
                    </div>
                  </div>
                  <textarea name="message" cols="40" rows="4" aria-invalid="false" placeholder="COMMENTS" class="message form-control"></textarea>
                  <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </form>
              </div>
            </div>
          </div>
        </section>


@endsection
