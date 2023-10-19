<?php

namespace App\Http\Controllers;
use App\Http\Resources\CustomertthResource;
use App\Models\Customertth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomertthController extends Controller
{
    public function updateReceivedSuccess(Request $request, $id){
        $bodyContent = $request->getContent();
        $json = json_decode($bodyContent);

        $customertth = DB::table('customertth')
        ->where('CustID', $id)
        ->update([
            'Received' => 1,
            'ReceivedDate' => $json->receiveddate
        ]);

        $customertth_result = Customertth::where('CustID', $id)->get();

        return CustomertthResource::collection($customertth_result);
    }

    public function updateRecievedFail(Request $request, $id){
        $bodyContent = $request->getContent();
        $json = json_decode($bodyContent);

        $customertth = DB::table('customertth')
        ->where('CustID', $id)
        ->update([
            'Received' => 2,
            'FailedReason' => $json->failedreason
        ]);

        $customertth_result = Customertth::where('CustID', $id)->get();

        return CustomertthResource::collection($customertth_result);
    }
}
