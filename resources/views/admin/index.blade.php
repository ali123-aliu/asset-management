@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            {{--<form class="d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-light" id="dash-daterange">
                                    <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                </div>
                                <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                    <i class="mdi mdi-autorenew"></i>
                                </a>
                                <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                    <i class="mdi mdi-filter-variant"></i>
                                </a>
                            </form>--}}
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">All in One</h5>
                            <h3 class="mt-3 mb-3">{{$all_in_one}}</h3>
                            <p class="mb-0 text-muted">
{{--                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>--}}
                                <span class="text-nowrap">All in One</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">System</h5>
                            <h3 class="mt-3 mb-3">{{$systems}}</h3>
                            <p class="mb-0 text-muted">
{{--                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>--}}
                                <span class="text-nowrap">System</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Laptop</h5>
                            <h3 class="mt-3 mb-3">{{$laptop}}</h3>
                            <p class="mb-0 text-muted">
{{--                                <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>--}}
                                <span class="text-nowrap">Laptop</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">RAM</h4>
                            <h4 class="header-title">{{$total_ram}} GB</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-sm table-centered mb-0 font-14">
                                    <thead class="table-light">
                                    <tr>
                                        <th>RAM</th>
                                        <th>Number of RAMs</th>
                                        <th style="width: 40%;"></th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $val)
                                        @php
                                            $percent = (int)(($val['total']/$total_ram) * 100);
                                        @endphp
                                        <tr>
                                            <td>{{$key}} GB</td>
                                            <td>{{$val['count']}}</td>
                                            <td>{{$percent}}%
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: {{$percent}}%; height: 20px;" aria-valuenow="{{$percent}}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>{{$val['total']}} GB</td>
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
@endsection
