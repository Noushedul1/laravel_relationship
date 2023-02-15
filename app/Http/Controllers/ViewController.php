<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\Mobile;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ViewController extends Controller
{
    public function indexView($id)
    {
        // $customer = Customer::find($id);
        // $mobile = Mobile::find($id);
        // return $customer->mobile->model;
        // return $mobile->customer->name;
        // return Customer::find($id)->mobile;
        // return Mobile::find($id)->customer;
        $customer = Mobile::find($id)->customer;
        return view('/manage-students',['customer'=>$customer]);
        // return [
        //     $customer->name,
        //     $mobile->model
        // ];
        // return view('manage-students',[
        //     'customer' => $customer,
        //     'mobile' => $mobile
        // ]);
    }
    public function showView($id)
    {
        $customer = Mobile::find($id)->customer;
        return view('/show-view',['customer'=>$customer]);
    }
    public function inlinebladeRender()
    {
       $total = 100;
       return Blade::render('<h1>{{ $totals }}</h1>',['totals'=>$total]);
    }
}
