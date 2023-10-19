<?php

namespace App\Http\Controllers;

use App\Http\Resources\MobileConfigResource;
use App\Models\Mobileconfig;
use Illuminate\Http\Request;

class MobileConfigController extends Controller
{
    public function index(){
        $value = Mobileconfig::all();

        return MobileConfigResource::collection($value);
    }
}
