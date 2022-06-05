<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReferralForgotPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;

class RegisAdminController extends Controller
{
    //
    public function index()
    {
        return view('registeradmin');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'npm_nip' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'status' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $validated['password'] = bcrypt($validated['password']);


        User::create($validated);

        return redirect('/')->with('success', 'Anda Berhasil Registrasi Silakan Login!');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function unique_code($limit){
      return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

    public function forgotPass()
    {
        return view('forgotpassword');
    }

    public function create_referral_forgot_password(Request $request){
      $user = User::where('email', '=', $request->email)->first();
      $refferal = ReferralForgotPassword::where(['email' => $request->email, 'status' => 'wait'])->first();

      $createReferral = new ReferralForgotPassword;
      $createReferral->email = $request->email;
      $email = $request->email;

      if ($user === null) {
        Session::flash('message', 'email tidak teraftar');
      }else{
        if($refferal === null){
          $createReferral->kode = $this->unique_code(9);
          $name = $user->name;

          $data = array('name' => $user->name,
                        'email' => $request->email,
                        'kode' => $createReferral->kode);

          Mail::send('mail', $data, function ($message) use ($email, $name) {
              $message->to($email, $name)->subject('[no-reply] Reset Password');
              $message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
          });

          $createReferral->status = 'wait';
          $createReferral->save();

          Session::flash('message', 'request telah terkirim');
        }else if($refferal !== null && $refferal){
            $refferal->kode = $this->unique_code(9);
            $name = $user->name;

            $data = array('name' => $user->name,
                          'email' => $request->email,
                          'kode' => $refferal->kode);

            Mail::send('mail', $data, function ($message) use ($email, $name) {
                $message->to($email, $name)->subject('[no-reply] Reset Password');
                $message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
            });


            $refferal->save();

            Session::flash('message', 'request telah terkirim');

        }
      }
      return view('forgotpassword');
    }

    public function reset(Request $request)
    {
        $email = $request->email;
        $kode = $request->kode;

        $refferal = ReferralForgotPassword::where(['email' => $email, 'status' => 'wait'])->first();

        if($refferal->kode === $kode){
          return view('resetpass');
        }else{
          return view('statusreset', ['status' => 'expired']);
        }
    }

    public function reset_password(Request $request){
      $email = $request->email;
      $kode = $request->kode;
      $password = $request->password;
      $passwordConfirm = $request->confirmpassword;

      $referral = ReferralForgotPassword::where(['email' => $email, 'kode' => $kode])->first();
      $user = User::where('email', '=', $request->email)->first();

      if($password !== $passwordConfirm){
        Session::flash('message', 'password dan confirm password tidak sama');
        return view('resetpass');
      }else{
        if($referral){
          $referral->status = 'confirmed';
          if($user){
            $user->password = bcrypt($password);
            $user->save();
          }
          $referral->save();
        }
        return view('statusreset', ['status' => 'Password Anda Sudah Di Reset']);
      }

    }

}
