@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">View Project</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Project list</a></li>
                    <li class="breadcrumb-item active">View Project</li>
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
                            <h3 class="card-title">View Project</h3>
                            <a href="{{ route('project.index') }}" class="btn btn-primary">Go Back to Project List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-pimary">
                            <tbody>
                                <tr>
                                    <th style="width: 200px">Image</th>
                                    <td>
                                        <div style="max-width: 300px; max-height:300px;overflow:hidden">
                                            <img src="{{ asset($project->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Title</th>
                                    <td>{{ $project->title }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Category Name</th>
                                    <td>{{ $project->category->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Short Description</th>
                                    <td>{!! $project->short_description !!}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Project Link</th>
                                    <td>{{ $project->project_link }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection