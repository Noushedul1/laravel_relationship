<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer()
    {
        $mobile = new Mobile();
        $mobile->model = 'samsung s6';

        $customer = new Customer();
        $customer->name = 'arman';
        $customer->email = 'arman@gmail.com';

        $customer->save();

        $customer->mobile()->save($mobile);
    }
    public function showmobile()
    {
        // $mobile = Customer::find($id)->mobile;
        // $mobile = Customer::find($id);
        $customers = Customer::all();
        return view('all',['customers'=>$customers]);
        // return $mobile;
    }
}
