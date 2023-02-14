<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1() {
        $test_message = 'テストメッセージ';
        return view('tests.component-test1', compact('test_message'));
    }

    public function showComponent2(){
        return view('tests.component-test2');
    }
        
}
