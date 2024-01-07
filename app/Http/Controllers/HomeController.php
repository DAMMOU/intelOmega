<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormEmail;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Page;
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
        
        $count_reviews = Review::count();   
        $reviews = Review::all();
        $count_faqs = Faq::count(); 
        $faqs = Faq::where('status', 'visible')->get();
        $count_blogs = Blog::count(); 
        $blogs = Blog::where('status', 'published')->get();

        
        return view('home', compact('information', 'faqs', 'count_faqs', 'reviews', 'count_reviews', 'blogs', 'count_blogs'));
    }


    /**
     * show blog
     * 
     */
    public function blogShow($slug)
    {
        $blog = Blog::where('url', $slug)->firstOrFail();

        $information_rows = ['js', 'css'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        $information['author'] = $blog->created_by;
        $information['title'] = $blog->title;
        $information['keywords'] = $blog->keywords;
        $information['description'] = $blog->title;

        return view('blog-show', compact('information', 'blog'));
    }
   
/**
     * Display terms & conditions page
     * 
     */
    public function termsAndConditions() 
    {
        $information = $this->metadataInformation();

        $pages_rows = ['terms'];
        $pages = [];
        $page = Page::all();

        foreach ($page as $row) {
            if (in_array($row['name'], $pages_rows)) {
                $pages[$row['name']] = $row['value'];
            }
        }

        return view('service-terms', compact('information', 'pages'));
    }

    /**
     * Display privacy policy page
     * 
     */
    public function privacyPolicy() 
    {
        $information = $this->metadataInformation();

        $pages_rows = ['privacy'];
        $pages = [];
        $page = Page::all();

        foreach ($page as $row) {
            if (in_array($row['name'], $pages_rows)) {
                $pages[$row['name']] = $row['value'];
            }
        }

        return view('privacy-policy', compact('information', 'pages'));
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
