<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class TestController extends Controller
{
    public function testfunction(Request $request)
    {
//        $name = Input::get('testname');
        $name = $request->input('testname');
        
        if ($name=='success')
        {
            echo 'success';
            
            $notification = array(
                'message' => 'Succesfully create laravel data',
                'alert-type' => 'success'
            );
        }
        elseif ($name=='update')
        {
            echo 'updated';
            
            $notification = array(
                'message' => 'Succesfully updated laravel data',
                'alert-type' => 'success'
            );
        }
        elseif ($name=='warning')
        {
            echo 'warning';
            
            $notification = array(
                'message' => 'Warning! Becarefull',
                'alert-type' => 'warning'
            );
        }
        else
        {
            echo 'deleted';
            
            $notification = array(
                'message' => 'Succesfully deleted laravel data',
                'alert-type' => 'error'
            );
        }
        
        return back()->with($notification);
        
    }
}
