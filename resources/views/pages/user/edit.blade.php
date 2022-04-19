@extends('layouts.adminlayout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit User
                    <a href="{{ url('admin/user') }}" class="float-right btn btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                {{-- @if (session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif --}}
                <div class="table-responsive">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                    @if (Session::has('success'))
                        <p class="text-success"> {{session('success')}}</p>
                    @endif
                    <form method="post" enctype="multipart/form-data" action="{{ url('admin/user/'.$data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>Email <span class="text-danger">*</span></td>
                                <td><input value="{{$data->email}}" name="email" type="email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Full Name<span class="text-danger">*</span></td>
                                <td><input value="{{$data->name}}"name="full_name" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input value="{{$data->username}}"name="username" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Mobile<span class="text-danger">*</span></td>
                                <td><input value="{{$data->mobile}}"name="mobile" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <textarea value="" name="address" class="form-control" id="" cols="30" rows="10">{{$data->address}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td><input name="photo" type="file">
                                    <img width="100" src="{{asset('storage/app'.$data->photo)}}" />
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary btn-lg" style="width: 100%">
                                </td>

                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
