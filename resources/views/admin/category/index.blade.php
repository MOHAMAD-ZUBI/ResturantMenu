@extends('layout.endbase')

@section('title','Category List')


@section('content')
    <link rel="stylesheet" href="{{asset('assets')}}/admin/dist/css/table.css"/>
    <div id="content-wrapper">
        <div id="content-fluid">
            <nav id="breadcrumb">
                <ul>
                    <li id="breadcrumb-item"><a href="#" class="active-breadcrumb">Dashboard</a></li>
                    <li id="breadcrumb-item"><a href="#">Categories</a></li>
                </ul>
            </nav>
            <div id="page-inner" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-2" style="margin-left: 25px">
                        <a href="{{route('admin.category.create')}}" class="btn btn-block btn-info">Add Category</a>

                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <div class="box-header">
                                <h3 class="box-title">Category List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table class="table" style="border-color: #0C0C0C">
                                    <tbody>
                                    <tr>
                                        <th style="width: 10px">Id</th>
                                        <th>Parent</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                        <th style="width: 40px">Show</th>

                                    </tr>

                                    @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{\App\Http\Controllers\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if ($rs->image)
                                                    <a href="{{Storage::url($rs->image)}}" class="view overlay"><img
                                                            src="{{Storage::url($rs->image)}}"
                                                            style="height: 60px"></a>
                                                @endif
                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"
                                                   class="btn btn-info">Edit</a></td>
                                            <td><a href="{{route('admin.category.delete',['id'=>$rs->id])}}"
                                                   class="btn  btn-danger btn-sm"
                                                   onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                                            <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"
                                                   class="btn btn-success btn-sm">Show</a></td>

                                        </tr>

                                    @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <hr/>

                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->

@endsection
