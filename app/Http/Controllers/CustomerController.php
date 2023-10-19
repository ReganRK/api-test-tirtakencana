<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Models\Customertth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();

        foreach ($customers as $customer) {
            $result_hadiah = Customertth::select('TTOTTPNo', 'Received')->where('CustID', $customer->CustID)->orderBy('TTOTTPNo')->get();
            $hadiah = [];
            $received = [];
            
            foreach ($result_hadiah as $result){
                $hadiah[] = $result->TTOTTPNo;
                $received[] = $result->Received;
            }
            
            $customer->hadiah = $hadiah;
            $customer->received = $received;
        }

        // return response()->json($users);
        return CustomerResource::collection($customers);
    }
}
