<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function login(Request $request)
    {
        return view('dashboard.login');
    }
    public function postLogin(Request $request)
    {
        dd($request->all());
        $data = $this->apiGet("/product/data?skip=0&take=5");
        if ($data->code->status === 0) {
            $data = $data->data;
            return view('dashboard.homepage', compact('data'));

        }
    }
}
