@extends('admin.layouts.app')
@section('title','Edit Asset')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Asset</a></li>
                                <li class="breadcrumb-item active">Edit Asset</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Asset</h4>
                    </div>
                </div>
            </div>
            <form id="createAsset" action="{{route('assets.update',$id)}}" method="post">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-types-preview">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Type</label>
                                                <select name="type" class="form-select" required readonly disabled
                                                        style="cursor: not-allowed">
                                                    <option value="">--Select Type--</option>
                                                    <option value="all_in_one"
                                                            @if($asset->type == 'all_in_one') selected @endif >All in
                                                        One
                                                    </option>
                                                    <option value="laptop"
                                                            @if($asset->type == 'laptop') selected @endif >Laptop
                                                    </option>
                                                    <option value="pc" @if($asset->type == 'pc') selected @endif >PC
                                                    </option>
                                                    <option value="accessory"
                                                            @if($asset->type == 'accessory') selected @endif >
                                                        Accessories
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">User</label>
                                                <input name="user" class="form-control" placeholder="Enter User"
                                                       value="{{$asset->user}}">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Department</label>
                                                <input name="department" class="form-control"
                                                       placeholder="Enter Department" value="{{$asset->department}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row content_show">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-types-preview">
                                        <div class="row">
                                            @if(in_array($asset->type,['accessory']))
                                                <div
                                                    class="col-lg-4 mb-3 all accessory ram cpu ssd hdd card keyboard mouse lcd printer headphone">
                                                    <label class="form-label">Accessories</label>
                                                    <select name="acc_type" class="form-select" readonly disabled
                                                            style="cursor: not-allowed">
                                                        <option value="">--Select Accessories--</option>
                                                        <option value="ram"
                                                                @if($asset->acc_type == 'ram') selected @endif >RAM
                                                        </option>
                                                        <option value="ssd"
                                                                @if($asset->acc_type == 'ssd') selected @endif >SSD
                                                        </option>
                                                        <option value="hdd"
                                                                @if($asset->acc_type == 'hdd') selected @endif >HDD
                                                        </option>
                                                        <option value="cpu"
                                                                @if($asset->acc_type == 'cpu') selected @endif >CPU
                                                        </option>
                                                        <option value="card"
                                                                @if($asset->acc_type == 'card') selected @endif >Graphic
                                                            Card
                                                        </option>
                                                        <option value="keyboard"
                                                                @if($asset->acc_type == 'keyboard') selected @endif >
                                                            Keyboard
                                                        </option>
                                                        <option value="mouse"
                                                                @if($asset->acc_type == 'mouse') selected @endif >Mouse
                                                        </option>
                                                        <option value="lcd"
                                                                @if($asset->acc_type == 'lcd') selected @endif >LCD
                                                        </option>
                                                        <option value="headphone"
                                                                @if($asset->acc_type == 'headphone') selected @endif >
                                                            Headphone
                                                        </option>
                                                        <option value="printer"
                                                                @if($asset->acc_type == 'printer') selected @endif >
                                                            Printer
                                                        </option>
                                                    </select>
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc">
                                                    <label class="form-label">Brand</label>
                                                    <select name="brand_id" class="form-select">
                                                        <option value="">--Select Brand--</option>
                                                        @foreach($brands as $data)
                                                            <option value="{{$data->id}}"
                                                                    @if($asset->brand_id == $data->id) selected @endif >{{$data->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc">
                                                    <label class="form-label">Brand Detail</label>
                                                    <input type="text" name="brand_detail" class="form-control"  value="{{ $asset->brand_detail }}">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'ram'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc ram">
                                                    <label class="form-label">RAM (GB)</label>
                                                    <input name="ram" class="form-control" value="{{ $asset->ram }}"
                                                           placeholder="Enter RAM Size">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'cpu'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc cpu">
                                                    <label class="form-label">CPU</label>
                                                    <input name="cpu" class="form-control" value="{{ $asset->cpu }}"
                                                           placeholder="Enter CPU">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'ssd'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc ssd">
                                                    <label class="form-label">SSD</label>
                                                    <input name="ssd" class="form-control" value="{{ $asset->ssd }}"
                                                           placeholder="Enter SSD Size">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'hdd'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc hdd">
                                                    <label class="form-label">HDD</label>
                                                    <input name="hdd" class="form-control" value="{{ $asset->hdd }}"
                                                           placeholder="Enter HDD Size">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'card'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc card">
                                                    <label class="form-label">Graphic Card</label>
                                                    <input name="card" class="form-control" value="{{ $asset->card }}"
                                                           placeholder="Enter Graphic Card">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop', 'pc']) || ($asset->type== 'accessory' && $asset->acc_type == 'printer'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc printer cpu">
                                                    <label class="form-label">IP Address</label>
                                                    <input name="ip_address" class="form-control"
                                                           value="{{ $asset->ip_address }}"
                                                           placeholder="Enter IP Address">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']) || ($asset->type== 'accessory' && $asset->acc_type == 'printer'))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc printer cpu">
                                                    <label class="form-label">MAC Address</label>
                                                    <input name="mac_address" class="form-control"
                                                           value="{{ $asset->mac_address }}"
                                                           placeholder="Enter MAC Address">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','laptop','pc']))
                                                <div class="col-lg-4 mb-3 all all_in_one laptop pc">
                                                    <label class="form-label">Password/PIN</label>
                                                    <input name="password" class="form-control"
                                                           value="{{ $asset->password }}"
                                                           placeholder="Enter Password/PIN">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','pc']))
                                                <div class="col-lg-4 mb-3 all all_in_one pc">
                                                    <label class="form-label">Cable</label>
                                                    <input name="cable" class="form-control" value="{{ $asset->cable }}"
                                                           placeholder="Enter Cable">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'lcd'))
                                                <div class="col-lg-4 mb-3 all all_in_one pc sub_acc lcd">
                                                    <label class="form-label">LCD Model</label>
                                                    <input name="lcd_model" class="form-control"
                                                           value="{{ $asset->lcd_model }}"
                                                           placeholder="Enter LCD Model">
                                                </div>
                                            @endif
                                            @if(in_array($asset->type,['all_in_one','pc']) || ($asset->type == 'accessory' && $asset->acc_type == 'lcd'))
                                                <div class="col-lg-4 mb-3 all all_in_one pc sub_acc lcd">
                                                    <label class="form-label">LCD Size (In Inches)</label>
                                                    <input name="lcd_size" class="form-control"
                                                           value="{{ $asset->lcd_size }}" placeholder="Enter LCD Size">
                                                </div>
                                            @endif
                                            @if($asset->type == 'accessory' && $asset->acc_type == 'printer')
                                                <div class="col-lg-4 mb-3 all sub_acc printer">
                                                    <label class="form-label">Printer Type</label>
                                                    <select name="printer_type" class="form-select">
                                                        <option value="">--Select Type--</option>
                                                        <option value="laser">Laser Printer</option>
                                                        <option value="black">Black Printer</option>
                                                    </select>
                                                </div>
                                            @endif
                                            @if($asset->type == 'accessory' && in_array($asset->acc_type,['keyboard','mouse','printer','headphone']))
                                                <div class="col-lg-4 mb-3 all sub_acc keyboard mouse printer headphone">
                                                    <label class="form-label">Brand</label>
                                                    <input name="acc_brand" class="form-control"
                                                           value="{{ $asset->acc_brand }}" placeholder="Enter Brand">
                                                </div>
                                            @endif
                                            @if($asset->type == 'accessory' && in_array($asset->acc_type,['keyboard','mouse','printer','headphone']))
                                                <div class="col-lg-4 mb-3 all sub_acc keyboard mouse printer headphone">
                                                    <label class="form-label">Model</label>
                                                    <input name="acc_model" class="form-control"
                                                           value="{{ $asset->acc_model }}" placeholder="Enter Model">
                                                </div>
                                            @endif
                                            @if($asset->type == 'accessory' && in_array($asset->acc_type,['keyboard','mouse','printer','headphone']))
                                                <div class="col-lg-4 mb-3 all sub_acc keyboard mouse printer headphone">
                                                    <label class="form-label">Serial No</label>
                                                    <input name="acc_sr_no" class="form-control"
                                                           value="{{ $asset->acc_sr_no }}"
                                                           placeholder="Enter Serial No">
                                                </div>
                                            @endif
                                            @if($asset->type == 'accessory')
                                                <div
                                                    class="col-lg-4 mb-3 all sub_acc ram cpu ssd hdd card keyboard mouse printer headphone">
                                                    <label class="form-label">No of Accessories</label>
                                                    <input name="acc_count" class="form-control"
                                                           value="{{ $asset->acc_count }}"
                                                           placeholder="Enter Number of Accessories">
                                                </div>
                                            @endif
                                        </div>

                                        @if(in_array($asset->type,['all_in_one','pc']))
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="mouse"
                                                           id="is_mouse" @if($asset->mouse) checked @endif>
                                                    <label class="form-check-label form-label" for="is_mouse">Mouse
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Mouse Brand</label>
                                                <input type="text" name="mouse_brand" class="form-control"
                                                       placeholder="Enter Mouse Brand" value="{{ $asset->mouse_brand }}">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Mouse Model</label>
                                                <input type="text" name="mouse_model" class="form-control"
                                                       placeholder="Enter Mouse Model" value="{{ $asset->mouse_model }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="keyboard"
                                                           id="is_keyboard" @if($asset->keyboard) checked @endif>
                                                    <label class="form-check-label form-label" for="is_keyboard">Keyboard
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Keyboard Brand</label>
                                                <input type="text" name="keyboard_brand" class="form-control"
                                                       placeholder="Enter Keyboard Brand" value="{{ $asset->keyboard_brand }}">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Keyboard Model</label>
                                                <input type="text" name="keyboard_model" class="form-control"
                                                       placeholder="Enter Keyboard Model" value="{{ $asset->keyboard_model }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="printer"
                                                           id="is_printer" @if($asset->printer) checked @endif>
                                                    <label class="form-check-label form-label" for="is_printer">Printer
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Printer Brand</label>
                                                <input type="text" name="printer_brand" class="form-control"
                                                       placeholder="Enter Printer Brand" value="{{ $asset->printer_brand }}">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Printer Model</label>
                                                <input type="text" name="printer_model" class="form-control"
                                                       placeholder="Enter Printer Model" value="{{ $asset->printer_model }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="scanner"
                                                           id="is_scanner" @if($asset->scanner) checked @endif>
                                                    <label class="form-check-label form-label" for="is_scanner">Scanner
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Scanner Brand</label>
                                                <input type="text" name="scanner_brand" class="form-control"
                                                       placeholder="Enter Scanner Brand" value="{{ $asset->scanner_brand }}">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Scanner Model</label>
                                                <input type="text" name="scanner_model" class="form-control"
                                                       placeholder="Enter Scanner Model" value="{{ $asset->scanner_model }}">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            // $('.content_show').hide()
            $('select[name="type"]').change(function () {
                var type = $(this).val();
                $('.content_show').show()
                $('.all').hide()
                $('.' + type).show()
            })
            $('select[name="acc_type"]').change(function () {
                var type = $(this).val();
                $('.all').hide()
                $(this).show()
                $('.' + type).show()
            })
            $('#createAsset').submit(function (e) {
                e.preventDefault()
                var data = $(this).serialize()
                var url = $(this).attr('action')
                var type = $(this).attr('method')
                $.ajax({
                    type: type,
                    url: url,
                    data: data,
                    success: function (data) {
                        message(data.message, data.status)
                        if (data.status == 'success') {
                            setTimeout(function () {
                                window.location.href = "{{route('assets.index')}}";
                            }, 2000)
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        message(errorThrown, 'error')
                    }
                });
            })
        })

        function hideOrShow(hide, show) {
            $('.' + hide).hide()
            $('.' + show).show()
        }
    </script>
@endsection
