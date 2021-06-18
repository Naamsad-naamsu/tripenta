@extends('layouts.exterior')

@section('content')


        <div class="head_panel">
          <div style="background-image: url('assets/images/page-head-2.jpg')" class="full_width_photo transparent_film">
            <div class="container">
              <div class="caption">
                <h1>Rooms List</h1><span>View details for every room we have</span>
              </div>
            </div>
          </div>
        </div>
        <section class="light_section">
          <div class="container">
            <div class="col-md-12 text-left">
              <div class="row">
                <ul class="breadcrumb">
                  <li><a href="#!">HOME</a></li>
                  <li><span>ROOMS LIST</span></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 no_margin_top">
              <div class="row">
                <div class="col-md-6 room_bg_light full_width_room">
                  <div class="text_block">
                    <h2> <a href="{{url('/single-room')}}">Single Room </a><small><a href="{{url('/single-room')}}">- 3 Reviews</a></small></h2>
                    <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i></div>
                    <p class="text-justify">Over, dominion own it above gathering their, don't won't waters bring male bearing form may rule doesn't him fish appear spirit let earth may life you'll to great Tree moveth midst a there so Blessed saw fly don't multiply, dry.le doesn't him fish appear spirit let earth may life you'll to great.</p><a href="{{url('/single-room')}}" class="btn btn-link">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-6 small_screen_margin_top_half">
                  <div class="row"><a href="{{url('/single-room')}}"><img src="assets/images/room-4.jpg" alt="Room Image"></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <hr>
              </div>
            </div>
            <div class="col-md-12 margin_top_half">
              <div class="row">
                <div class="col-md-6 room_bg_light full_width_room">
                  <div class="text_block">
                    <h2> <a href="{{url('/single-room')}}">Double Room </a><small><a href="{{url('/single-room')}}">- 5 Reviews</a></small></h2>
                    <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i></div>
                    <p class="text-justify">Over, dominion own it above gathering their, don't won't waters bring male bearing form may rule doesn't him fish appear spirit let earth may life you'll to great Tree moveth midst a there so Blessed saw fly don't multiply, dry.le doesn't him fish appear spirit let earth may life you'll to great.</p><a href="{{url('/single-room')}}" class="btn btn-link">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-6 small_screen_margin_top_half">
                  <div class="row"><a href="{{url('/single-room')}}"><img src="assets/images/room-1.jpg" alt="Room Image"></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <hr>
              </div>
            </div>
            <div class="col-md-12 margin_top_half">
              <div class="row">
                <div class="col-md-6 room_bg_light full_width_room">
                  <div class="text_block">
                    <h2><a href="{{url('/single-room')}}">Suite with view </a><small><a href="{{url('/single-room')}}">- 2 Reviews</a></small></h2>
                    <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i></div>
                    <p class="text-justify">Over, dominion own it above gathering their, don't won't waters bring male bearing form may rule doesn't him fish appear spirit let earth may life you'll to great Tree moveth midst a there so Blessed saw fly don't multiply, dry.le doesn't him fish appear spirit let earth may life you'll to great.</p><a href="{{url('/single-room')}}" class="btn btn-link">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-6 small_screen_margin_top_half">
                  <div class="row"><a href="{{url('/single-room')}}"><img src="assets/images/room-3.jpg" alt="Room Image"></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <hr>
              </div>
            </div>
            <div class="col-md-12 margin_top_half">
              <div class="row">
                <div class="col-md-6 room_bg_light full_width_room">
                  <div class="text_block">
                    <h2> <a href="{{url('/single-room')}}">Deluxe King suite</a><small><a href="{{url('/single-room')}}">- 5 Reviews</a></small></h2>
                    <div class="rooms_margin_custom_1"><i data-toggle="tooltip" data-placement="bottom" title="This room has WiFI" class="icon icon-Signal"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cable TV" class="icon icon-TV"></i><i data-toggle="tooltip" data-placement="bottom" title="This room has Cafe Bar" class="icon icon-Espresso"></i></div>
                    <p class="text-justify">Over, dominion own it above gathering their, don't won't waters bring male bearing form may rule doesn't him fish appear spirit let earth may life you'll to great Tree moveth midst a there so Blessed saw fly don't multiply, dry.le doesn't him fish appear spirit let earth may life you'll to great.</p><a href="{{url('/single-room')}}" class="btn btn-link">READ MORE</a>
                  </div>
                </div>
                <div class="col-md-6 small_screen_margin_top_half">
                  <div class="row"><a href="{{url('/single-room')}}"><img src="assets/images/room-2.jpg" alt="Room Image"></a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection
