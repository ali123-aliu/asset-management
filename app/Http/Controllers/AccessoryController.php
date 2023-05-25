<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Brand;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function all_in_one()
    {
        $assets = Asset::where('type','all_in_one')->get();
        return view('admin.assets.all-in-one',get_defined_vars());
    }
    public function systems()
    {
        $assets = Asset::where('type','pc')->get();
        return view('admin.assets.systems',get_defined_vars());
    }
    public function laptop()
    {
        $assets = Asset::where('type','laptop')->get();
        return view('admin.assets.laptop',get_defined_vars());
    }
    public function printers()
    {
        $assets = Asset::where('type','accessory')->where('acc_type','printer')->get();
        return view('admin.assets.printers',get_defined_vars());
    }
}
