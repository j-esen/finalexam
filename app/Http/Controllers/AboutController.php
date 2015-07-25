<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller {

    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('esenjessica@gmail.com');
                $message->to('esenjessica@gmail.com', 'Admin')->subject('Final Exam');
            });

        return \Redirect::route('contact')
            ->with('message', 'Thanks for contacting us!');

    }

}
