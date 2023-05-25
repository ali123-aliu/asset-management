@extends('admin.layouts.app')
@section('title','Create Brand')
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Brand</a></li>
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create New Brand</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="{{route('brands.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-types-preview">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Name</label>
                                                <input name="name" class="form-control" required>
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
        $(document).ready(function(){
        })
    </script>
@endsection
