@extends('layouts.master') @section('title') List Image @endsection @section('content')
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
                                    <input type="hidden" class="serdelete_val" value="{{$data->id}}">

                                   
                                    <td>{{$i ?? ''}}</td>
                                    <td>`
                                        <img src={{url('img', $data->image)}} alt=image width="80">
                                    </td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td><a href="{{url('editimage/'. $data->id)}}" class="btn btn-success btn-sm">Edit</a></td>
                                    <td>
                                        <form action="/deleteimage/{{$data->id}}" method="post">
                                            {{csrf_field()}} {{method_field('Delete') }}
                                            <button type="submit" class="btn btn-danger btn-sm deletebn">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-5">
                 </div>
                <div class="col-lg-7">
                {{ $listimage->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('scripts')

<script>
   $(document).ready(function () {

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});




       $('.deletebn').click(function (e) {
           e.preventDefault();
           var delete_id = $(this).closest("tr").find('.serdelete_val').val();
        //    alert(delete_id)
           swal({
                   title: "Are you sure?",
                   text: "Once deleted, you will not be able to recover this Data!",
                   icon: "warning",
                   buttons: true,
                   dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var data ={
                        "_token": $('input[name=_token]').val(),
                        "id": delete_id,
                    };
                   $.ajax({
                       type: "DELETE",
                       url: '/service_delete/'+delete_id,
                       data: data,
                       success: function (response) {

                    swal(response.status, {
                    icon: "success",
                    })

            .then((result) => {
                location.reload();

            });

                       }
                   });


                }
            });
       });
   });
</script>
@endsection
