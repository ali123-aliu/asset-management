@extends('admin.layouts.app')
@section('title','Create Asset')
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Assets</a></li>
                                <li class="breadcrumb-item active">Create Asset</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create New Asset</h4>
                    </div>
                </div>
            </div>
            <form id="createAsset" action="{{route('assets.store')}}" method="post">
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
                                                <select name="type" class="form-select" required>
                                                    <option value="">--Select Type--</option>
                                                    <option value="all_in_one"
                                                            @if(old('type') == 'all_in_one') selected @endif >All in One
                                                    </option>
                                                    <option value="laptop"
                                                            @if(old('type') == 'laptop') selected @endif >Laptop
                                                    </option>
                                                    <option value="pc" @if(old('type') == 'pc') selected @endif >PC
                                                    </option>
                                                    <option value="accessory"
                                                            @if(old('type') == 'accessory') selected @endif >Accessories
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">User</label>
                                                <input name="user" class="form-control" placeholder="Enter User">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Department</label>
                                                <input name="department" class="form-control" placeholder="Enter Department">
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
                                            <div
                                                class="col-lg-4 mb-3 all accessory ram cpu ssd hdd card keyboard mouse lcd printer headphone">
                                                <label class="form-label">Accessories</label>
                                                <select name="acc_type" class="form-select">
                                                    <option value="">--Select Accessories--</option>
                                                    <option value="ram">RAM</option>
                                                    <option value="ssd">SSD</option>
                                                    <option value="hdd">HDD</option>
                                                    <option value="cpu">CPU</option>
                                                    <option value="card">Graphic Card</option>
                                                    <option value="keyboard">Keyboard</option>
                                                    <option value="mouse">Mouse</option>
                                                    <option value="lcd">LCD</option>
                                                    <option value="headphone">Headphone</option>
                                                    <option value="printer">Printer</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc">
                                                <label class="form-label">Brand</label>
                                                <select name="brand_id" class="form-select">
                                                    <option value="">--Select Brand--</option>
                                                    @foreach($brands as $data)
                                                        <option value="{{$data->id}}"
                                                                @if(old('brand_id') == $data->id) selected @endif >{{$data->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc">
                                                <label class="form-label">Brand Detail</label>
                                                <input type="text" name="brand_detail" class="form-control">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc ram">
                                                <label class="form-label">RAM (GB)</label>
                                                <input type="number" name="ram" class="form-control"
                                                       value="{{ old('ram') }}" placeholder="Enter RAM Size">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc cpu">
                                                <label class="form-label">CPU</label>
                                                <input type="text" name="cpu" class="form-control"
                                                       value="{{ old('cpu') }}" placeholder="Enter CPU">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc ssd">
                                                <label class="form-label">SSD</label>
                                                <input type="text" name="ssd" class="form-control"
                                                       value="{{ old('ssd') }}" placeholder="Enter SSD Size">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc hdd">
                                                <label class="form-label">HDD</label>
                                                <input type="text" name="hdd" class="form-control"
                                                       value="{{ old('hdd') }}" placeholder="Enter HDD Size">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc card">
                                                <label class="form-label">Graphic Card</label>
                                                <input type="text" name="card" class="form-control"
                                                       value="{{ old('card') }}" placeholder="Enter Graphic Card">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc laptop sub_acc printer cpu">
                                                <label class="form-label">IP Address</label>
                                                <input type="text" name="ip_address" class="form-control"
                                                       value="{{ old('ip_address') }}" placeholder="Enter IP Address">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc sub_acc printer cpu">
                                                <label class="form-label">MAC Address</label>
                                                <input type="text" name="mac_address" class="form-control"
                                                       value="{{ old('mac_address') }}" placeholder="Enter MAC Address">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one laptop pc">
                                                <label class="form-label">Password/PIN</label>
                                                <input type="text" name="password" class="form-control"
                                                       value="{{ old('password') }}" placeholder="Enter Password/PIN">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Cable</label>
                                                <input type="text" name="cable" class="form-control"
                                                       value="{{ old('cable') }}" placeholder="Enter Cable">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one sub_acc lcd pc">
                                                <label class="form-label">LCD Model</label>
                                                <input type="text" name="lcd_model" class="form-control"
                                                       value="{{ old('lcd_model') }}" placeholder="Enter LCD Model">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one sub_acc lcd pc">
                                                <label class="form-label">LCD Size (In Inches)</label>
                                                <input type="text" name="lcd_size" class="form-control"
                                                       value="{{ old('lcd_size') }}" placeholder="Enter LCD Size">
                                            </div>
                                            <div class="col-lg-4 mb-3 all sub_acc printer">
                                                <label class="form-label">Printer Type</label>
                                                <select name="printer_type" class="form-select">
                                                    <option value="">--Select Type--</option>
                                                    <option value="laser">Laser Printer</option>
                                                    <option value="black">Black Printer</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 mb-3 all sub_acc keyboard mouse printer headphone">
                                                <label class="form-label">Brand</label>
                                                <input type="text" name="acc_brand" class="form-control"
                                                       value="{{ old('acc_brand') }}" placeholder="Enter Brand">
                                            </div>
                                            <div class="col-lg-4 mb-3 all sub_acc keyboard mouse printer headphone">
                                                <label class="form-label">Model</label>
                                                <input type="text" name="acc_model" class="form-control"
                                                       value="{{ old('acc_model') }}" placeholder="Enter Model">
                                            </div>
                                            <div class="col-lg-4 mb-3 all sub_acc keyboard mouse printer headphone">
                                                <label class="form-label">Serial No</label>
                                                <input type="text" name="acc_sr_no" class="form-control"
                                                       value="{{ old('acc_sr_no') }}" placeholder="Serial No">
                                            </div>
                                            <div
                                                class="col-lg-4 mb-3 all sub_acc ram cpu ssd hdd card keyboard mouse printer headphone">
                                                <label class="form-label">No of Accessories</label>
                                                <input type="number" name="acc_count" class="form-control"
                                                       value="{{ old('acc_count',1) }}"
                                                       placeholder="Enter Number of Accessories">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="mouse"
                                                           id="is_mouse">
                                                    <label class="form-check-label form-label" for="is_mouse">Mouse
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Mouse Brand</label>
                                                <input type="text" name="mouse_brand" class="form-control"
                                                       value="{{ old('mouse_brand') }}" placeholder="Enter Mouse Brand">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Mouse Model</label>
                                                <input type="text" name="mouse_model" class="form-control"
                                                       value="{{ old('mouse_model') }}" placeholder="Enter Mouse Model">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="keyboard"
                                                           id="is_keyboard">
                                                    <label class="form-check-label form-label" for="is_keyboard">Keyboard
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Keyboard Brand</label>
                                                <input type="text" name="keyboard_brand" class="form-control"
                                                       value="{{ old('keyboard_brand') }}" placeholder="Enter Keyboard Brand">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Keyboard Model</label>
                                                <input type="text" name="keyboard_model" class="form-control"
                                                       value="{{ old('keyboard_model') }}" placeholder="Enter Keyboard Model">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="printer"
                                                           id="is_printer">
                                                    <label class="form-check-label form-label" for="is_printer">Printer
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Printer Brand</label>
                                                <input type="text" name="printer_brand" class="form-control"
                                                       value="{{ old('printer_brand') }}" placeholder="Enter Printer Brand">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Printer Model</label>
                                                <input type="text" name="printer_model" class="form-control"
                                                       value="{{ old('printer_model') }}" placeholder="Enter Printer Model">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mt-3 all all_in_one pc">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="scanner"
                                                           id="is_scanner">
                                                    <label class="form-check-label form-label" for="is_scanner">Scanner
                                                        ?</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Scanner Brand</label>
                                                <input type="text" name="scanner_brand" class="form-control"
                                                       value="{{ old('scanner_brand') }}" placeholder="Enter Scanner Brand">
                                            </div>
                                            <div class="col-lg-4 mb-3 all all_in_one pc">
                                                <label class="form-label">Scanner Model</label>
                                                <input type="text" name="scanner_model" class="form-control"
                                                       value="{{ old('scanner_model') }}" placeholder="Enter Scanner Model">
                                            </div>
                                        </div>
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
            $('.content_show').hide()
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
