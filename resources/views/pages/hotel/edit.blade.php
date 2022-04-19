@extends('layouts.adminlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update {{ $data->title }}
                    <a href="{{ url('admin/hotel') }}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form enctype="multipart/form-data" method="post" , action="{{ url('admin/hotel/' . $data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input value="{{ $data->title }}" name="title" type="text" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>
                                    <textarea name="detail" class="form-control">{{ $data->detail }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Bintang</th>
                                <td><input value="{{ $data->bintang }}" name="bintang" type="number"
                                        class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>fasilitas</th>
                                <td>
                                    <textarea name="fasilitas" class="form-control">{{ $data->fasilitas }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input value="{{ $data->price }}" name="price" type="number" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <th>Galery Images</th>
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <input type="file" multiple name="imghotel[]" />
                                            @foreach ($img as $img)
                                                <td class="imgcol{{ $img->id }}">
                                                    <img src="{{ asset('storage/' . $img->img_src) }}" width="200px"
                                                        height="200px" />

                                                    <p class="mt-2">
                                                        <button type="button"
                                                            onclick="return confirm('Are you sure you want to delete this image???')"
                                                            class="btn btn-danger btn-sm delete-image"
                                                            data-image-id="{{ $img->id }}"><i
                                                                class="fa fa-trash"></i></button>
                                                    </p>

                                                </td>
                                            @endforeach
                                        </tr>
                                    </table>
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


    {{-- delete Galery Image with Ajax --}}
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete-image").on('click', function() {
                var _img_id = $(this).attr('data-image-id');
                var _vm = $(this);
                $.ajax({
                    url: "{{ url('admin/hotelimage/delete') }}/" + _img_id,
                    dataType: 'json',
                    beforeSend: function() {
                        _vm.addClass('disabled');
                    },
                    success: function(res) {
                        if (res.bool == true) {
                            $(".imgcol" + _img_id).remove();
                        }
                        _vm.removeClass('disabled');
                    }
                });
            });
        });
    </script>
@endsection
@endsection
