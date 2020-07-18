<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class PaymentController extends Controller
{
    public function show(Request $request, $eventSlug)
    {
        $registration = $request->user()
            ->registrations()
            ->with('event')
            ->whereHas('event', $this->registrationEventHasQuery($eventSlug))
            ->first();

        return view('dashboard.payment', compact('registration'));
    }

    public function pay(Request $request, $eventSlug)
    {
        $request->validate([
            'payment_confirmation' => 'required|image',
        ]);

        $payment = $request->user()->registrations()
            ->whereHas('event', $this->registrationEventHasQuery($eventSlug))
            ->first();
        $oldPayment = $payment->payment_confirmation;

        $paymentConfirmation = $request->payment_confirmation->store('public/images/payment_confirmation');
        $payment->status = 'paid';
        $payment->payment_confirmation = $paymentConfirmation;
        $payment->save();

        if ($oldPayment) {
            Storage::delete($oldPayment);
        }

        return back();
    }

    private function registrationEventHasQuery($eventSlug)
    {
        return function ($query) use ($eventSlug) {
            $query->where('slug', $eventSlug);
        };
    }
}
