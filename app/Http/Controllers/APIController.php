<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * All customers data show
     */
    public function allCustomers(){
        $customers = Customer::latest()->get();
        $apiData = [
            'status'        =>  true,
            'msg'           =>  'All customers data',
            'customers'     =>  $customers
        ];

        //Return data with api response
        return response()->json($apiData);
    }
    /**
     * Single customer data show
     */
    public function singleCustomer($id){
        $single_customer = Customer::find($id);

        if ($single_customer == null){
            $status = false;
            $msg = "Customer not found.";
        }else{
            $status = true;
            $msg = "Customer is okay.";
        }

        $apiData = [
            'status'        =>  $status,
            'msg'           =>  $msg,
            'customers'     =>  $single_customer
        ];

        //Return data with api response
        return response()->json($apiData);
    }
}
