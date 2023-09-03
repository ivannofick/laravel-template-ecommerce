<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->apiGet("/product/data?skip=0&take=5&get_all=1", true);
        if ($data->code->status === 0) {
            $dataProduct = $data->data;
            return view('admin.products', compact('dataProduct'));
        }
    }
}
