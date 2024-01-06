<?php

use App\Models\Setting;
use Illuminate\Support\Str;

define("PAGELIST","liste");
define("PAGECREATE","create");
define("PAGEEDIT","edit");
define("DEFAULTPASSWORD","password");


function userlastName(){
    return auth()->user()->name;
}

function userfirstName(){
    return auth()->user()->firstName;
}

function userfullName(){
    return userfirstName().' '. userlastName();
}

function userImage(){
    return auth()->user()->image;
}


function addClass($route, $class){
    $routeActuel= request()->route()->getName();
    if( Str::contains($routeActuel, $route)){
        return $class;
    }
    return "";    
}
function openMenu($route){
    if( request()->route()->getName()=== $route ){
        return 'menu-open active';
    }
    return '';
}
function active($route){
    if( request()->route()->getName()=== $route ){
        return 'active';
    }
    return '';
}





/**
 * Generate an acronym from a given string by using the first letter of each word (except certain words).
 *
 * @param string $str The input string.
 * @return string The generated acronym.
 */
function generateAcronym($str)
{
    // Split the input string into words using regular expression
    $words = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $acronym = ''; // Initialize the acronym variable

    foreach ($words as $word) {
        // Check if the lowercase version of the word is not one of the excluded words
        if (!in_array(strtolower($word), ['des', 'de', 'et'])) {
            // Add the uppercase first letter of the word to the acronym
            $acronym .= strtoupper(substr($word, 0, 1));
        }
    }

    return $acronym; // Return the generated acronym
}




function metadataInformation()
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
