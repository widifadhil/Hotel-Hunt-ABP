@extends('layouts.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">                    
                    <table class="table table-bordered">
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td>{{$data->fullname}}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>{{$data->username}}</td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td><img src="{{asset('uplimg/imghotel/'. $data->photo) }}" width="100px" height="100px"
                                        alt=""></td>
                            {{-- <td>{{$data->photo}}</td> --}}
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
