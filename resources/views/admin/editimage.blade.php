@extends('layouts.master')
@section('title')
    Edit Form
@endsection
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong> Edit Form</strong>
            </div>
            <div class="card-body card-block">
            <form action="{{ route('admin.update', $image->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal" >
                    @csrf
                    {{@method_field(patch)}}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Name Image" class="form-control" value="{{$image->name}}">
                            <small class="form-text text-muted">This is a help text name image</small>
                        </div>
                    </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">File Image</label>
                        </div>
                        <label for="avatar{{$errors->has('image')?' has-error':''}}">
                                            <img id="image-uploading" src="{{url('img', $image->image)}}" width="200" height="300" alt="productImg">
                                            <span class="text-danger">
                                            <input id="avatar" name="image" type="file" accept="image/gif, image/jpeg, image/png">
                                            {{$errors->first('image')}}
                                        </span>
                                        </label>
                    </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Update
                </button>
            <a href="{{url('listimage')}}" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Back
                </a>
            </div>
            </form>
        </div>

    <!-- END MAIN CONTENT-->
@endsection

@section('scripts')
@endsection
