<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Api;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->apiGet("/product/data?skip=0&take=5");
        if ($data->code->status === 0) {
            $data = $data->data;
            return view('dashboard.homepage', compact('data'));

        }
    }
}
