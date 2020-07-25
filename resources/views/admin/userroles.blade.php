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
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">User Data</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select2" name="time">
                                        <option selected="selected">Today</option>
                                        <option value="">3 Days</option>
                                        <option value="">1 Week</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>user type</th>
                                    <th>date</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $row)
                                <tr class="tr-shadow">
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>
                                        {{$row->phone}}
                                    </td>
                                    <td>
                                        <span class="block-email">{{$row->email}}</span>
                                    </td>
                                    <td>{{$row->usertype}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                        <div class="table-data-feature">

                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="/editrole/{{$row->id}}">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <form action="/deleterole/{{$row->id}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('Delete') }}
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">

                    </div>
                    <div class="col-md-7">
                         {{$users->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- END MAIN CONTENT-->
@endsection

