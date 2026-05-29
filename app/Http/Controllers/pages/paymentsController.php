<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bookings;
use App\Models\payments;
class paymentsController extends Controller
{
      public function index()
  {
    
   $bookings = bookings::where('status', 'booked')->get();

    foreach ($bookings as $booking) {

    $paymentExists = payments::where('booking_id', $booking->id)->exists();

    if (!$paymentExists) {

        $payment = new payments();

        $payment->booking_id = $booking->id;
        $payment->vehicle_id = $booking->vehicle_id;
        $payment->customer_id = $booking->customer_id;
        $payment->payment_date = now();
        $payment->Payment_Amount = $booking->Amount;
        $payment->payment_mode = 'Cash';
        $payment->payment_status = 'Paid';

        $payment->save();
    }
}

$payments = payments::all();

return view('content.pages.pages-payments', compact('payments'));
  }
}
