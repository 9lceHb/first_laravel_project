<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        // Точка используется вместо /.
        // То есть шаблон находится по пути resources/views/page/about.blade.php
        return view('page.about');
    }
}
