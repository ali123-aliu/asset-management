@extends('admin.layouts.app')
@section('title','Systems')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Systems</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Systems</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-sm-8"><h3 class="card-title">Systems</h3></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="striped-rows-preview">
                                    <div class="table-responsive-sm">
                                        <table class="table text-center table-striped table-centered mb-0">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>Brand</th>
                                                <th>RAM</th>
                                                <th>CPU</th>
                                                <th>SSD</th>
                                                <th>HDD</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($assets as $data)
                                                <tr>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{str_replace('_',' ',strtoupper($data->type))}}</td>
                                                    <td>{{@$data->brand->name}}</td>
                                                    <td>{{$data->lcd_model}}</td>
                                                    <td class="table-action">
                                                        <a href="{{route('assets.edit',$data->id)}}" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                        <a href="{{route('assets.destroy',$data->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
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
