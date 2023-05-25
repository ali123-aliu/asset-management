<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::all();
//        dd($assets);
        return view('admin.assets.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.assets.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'type' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($this->jsonResponse('error',$validator->errors()->first()));
        }
        $asset = new Asset();
        $asset->name = $request->name;
        $asset->type = $request->type;
        $asset->user = $request->user;
        $asset->cable = $request->cable;
        $asset->department = $request->department;
        $asset->brand_id = $request->brand_id;
        $asset->brand_detail = $request->brand_detail;
        $asset->ram = $request->ram;
        $asset->cpu = $request->cpu;
        $asset->ssd = $request->ssd;
        $asset->hdd = $request->hdd;
        $asset->card = $request->card;
        $asset->ip_address = $request->ip_address;
        $asset->mac_address = $request->mac_address;
        $asset->password = $request->password;
        $asset->lcd_size = $request->lcd_size;
        $asset->lcd_model = $request->lcd_model;
        $asset->acc_type = $request->acc_type;
        $asset->acc_brand = $request->acc_brand;
        $asset->acc_model = $request->acc_model;
        $asset->acc_sr_no = $request->acc_sr_no;
        $asset->acc_count = $request->acc_count;
        $asset->printer_type = $request->printer_type;
        $asset->description = $request->description;

        $asset->keyboard = !empty($request->keyboard) ? 1 : 0;
        $asset->mouse = !empty($request->mouse) ? 1 : 0;
        $asset->printer = !empty($request->printer) ? 1 : 0;
        $asset->scanner = !empty($request->scanner) ? 1 : 0;
        $asset->mouse_brand = $request->mouse_brand;
        $asset->mouse_model = $request->mouse_model;
        $asset->keyboard_brand = $request->keyboard_brand;
        $asset->keyboard_model = $request->keyboard_model;
        $asset->printer_brand = $request->printer_brand;
        $asset->printer_model = $request->printer_model;
        $asset->scanner_brand = $request->scanner_brand;
        $asset->scanner_model = $request->scanner_model;
        $asset->save();

        return response()->json($this->jsonResponse('success','Asset Created Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::find($id);
        $brands = Brand::all();
        return view('admin.assets.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asset = Asset::find($id);
        $asset->name = $request->name;
        $asset->cable = $request->cable;
        $asset->user = $request->user;
        $asset->department = $request->department;
        $asset->brand_id = $request->brand_id;
        $asset->brand_detail = $request->brand_detail;
        $asset->ram = $request->ram;
        $asset->cpu = $request->cpu;
        $asset->ssd = $request->ssd;
        $asset->hdd = $request->hdd;
        $asset->card = $request->card;
        $asset->ip_address = $request->ip_address;
        $asset->mac_address = $request->mac_address;
        $asset->password = $request->password;
        $asset->lcd_size = $request->lcd_size;
        $asset->lcd_model = $request->lcd_model;
        $asset->acc_type = $request->acc_type;
        $asset->acc_brand = $request->acc_brand;
        $asset->acc_model = $request->acc_model;
        $asset->acc_sr_no = $request->acc_sr_no;
        $asset->acc_count = $request->acc_count;
        $asset->printer_type = $request->printer_type;
        $asset->description = $request->description;

        $asset->keyboard = !empty($request->keyboard) ? 1 : 0;
        $asset->mouse = !empty($request->mouse) ? 1 : 0;
        $asset->printer = !empty($request->printer) ? 1 : 0;
        $asset->scanner = !empty($request->scanner) ? 1 : 0;
        $asset->mouse_brand = $request->mouse_brand;
        $asset->mouse_model = $request->mouse_model;
        $asset->keyboard_brand = $request->keyboard_brand;
        $asset->keyboard_model = $request->keyboard_model;
        $asset->printer_brand = $request->printer_brand;
        $asset->printer_model = $request->printer_model;
        $asset->scanner_brand = $request->scanner_brand;
        $asset->scanner_model = $request->scanner_model;
        $asset->save();

        return response()->json($this->jsonResponse('success','Asset Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();
        return response()->json($this->jsonResponse('success','Asset Deleted Successfully'));
    }
}








