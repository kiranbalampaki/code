@extends('admin.dashboard')

@section('content')
<div class="col-6">
    <div class="card card border-left-primary shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Categories</h6>
                    </div>
    <div class="card-body">

    <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            <div class="">
                <label for="name">Category Name</label>
                <input class="form-control" type="text" name="name">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Add Category</button>
        @csrf
    </form>
</div>
@endsection