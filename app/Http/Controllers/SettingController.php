<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SettingController extends Controller
{
    public function login(Request $request)
    {
        return view('dashboard.login');
    }
    public function postLogin(Request $request)
    {
        $input = $request->all();
        $data = $this->apiPost("/users/login", $input, false);
        if ($data->code->status === 0) {
            $data = $data->data;
            session()->put((array)$data);
            setcookie('auth_', base64_encode(json_encode($data)), (time() + 60 * 60 * 24 * 365), '/', env('SESSION_DOMAIN'), false, true);
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    public function logout(Request $request)
    {
        Cookie::forget('auth_');
        return redirect('/')->withoutCookie('auth_');;
    }

    public function register(Request $request)
    {
        return view('dashboard.register');
    }

    public function postRegister(Request $request)
    {
        $input = $request->all();
        $data = $this->apiPost("/users/register", $input, false);
        if ($data->code->status === 0) {
            $data = $data->data;
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
}
