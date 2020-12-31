<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenu()
    {
        $aryMenu = config('menu');
        return response()->json($aryMenu, 200);
    }
}
