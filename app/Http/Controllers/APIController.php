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
}
