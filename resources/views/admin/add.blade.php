@extends('layouts.master')
@section('title')
    List Image
@endsection
@section('content')
    <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>image</th>
                                        <th>name</th>
                                        <th>create day</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($listimage as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->image}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>  <button type="button" class="btn btn-success btn-sm">Edit</button></td>
                                        <td>  <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection

@section('scripts')
@endsection
