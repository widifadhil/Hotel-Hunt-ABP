@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Room Type
                    <a href="{{ url('admin/roomtype') }}" class="float-right btn btn-success btn-sm">View All</a>
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
                    <form method="post" action="{{ url('admin/roomtype') }}">
                        @csrf
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
                                <td><input name="title" type="text" class="form-control" /></td>
                            </tr>                                                        
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea name="detail" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Bed Type</th>
                                <td>
                                    <select name="bed_type" id="" class="form-control">
                                        <option value="0">--- Select ---</option>
                                        <option value="Twin Bed">Twin Bed</option>
                                        <option value="Single Bed">Single Bed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Room Size</th>
                                <td>
                                    <input name="room_size" class="form-control" type="number" value=""/>
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
