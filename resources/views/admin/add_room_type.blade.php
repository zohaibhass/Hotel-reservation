@extends('layouts.adminlayout')

@section('dashboard_content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card mt-5">
                <div class="card-header">
                    <h4>Add Room Type</h4>


                </div>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="card-body">
                    <form action="{{ route('roomtype.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Add Room Type</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
