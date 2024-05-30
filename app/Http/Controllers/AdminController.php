<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function submit_form(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ]);

    // Create a new Customer instance
    $customer = new Customer;
    $customer->name = $validatedData['name'];
    $customer->email = $validatedData['email'];
    $customer->debrief_call = $request->has('debrief_call'); // Assign true or false directly

    // Save customer data to the database
    $customer->save();

   

    
    // Redirect or display message based on debrief_call value
    if ($customer->debrief_call) {
        return redirect()->route('stripe', ['customer_id' => $customer->id]);
    } else {
        echo "<script>alert('Thank you! Please check your email for further details')</script>";
        return view('assessment');
    }
}

}