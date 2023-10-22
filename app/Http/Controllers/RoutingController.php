<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function test()
    {
        return view('test');
    }

    public function personal_data()
    {
        return view('additionally/personal_data');
    }

    public function company()
    {
        return view('additionally/company');
    }

    public function contacts()
    {
        return view('additionally/contacts');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function tv()
    {
        return view('tv');
    }

    public function pc()
    {
        return view('pc');
    }

    public function fridge()
    {
        return view('fridge');
    }

    public function washing_machine()
    {
        return view('washing_machine');
    }

    public function dishwasher()
    {
        return view('dishwasher');
    }

    public function coffee_machine()
    {
        return view('coffee_machine');
    }

    public function coffee_machine_2()
    {
        return view('coffee_machine_2');
    }

    public function hob()
    {
        return view('hob');
    }

    public function four()
    {
        return view('four');
    }
}
