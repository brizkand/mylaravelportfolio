<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    public function index()
    {
        $active = 'contact';
        return view('pages.contact.index', compact(['active']));
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:8|max:500'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );
        
        Mail::to('holgadokevin@gmail.com')->send(new SendMail($data));

        return back()->with('status', 'Successfully send an email!');
    }
}
