<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Api;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->apiGet("/product/data?skip=0&take=5");
        if ($data->code->status === 0) {
            $totalProduct = count($data->data);
            $dataProduct = $data->data;
            return view('admin.dashboard', compact('dataProduct', 'totalProduct'));
        }
    }
}
