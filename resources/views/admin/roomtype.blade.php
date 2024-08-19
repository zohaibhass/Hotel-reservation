@extends('layouts.adminlayout')
@section('dashboard_content')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h4><b>Room Types</b></h4>

                    <a href="{{ route('roomtype.create') }}" class="btn btn-primary float-right">Add Room Type</a>
                </div>
                @if (session('success'))

                    <div class="alert alert-danger">

                        {{ session('success') }}

                    </div>

                    @endif
                <div class="card-body">
                    @if ($roomTypes->isEmpty())
                        <p>No room types available.</p>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roomTypes as $roomType)
                                    <tr>
                                        <td>{{ $roomType->id }}</td>
                                        <td>{{ $roomType->title }}</td>
                                        <td>{{ $roomType->description }}</td>
                                        <td>

                                            <form action="{{ route('roomtype.destroy', $roomType->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
