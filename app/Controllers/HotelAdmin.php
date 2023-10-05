<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HotelAdmin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function room_type()
    {
        return view('admin/room-type');
    }
    public function booking()
    {
        return view('admin/booking');
    }
    public function room()
    {
        return view('admin/room');
    }
    public function price_manager()
    {
        return view('admin/price-manager');
    }
    public function service()
    {
        return view('admin/service');
    }
    public function housekeeping()
    {
        return view('admin/housekeeping');
    }

    public function guest()
    {
        return view('admin/guest');
    }
    public function amenity()
    {
        return view('admin/amenity');
    }
    public function walkthrough()
    {
        return view('admin/walkthrough-booking');
    }
}
