<?php

namespace App\Http\Controllers\Auth;

use App\ActivationToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    public function activate(ActivationToken $token)
    {
        $token->user()->update([
            'active' => true
        ]);

        $token->delete();

        Auth::login($token->user, true);

        return redirect('/home');
    }

    public function resend(Request $request)
    {

    }
}
