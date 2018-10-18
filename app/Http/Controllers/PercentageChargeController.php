<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PercentageCharges;
use App\Http\TransactionCharges;

class PercentageChargeController extends Controller
{
    /**Retrieve list of Charges**/
    public function FetchTransactionCharges() {
        //Returns Transaction Charges in Percentage

       $BasicPlanTransactionCharge = PercentageCharges::where('id', TransactionCharges::Basic)->first();
        $StandardPlanTransactionCharge = PercentageCharges::where('id', TransactionCharges::Standard)->first();
        $PremiumPlanTransactionCharge = PercentageCharges::where('id', TransactionCharges::Premium)->first();


        $requestResponse = [
            "BasicPlanTransactionCharge" => $BasicPlanTransactionCharge['percentageCharge'],
            "StandardPlanTransactionCharge" => $StandardPlanTransactionCharge['percentageCharge'],
            "PremiumPlanTransactionCharge" => $PremiumPlanTransactionCharge['percentageCharge']
        ];
        return $requestResponse;
    }



    public function FetchTransactionDetails(){
        $transactionCharges = $this->FetchTransactionCharges();
        echo $transactionCharges['PremiumPlanTransactionCharge'];

    }
}
