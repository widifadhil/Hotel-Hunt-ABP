@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{$data->title}}
                    <a href="{{ url('admin/roomtype') }}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">

                        <tr>
                            <th>Hotel</th>
                            <td>{{$data->hotel->title}}</td>
                        </tr>    

                        <tr>
                            <th>Title</th>
                            <td>{{ $data->title }}</td>
                        </tr>
                        <tr>
                            <th>Bed Type</th>
                            <td>{{ $data->bed_type }}</td>
                        </tr>
                        <tr>
                            <th>Room size</th>
                            <td>{{ $data->room_size }} sqm</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{ $data->price }}</td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td>{{ $data->detail }}</td>
                        </tr> 
                        
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
