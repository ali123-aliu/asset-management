@extends('admin.layouts.app')
@section('title','All in One')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">All in One</li>
                            </ol>
                        </div>
                        <h4 class="page-title">All in One</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-sm-8"><h3 class="card-title">All in One</h3></div>
                                {{--<div class="col-sm-4" style="text-align: right">
                                    <a href="{{route('assets.create')}}" class="btn btn-success rounded-pill mb-3"><i class="mdi mdi-plus"></i> Create System</a>
                                </div>--}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="striped-rows-preview">
                                    <div class="table-responsive-sm">
                                        <table class="table text-center table-striped table-centered mb-0">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Brand</th>
                                                <th>LCD</th>
                                                <th>RAM</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($assets as $data)
{{--                                                @dd($data)--}}
                                                <tr>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{str_replace('_',' ',strtoupper($data->type))}}</td>
                                                    <td>{{$data->brand->name}}</td>
                                                    <td>{{$data->lcd_model}}</td>
                                                    <td>{{$data->ram}} GB</td>
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
