<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

class verifyEmailController extends Controller
{
    public function verify(Request $request)
    {
        $user = User::find($request->route('id'));

        // Cek apakah sudah terverifikasi
        if ($user->hasVerifiedEmail()) {
            return redirect('user/login')->withSuccess('Email telah terverifikasi sebelumnya, Silahkan login');
        }

        // Proses verifikasi email
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        
        return redirect('user/login')->withSuccess("Email berhasil terverifikasi! Silahkan login");
    }
}
