@extends('layout.endbase')

@section('title','Add Category')


@section('content')

    <div id="content-wrapper">
        <div id="content-fluid">
            <div class="content-wrapper" style="">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="margin-left: 15px">Restaurant</h2>
                            <div class="col-md-6">
                                <h3>Category Elements</h3>
                                <form role="form" action="{{route('admin.restaurant.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf


                                    <div>
                                        <label for="Text Input">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="name"
                                               required>

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputFile">logo</label>

                                        <input type="file" class="custom-file-input" name="logo">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image
                                            file</label>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>

                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image
                                            file</label>
                                    </div>


                                    <div class="form-group">
                                        <label for="Text Input">Description</label>
                                        <input type="text" class="form-control" name="description"
                                               placeholder="Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="Text Input">phone</label>
                                        <input type="text" class="form-control" name="phone"
                                               placeholder="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="Text Input">about</label>
                                        <input type="text" class="form-control" name="about"
                                               placeholder="about">
                                    </div>
                                    <div class="form-group">
                                        <label for="Text Input">whatsapp</label>
                                        <input type="text" class="form-control" name="whatsapp"
                                               placeholder="whatsapp">
                                    </div>
                                    <div class="form-group">
                                        <label for="Text Input">instagram</label>
                                        <input type="text" class="form-control" name="instagram"
                                               placeholder="instagram">
                                    </div>
                                    <div class="form-group">
                                        <label for="Text Input">location</label>
                                        <input type="text" class="form-control" name="location"
                                               placeholder="location">
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

@endsection
