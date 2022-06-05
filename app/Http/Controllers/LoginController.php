<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
            // $credentials = [
            //     'npm_nip' => $request['npm_nip'],
            //     'password' => $request['password'],
            // ];
            // dd($credentials);
            $npm_nip = $request->npm_nip;
            $password = $request->password;
    
            if (Auth::attempt(['npm_nip'=> $npm_nip, 'password'=> $password, 'verify'=> 'active'])) {
                $request->session()->regenerate();
    
                return redirect()->intended('/dashboard');
            }
        
        return back()->with('pesan', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('logout', 'Anda Berhasil Log Out');
    }
}
