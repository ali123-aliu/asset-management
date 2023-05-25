<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        $all_in_one = $assets->where('type','all_in_one')->count();
        $systems = $assets->where('type','pc')->count();
        $laptop = $assets->where('type','laptop')->count();
        $printers = $assets->where('type','accessory')->where('acc_type','printer')->count();
        $ram1 = $assets->whereIn('type',['all_in_one','laptop','pc'])->pluck('ram')->toArray();
        $ram2 = $assets->where('type','accessory')->where('acc_type','ram')->pluck('ram')->toArray();
        $ram = [];
        if($ram1 || $ram2){
            $ram = array_filter(array_map('intval',array_unique(array_merge($ram1,$ram2))), function($value) {
                return $value !== 0;
            });
            rsort($ram);
        }
        $data = [];
        foreach($ram as $val){
            $count1 = $assets->whereIn('type',['all_in_one','laptop','pc'])->where('ram',$val)->count();
            $count2 = $assets->where('type','accessory')->where('acc_type','ram')->where('ram',$val)->pluck('acc_count')->toArray();
            $count2 = array_sum(array_map('intval',$count2));
            $count = $count1+$count2;
            $total = $val*$count;
            $data[$val] = ['count'=>$count,'total'=>$total];
        }
        $total_ram = array_sum(array_column($data, 'total'));
        return view('admin.index',get_defined_vars());
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
