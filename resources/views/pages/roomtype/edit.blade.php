@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update {{$data->title}}
                    <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form enctype="multipart/form-data" method="post" , action="{{ url('admin/roomtype/'.$data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Select Hotel</th>
                                <td>
                                    <select name="hl_id" class="form-control">
                                        <option value="0">--- Select ---</option>
                                    @foreach ($hotels as $hl)
                                    <option value="{{$hl->id}}">{{$hl->title}}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th>Title</th>
                                <td><input value="{{$data->title}}" name="title" type="text" class="form-control" /></td>
                            </tr>                                                        
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea  name="detail" class="form-control">{{$data->detail}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Bed Type</th>
                                <td>
                                    <select name="bed_type" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="0">--- Select ---</option>
                                        <option value="Twin Bed">Twin Bed</option>
                                        <option value="Single Bed">Single Bed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Room Size</th>
                                <td>
                                    <input name="room_size" class="form-control" type="number" value="{{$data->room_size}}"/>
                                </td>
                            </tr>  
                            <tr>
                                <th>Price</th>
                                <td>
                                    <input name="price" type="number" class="form-control">
                                </td>
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
