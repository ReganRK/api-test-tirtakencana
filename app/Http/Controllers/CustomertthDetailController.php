<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomertthDetailResource;
use App\Models\Customertthdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomertthDetailController extends Controller
{
    public function index(){
        $value = Customertthdetail::select('Jenis', DB::raw('SUM(Qty) as Qty'), 'Unit')
        ->groupBy('Jenis')
        ->groupBy('Unit')
        ->get();

        return CustomertthDetailResource::collection($value);
    }
}
