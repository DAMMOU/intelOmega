<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormEmail;
use App\Models\Message;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
   /**
     * Show Contact Us page
     */
    public function index()
    {
        $information = $this->metadataInformation();
 
        return view('contact-us', compact('information'));
    }

    public function contactUs(Request $request){

        try {

            $message = Message::create([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message'),
            ]);
            Mail::to('udammou@gmail.com')->send(new ContactFormEmail($request));
           

            if (Mail::flushMacros()) {
                return redirect()->back()->with('error', 'Sending email failed, please try again.');
            }

            return redirect()->back()->with('success', 'Message sent successfully!');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Please try again later or contact support. Error Details: ' . $e->getMessage());
        }
        
    }


    public function metadataInformation()
    {
        $information_rows = ['title', 'author', 'keywords', 'description', 'js', 'css'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $setting) {
            if (in_array($setting['name'], $information_rows)) {
                $information[$setting['name']] = $setting['value'];
            }
        }

        return $information;
    }
}
