@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Member</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Member list</a></li>
                    <li class="breadcrumb-item active">Edit Member</li>
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
                            <h3 class="card-title">Edit Member - {{ $member->name }}</h3>
                            <a href="{{ route('member.index') }}" class="btn btn-primary">Go Back to Member List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Member name</label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter member name" value="{{$member->name}} ">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Designation</label>
                                            <input type="name" name="designation" class="form-control" id="designation" placeholder="Enter designation" value="{{$member->designation}} ">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                  <div class="form-group">
                                                     <label for="image">Image</label>
                                                     <input type="file" name="image" class="form-control-file" id="image"  />
                                                 </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="{{ asset($member->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Facebook</label>
                                            <input type="name" name="facebook" class="form-control" id="facebook" placeholder="Enter facebook profile link" value="{{$member->facebook}} ">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Twitter</label>
                                            <input type="name" name="twitter" class="form-control" id="twitter" placeholder="Enter twitter profile link" value="{{$member->twitter}} ">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Linkdin</label>
                                            <input type="name" name="linkedIn" class="form-control" id="linkedIn" placeholder="Enter linkedIn profile link" value="{{$member->linkedIn}} ">
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Member</button>
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