@extends('layouts.master')
@section('title')
    Add Image
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
                <strong>Add Image</strong>
            </div>
            <div class="card-body card-block">
                <form action="/addimage" method="post" enctype="multipart/form-data" class="form-horizontal" >
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="Name Image" class="form-control">
                            <small class="form-text text-muted">This is a help text name image</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">File Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="image" accept=".png, .jpg, .jpeg"  class="form-control-file">
                        </div>
                    </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Add
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
                </form>
        </div>

    <!-- END MAIN CONTENT-->
@endsection

@section('scripts')

@endsection
