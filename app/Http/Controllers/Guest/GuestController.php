<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }
}