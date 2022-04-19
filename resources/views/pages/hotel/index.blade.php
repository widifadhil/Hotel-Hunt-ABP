@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hotels
                    <a href="{{ url('admin/hotel/create') }}" class="float-right btn btn-success btn-sm">Add New</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Bintang</th>
                                <th>Fasilitas</th>
                                <th>Galery Images</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Bintang</th>
                                <th>Fasilitas</th>
                                <th>Galery Images</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @if ($data)
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->title }}</td>
                                        <td>{{ $d->price }}</td>
                                        <td>{{ $d->bintang }}</td>
                                        <td>{{ $d->fasilitas }}</td>
                                        <td>{{ count($d->hotelimgs) }}</td>
                                        <td>
                                            <a href="{{ url('admin/hotel/' . $d->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('admin/hotel/' . $d->id) . '/edit' }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Are you sure to delete this data?')"
                                                href="{{ url('admin/hotel/' . $d->id) . '/delete' }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i></a>
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

@section('scripts')
    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
@endsection
@endsection
