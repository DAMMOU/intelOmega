<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Spatie\Permission\Contracts\Role;

class AuthenticatedSessionController extends Controller
{
    



    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $information = metadataInformation();
        return view('auth.login', compact('information'));
    }

    

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validated();


        if (Auth::attempt($credentials)) {
            
            $user1 = auth()->user();//collection
            $user = User::find($user1->id);//Model/uesrs
            // L'utilisateur est maintenant authentifié, vous pouvez vérifier son rôle
            if( $user->hasRole('admin')){

                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');   

            }else {

                $request->session()->regenerate();
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        return back()
            ->withErrors([
                'email' => __('auth.failed'),
            ])
            ->withInput($request->only('email'));
    }



}
