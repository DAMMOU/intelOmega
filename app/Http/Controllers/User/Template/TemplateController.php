<?php

namespace App\Http\Controllers\User\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
class TemplateController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        return view('user.templates.index');
    }
}
