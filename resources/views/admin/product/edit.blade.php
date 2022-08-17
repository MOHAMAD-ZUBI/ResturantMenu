@extends('layout.endbase')

@section('title','Edit Product :'.$data->title)
@section('head')
@endsection

@section('content')

    <div class="content-wrapper">
        <div id="page-inner">
            <div class="row">

                <div class="col-md-12">
                    <h2>Edit Product: {{$data->title}}</h2>
                    <div class="col-md-6">
                        <h3>Product Elements</h3>
                        <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label>Parent Product</label>

                                <select class="form-control select2" name="category_id" style="">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id }}"
                                                @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                                <label for="Text Input">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>

                            <div class="form-group">
                                <label for="Text Input">Price</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="description"
                                       value="{{$data->description}}">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>

                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Detail Info</label>
                                <textarea class="form-control" id="detail" name="detail">
                                    {{$data->detail}}
                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#detail'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                            </div>


                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <div class="footer">
                                <button type="submit" class="btn btn-primary">Update Data</button>

                            </div>


                        </form>

                    </div>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection

