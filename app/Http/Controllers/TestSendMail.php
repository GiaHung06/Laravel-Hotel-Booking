<?php

namespace App\Http\Controllers;

use App\Mail\ViettripTourMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class TestSendMail extends Controller
{
    public function index() {
		Log::info("send mail Start");
		$booking = Booking::first();
		Mail::to('abc@gmail.com')->send(new ViettripTourMail($booking));
		Log::info("send mail End");
		return 123;
	}
}
