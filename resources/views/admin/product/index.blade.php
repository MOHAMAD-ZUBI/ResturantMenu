@extends('layout.endbase')

@section('title','Product List')


@section('content')
    <div id="content-wrapper">
        <div id="content-fluid">
            <nav id="breadcrumb">
                <ul>
                    <li id="breadcrumb-item"><a href="{{route('admin.index')}}" class="active-breadcrumb">Dashboard</a>
                    </li>
                    <li id="breadcrumb-item"><a href="#">Products</a></li>
                </ul>
            </nav>
            <div class="content-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{route('admin.product.create')}}" class="btn btn-primary ">Add Product</a>

                        </div>
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="box-header">
                                    <h3 class="box-title"
                                        style="margin-left: 700px; margin-bottom: 20px; color: white;">
                                        Product
                                        List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Edit</th>
                                            <th style="width: 40px">Delete</th>
                                            <th style="width: 40px">Show</th>

                                        </tr>

                                        @foreach($data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{\App\Http\Controllers\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->keywords}}</td>

                                                <td>
                                                    @if ($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                    @endif
                                                </td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"
                                                       class="btn btn-info">Edit</a>
                                                </td>
                                                <td><a href="{{route('admin.product.delete',['id'=>$rs->id])}}"
                                                       class="btn  btn-danger btn-sm"
                                                       onclick="return confirm('Deleting!! Are you sure?')">Delete</a>
                                                </td>
                                                <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}"
                                                       class="btn btn-success btn-sm">Show</a></td>

                                            </tr>

                                        @endforeach
                                        </tbody>

                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <hr/>

                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
        </div>

@endsection
