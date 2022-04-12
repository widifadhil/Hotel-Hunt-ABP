@extends('layouts.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Customer
                    <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif


                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{ url('admin/customer/'.$data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Email <span class="text-danger">*</span></th>
                                <td><input value="{{$data->email}}" name="email" type="email" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Fullname <span class="text-danger">*</span></th>
                                <td><input value="{{$data->fullname}}" name="fullname" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Username <span class="text-danger">*</span></th>
                                <td><input value="{{$data->username}}" name="username" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><input name="photo" type="file" />
                                    <input type="hidden" name="prev_photo" value="{{$data->photo}}" />
                                    <img width="100" src="{{asset('storage/app/'.$data->photo)}}"/>
                                </td>
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
