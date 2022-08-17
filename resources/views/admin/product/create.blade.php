@extends('layout.endbase')

@section('title','Add Product')
@section('head')
@endsection


@section('content')

    <div class="content-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Policlinic</h2>
                    <div class="col-md-6">
                        <h3>Product Elements</h3>
                        <form role="form" action="{{route('admin.product.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="category_id" style="">
                                    @foreach($data as $rs)
                                        <option
                                            value="{{ $rs->id }}">{{\App\Http\Controllers\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="Text Input">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Price</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Price">
                            </div>

                            <div class="form-group">
                                <label for="Text Input">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="description">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>

                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                            </div>


                            <div class="form-group">
                                <label for="Text Input">Detail Info</label>
                                <textarea class="form-control" id="detail" name="detail">

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
                                    <option>Enable</option>
                                    <option>Disable</option>
                                </select>
                            </div>


                            <div class="footer">
                                <button type="submit" class="btn btn-default">Save</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>

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
