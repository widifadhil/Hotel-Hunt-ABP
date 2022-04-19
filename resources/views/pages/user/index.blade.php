@extends('layouts.adminlayout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Users Table
                    <a href="{{ url('admin/user/create') }}" class="float-right btn btn-primary btn-sm"> Add New Users
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @if ($data)
                                @foreach ($data as $d)
                                <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->mobile}}</td>
                                <td><a href="{{url('admin/user/'.$d->id)}}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{url('admin/user/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Edit</a>
                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('admin/user/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                                @endforeach
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@section('scripts')
    <script src="/js/sb-admin-2.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
<!-- Custom scripts for all pages-->


@endsection
