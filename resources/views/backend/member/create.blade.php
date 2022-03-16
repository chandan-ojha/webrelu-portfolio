@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Member</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Member List</a></li>
                    <li class="breadcrumb-item active">Create Member</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Create Member</h3>
                            <a href="{{ route('member.index') }}" class="btn btn-primary">Go Back to Member List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Member name</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Designation</label>
                                            <input type="name" name="designation" class="form-control" id="designation" placeholder="Enter designation">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control-file" id="image"  />
                                       </div>

                                        <div class="form-group">
                                            <label for="name">Facebook</label>
                                            <input type="name" name="facebook" class="form-control" id="facebook" placeholder="Enter facebook profile link">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Twitter</label>
                                            <input type="name" name="twitter" class="form-control" id="twitter" placeholder="Enter twitter profile link">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Linkdin</label>
                                            <input type="name" name="linkedIn" class="form-control" id="linkedIn" placeholder="Enter linkdin profile link">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
