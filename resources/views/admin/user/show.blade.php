@extends('layout.endbase')

@section('title', 'User Detail : '. $data->title )

@section('content')

    <div class="content-wrapper">

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:red"> Detail User Data</div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th style="width: 200px">Id</th>
                                                        <td>{{$data->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Name & surname</th>
                                                        <td>{{$data->name}}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{$data->email}}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Role</th>
                                                        <td>
                                                            @foreach($data->roles as $role)
                                                                {{$role->name}}
                                                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, 'rid'=>$role->id])}}"
                                                                   onclick="return confirm('DELETING!! ARE YOU SURE??')"
                                                                   class="btn btn-danger ">[x]</a>

                                                            @endforeach</td>
                                                    </tr>


                                                    <tr>
                                                        <th>Created Date</th>
                                                        <td>{{$data->created_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Update Date</th>
                                                        <td>{{$data->updated_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Add Role TO User</th>
                                                        <td>

                                                            <form role="form"
                                                                  action="{{route('admin.user.addrole',['id'=>$data->id])}}"
                                                                  method="post">
                                                                @csrf

                                                                <select name="role_id">
                                                                    @foreach($roles as $role)
                                                                        <option
                                                                            value="{{$role->id}}">{{$role->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <button type="submit" class="btn btn-default">Add Role
                                                                </button>
                                                                <button type="reset" class="btn btn-primary">Reset
                                                                </button>

                                                            </form>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

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
