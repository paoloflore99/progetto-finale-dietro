<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index() {
     return view("guests.apartment.index");
    }
} 
