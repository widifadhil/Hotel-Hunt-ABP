@extends('layouts-admin.layout-admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Customer
                    <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif


                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Email <span class="text-danger">*</span></th>
                                <td><input name="email" type="email" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Fullname <span class="text-danger">*</span></th>
                                <td><input name="fullname" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Username <span class="text-danger">*</span></th>
                                <td><input name="username" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Password <span class="text-danger">*</span></th>
                                <td><input name="password" type="password" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><input name="photo" type="file" /></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
@endsection


