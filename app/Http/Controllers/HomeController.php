<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Contact;


class HomeController extends Controller
{
    public function index(){
    	$time = Carbon::now();
    	$morning = '12:00';
    	$afternoon = '18:00';
    	$evening = '23:59';
    	
    	return view('welcome')
    		->with('time', $time)
    		->with('morning', $morning)
    		->with('afternoon', $afternoon)
    		->with('evening', $evening);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return back();
        // return back()->with('success', 'Thanks for contacting us!');
    }
}
