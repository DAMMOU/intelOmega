<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Helpers\helpers;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class RegisteredUserController extends Controller
{
    
    public function create()
    {
        $information = metadataInformation();
        return view('auth.register', compact('information'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(3)],
            'country' => 'required',
            'agreement' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
       
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country
        ]);
        //event(new Registered($user));

        $referral_code = ($request->hasCookie('referral')) ? $request->cookie('referral') : ''; 
        $referrer = ($referral_code != '') ? User::where('referral_id', $referral_code)->firstOrFail() : '';
        $referrer_id = ($referrer != '') ? $referrer->id : '';

        $status = (config('settings.email_verification') == 'disabled') ? 'active' : 'pending';
        
        $user->assignRole(config('settings.default_user'));
        $user->status = $status;
        $user->group = config('settings.default_user');
        $user->available_words_prepaid = config('settings.free_tier_words');
        $user->available_images_prepaid = config('settings.free_tier_images');
        $user->available_chars_prepaid = config('settings.voiceover_welcome_chars');
        $user->available_minutes_prepaid = config('settings.whisper_welcome_minutes');
        $user->default_voiceover_language = config('settings.voiceover_default_language');
        $user->default_voiceover_voice = config('settings.voiceover_default_voice');
        $user->job_role = 'Happy Person';
        $user->referral_id = strtoupper(Str::random(15));
        $user->referred_by = $referrer_id;
        $user->save();      


        toastr()->success(__('Congratulation! You can now proceed to login with your email'));
        return redirect()->route('login');
    }


}
