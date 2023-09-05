<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssetManagement\Asset;
class SystemController extends Controller
{
    //
    public function dashboard(){
        $assets = Asset::all();
        return view('dashboard',compact('assets'))->render();
    }
}
