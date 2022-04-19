@extends('layouts.adminlayout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Users
                    <a href="{{ url('admin/user') }}" class="float-right btn btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                {{-- @if (session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif --}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <td>Full Name</td>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>{{$data->username}}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{$data->mobile}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td><img width="100" src="{{asset('storage/app/public/imgs/'.$data->photo)}}" /></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
