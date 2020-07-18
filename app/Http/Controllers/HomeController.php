<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return "สวัสดีจากหน้า user index";
    }

    public function greating($name)
    {
        return "สวัสดี $name";
    }
    public function บวกเลข($num1, $num2, $num3)
    {
        return "ผลรวมของเลข $num1, $num2 และ $num3 คือ" . ($num1 + $num2 + $num3) ."นะจ๊ะ";
    }
    public function user() {
        return "สวัสดีจากหน้า user index";
    }
}
