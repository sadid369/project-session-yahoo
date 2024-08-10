<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        // $value = session()->except(['name', '_previous']);
        // $value = session()->only(['name', '_previous']);
        $value = session()->all();
    echo "<pre>";
    print_r($value);
    echo "</pre>";

    // if(session()->has('name')){
    //     $value = session()->get('name');
    //     echo $value;
    // }else{
    //     echo "Name key does't Exists ";
    // }

    // if(session()->exists('name')){
    //     $value = session()->get('name');
    //     echo $value;
    // }else{
    //     echo "Name key does't Exists ";
    // }

    // $value = session()->get('name');
    // $value = session('name');
    // echo $value;
    }
    public function storeSession(Request $request) {
       session(['name'=>'Sadid', 'class'=>'B-tech']);
    //    session()->increment('count', 2);
    //    session()->decrement('count', 2);
       session()->regenerate();
    //    session(['name'=>'Sadid']);
        // $request->session()->put('class', 'B-tech');
        // session(['name'=>'Sadid']);
        // session()->put('class', 'B-tech');
        return redirect('/');
    }
    public function deleteSession() {
        // session()->forget(['name','class']);
        session()->flush();
       
        return redirect('/');
    }
}
