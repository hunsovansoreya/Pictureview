@extends('layouts.master')
@section('title')
    User Roles
@endsection
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update</strong> Form
                        </div>
                        <div class="card-body card-block">
                        <form action="/roleupdate{{$users->id}}" method="post" class="form-inline">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label for="exampleInputName2" class="pr-1  form-control-label">Name</label>
                                <input type="text" id="exampleInputName2" name="name" value="{{$users->name}}" required="" class="form-control">
                                </div>
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <div class="rs-select2--trans rs-select2--sm">
                                    <select class="js-select2" name="usertype">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <a href="/userroles" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Cancel
                            </a>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- END MAIN CONTENT-->
@endsection

@section('scripts')
@endsection
