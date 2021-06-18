<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function room()
    {
        return view('pages.rooms');
    }

    public function location()
    {
        return view('pages.location');
    }

    public function restaurant()
    {
        return view('pages.restaurant');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function single_room()
    {
        return view('pages.singleroom');
    }

    public function booking()
    {
        return view('pages.booking');
    }

}
