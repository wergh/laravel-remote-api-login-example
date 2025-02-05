<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicLoginRequest;
use Illuminate\Support\Facades\Auth;
use Wergh\RemoteApiLogin\Events\RemoteApiLoginSendLoginSuccessfullEvent;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(PublicLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        broadcast(new RemoteApiLoginSendLoginSuccessfullEvent(Auth::user(), $request->code));

        return view('login-successfull');

    }
}
