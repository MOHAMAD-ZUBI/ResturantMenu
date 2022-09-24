@extends('layout.endbase')

@section('title','Show Category :'.$data->title)


@section('content')
    <div id="content-wrapper">
        <div id="content-fluid">
            <div class="container">
                <div id="page-inner">
                    <div class="row mb-lg-3">
                        <div class="box-header">
                            <div class="col-sm-5"><h3 class="box-title">Details</h3></div>

                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Title</th>
                                    <td>{{$data->title}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Price</th>
                                    <td>{{$data->keywords}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Description</th>
                                    <td>{{$data->description}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Image</th>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 40px">
                                        @endif
                                    </td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Status</th>
                                    <td>{{$data->status}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Created Date</th>
                                    <td>{{$data->created_at}}</td>

                                </tr>
                                <tr>
                                    <th style="width: 150px">Update Date</th>
                                    <td>{{$data->updated_at}}</td>

                                </tr>
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                    <!-- /. ROW  -->
                    <hr/>
                    <div class="col-sm-3">
                        <a href="{{route('admin.product.edit',['id'=>$data->id])}}"
                           class="btn btn-block btn-info">Edit</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.product.delete',['id'=>$data->id])}}" class="btn btn-block btn-danger"
                           onclick="return confirm('Deleting!! Are you sure?')">Delete</a>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
        </div>
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
