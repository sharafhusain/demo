<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact");
    }
    public function handle(Request $request)
    {
        
        $data = $request->validate([
           "user_name" => "required",
           "last_name" => "required",
           "first_name" => "required",
           "email" => "required|email",
        ]);

        Contact::create($data);   
        return redirect()->back()->with("message","data has been succesfuly saved"); 
    }
}
