<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class SignController extends Controller
{
    public function submission(Request $request)
    {
        $email = $request->get('email1');
        $password = $request->get('password1');
        $shopid = $request->get('shopid');
        $shopname = $request->get('shopname');
        $contactnumber = $request->get('contact');
        $address = $request->get('shopaddress');
        // Validate the input

        // Hash the password
        $hashedPassword = Hash::make($request->get('password1'));

        // Insert data into the database
        DB::table('signup table')->insert([
            'Email' => $email,
            'Password' => $hashedPassword,
            'Shop_ID' => $shopid,
            'Shop_Name' => $shopname,
            'Contact_Number' => $contactnumber,
            'Shop_Address' => $address,
        ]);

        return redirect('loggin');
    }

    public function match(Request $request)
    {
   
        $enteredEmail = $request->get('email2');
        $enteredPassword = $request->get('password2');
        $enteredShopID = $request->get('shopid2');

        // Fetch user data
        $user = DB::table('signup table')->where('Email', $enteredEmail)->first();
        $shop = DB::table('signup table')->where('Shop_ID',$enteredShopID)->first();
        // Check if user exists and verify the password using Hash::check
        if ($user && $shop && Hash::check($enteredPassword, $user->Password)) {
            return redirect('display_flower/'.$enteredShopID);
        } 
        else {
            return "Invalid email, password, or shop ID.";
        }
    }

    public function loggingout(Request $request){


        // Regenerate the session token
        return view('login');
    }
}
