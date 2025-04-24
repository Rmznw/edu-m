<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{




    public function index()
    {
        $payment = Payment::all();
        return view('payments.index', ['payments' => $payment]);

    }


    public function create(): View
    {
        $enrollments = Enrollment::pluck('id');
        return view('payments.create',compact('enrollments'));

    }



    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect()->route('payments.index')->with('alert-success', 'Payment Added');
    }



    public function show(string $id): View
    {
        $payment = Payment::find($id);
        return view('payments.show')->with('payments', $payment);
    }

    public function edit(string $id):View
    {
        $payment = Payment::find($id);
        return view('payments.edit')->with('payment', $payment);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect()->with('alert-success','Payment updated!');
    }


    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('alert-success', 'Payment deleted');
    }
}
