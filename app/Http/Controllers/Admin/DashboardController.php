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
        $dataUser = $this->apiGet("/users/data?skip=0&take=5&with_total=1", true);
        $data = $this->apiGet("/product/data?skip=0&take=5&with_total=1");
        if ($data->code->status === 0) {
            $totalUser = $dataUser->data->totalUser;
            $totalActiveUser = $dataUser->data->activeCountTotal;
            $dataUser = $dataUser->data->data;
            $totalProduct = $data->data->totalProduct;
            $totalActiveProduct = $data->data->activeCountTotal;
            $dataProduct = $data->data->data;
            return view('admin.dashboard', compact(
                'dataProduct', 
                'totalProduct', 
                'totalActiveProduct',
                'totalUser',
                'totalActiveUser',
            ));
        }
    }
}
