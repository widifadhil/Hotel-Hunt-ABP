@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Hotel
                    <a href="{{ url('admin/hotel') }}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif


                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{ url('admin/hotel') }}">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input name="title" type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>
                                    <textarea name="detail" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Bintang</th>
                                <td><input name="bintang" type="number" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Fasilitas</th>
                                <td>
                                    <textarea name="fasilitas" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input name="price" type="number" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Galery Photo</th>
                                <td><input type="file" multiple name="imghotel[]" /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" />
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
