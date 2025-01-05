<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Add contact form processing logic here

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }

    public function quote()
    {
        return view('pages.quote');
    }

    public function storeQuote(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'product' => 'required|string',
            'quantity' => 'required|integer',
            'details' => 'required|string'
        ]);

        // Add quote request processing logic here

        return redirect()->back()->with('success', 'Quote request received successfully!');
    }
}
