@extends('layouts.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('admin/roomtype') }}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        {{-- <tr>
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td>{{$data->detail}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                        </tr> --}}
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Price</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->detail }}</td>
                                <td>{{ $data->price }}</td>
                                <td>
                                    <img src="{{ asset('uplimg/imghotel/' . $data->photo) }}" width="100px" height="100px"
                                        alt="">
                                </td>
                            </tr>

                        </tbody>
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
