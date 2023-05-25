@extends('admin.layouts.app')
@section('title','Assets')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Assets</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Assets</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-sm-8"><h3 class="card-title">Assets</h3></div>
                                <div class="col-sm-4" style="text-align: right">
                                    <a href="{{route('assets.create')}}" class="btn btn-success rounded-pill mb-3"><i class="mdi mdi-plus"></i> Create Asset</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="striped-rows-preview">
                                    <div class="table-responsive-sm">
                                        <table id="basic-datatable" class="table text-center table-striped table-centered mb-0">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>Asset</th>
                                                <th>User</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Department/Table</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($assets as $data)
                                                <?php $type = $data->type == 'accessory' ? $data->acc_type : $data->type; ?>
                                                <tr>
                                                    <td>{{str_replace('_',' ',strtoupper($type))}}</td>
                                                    <td>{{$data->user}}</td>
                                                    <td>{{@$data->brand->name}}</td>
                                                    <td>{{$data->brand_detail}}</td>
                                                    <td>{{$data->department}}</td>
                                                    <td class="table-action">
                                                        <a href="{{route('assets.edit',$data->id)}}" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                        <a href="#" data-url="{{route('assets.destroy',$data->id)}}" class="action-icon deleteBtn" data-token="{{csrf_token()}}"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
        })
    </script>
@endsection
