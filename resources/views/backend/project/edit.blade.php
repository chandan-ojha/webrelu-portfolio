@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Project</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Project list</a></li>
                    <li class="breadcrumb-item active">Edit Project</li>
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
                            <h3 class="card-title">Edit Project - {{ $project->name }}</h3>
                            <a href="{{ route('project.index') }}" class="btn btn-primary">Go Back to Project List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('project.update', [$project->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('includes.errors')
                                        <div class="form-group">
                                            <label for="name">Project Title</label>
                                            <input type="name" name="title" value="{{ $project->title }}" class="form-control" id="title" placeholder="Enter Title [title max 20 characters]">
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Project Category</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" style="display: none" selected>Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                @if($project->category_id == $category->id) selected @endif> {{ $category->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Short Description</label>
                                            <textarea name="short_description" id="short_description" rows="4" class="form-control"
                                                placeholder="Enter short description [description max 55 characters]">{{ $project->short_description }}</textarea>
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
                                                        <img src="{{ asset($project->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Project Link</label>
                                            <input type="name" name="project_link" value="{{ $project->project_link }}" class="form-control" id="project_link" placeholder="Enter Project link">
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Project</button>
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
