@extends('layouts\adminlayout')

@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">

            <div class="card-header">
                <strong class="card-title">Available Services</strong>
            </div>

            <div class="table-stats order-table ov-h">


                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Image</th>

                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                            <td class="serial"></td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#">

                                        <img class="rounded-circle" src="" alt="">

                                        <img class="rounded-circle" src="" alt="Default Image">

                                    </a>
                                </div>
                            </td>

                            <td> <span class="name"></span> </td>
                            <td> <span class="product"></span> </td>

                            <td>
                                {{-- <a href="#" class="btn btn-outline-warning">update</a> --}}
                                <form action="" method="GET" style="display: inline;">
                                    @csrf


                                    <button type="submit" class="btn btn-outline-info"
                                        onclick="return confirm('Are you sure you want to update this service?')">update</button>
                                </form>
                                {{-- <a href="#" class="btn btn-outline-success">view</a> --}}
                                {{-- <a href="{{ route('services.destroy',['service' => $service['id']]) }}" class="btn btn-outline-danger">delete</a> --}}
                                <form action="" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                </form>


                            </td>
                        </tr>

                </table>


                <div class="sufee-alert alert with-close alert-secondary mx-5 mt-5 alert-dismissible fade show">
                    <span class="badge badge-pill badge-secondary">Empty</span>
                    there is not available servce.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

            </div> <!-- /.table-stats -->
        </div>
    </div>
@endsection
