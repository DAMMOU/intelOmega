<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormEmail;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show home page
     */
    public function index()
    {
        $information = $this->metadataInformation();
        
        $review_exists = Review::count();   
        $reviews = Review::all();

        $count_faqs = Faq::count(); 
        $faqs = Faq::where('status', 'visible')->get();
        $count_blogs = Blog::count(); 
        $blogs = Blog::where('status', 'published')->get();

        
        return view('home', compact('information', 'faqs', 'count_faqs', 'reviews', 'blogs', 'count_blogs'));
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
