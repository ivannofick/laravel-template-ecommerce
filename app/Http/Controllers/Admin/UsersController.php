<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api;


class UsersController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->apiGet("/users/data?skip=0&take=5&get_all=1", true);
        if ($data->code->status === 0) {
            $dataUsers = $data->data;
            return view('admin.users', compact('dataUsers'));
        }
    }
}
