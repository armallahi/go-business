<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth2.login');
    }


    public function store(Request $request)
    {

        $admin =  app('firebase.firestore')->database()->collection('Admin');
        $query = $admin->where('username' , '=',  $request->input('username'))->where('password', '=', $request->input('password'));
        $documents = $query->documents();
        if(!empty($documents->rows())){
            $request->session()->put('user', 'exists');
            return redirect(route('dashboard'))->with(['success' => 'logged in successfully']);
        }else{
            return redirect()->back()->with(['error' => 'Invalid username or password']);
        }
        
        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        if($request->session()->has('user')){
            $request->session()->forget('user');
        }
        
        // Auth::guard('web')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
