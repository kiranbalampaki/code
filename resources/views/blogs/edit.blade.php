@extends('admin.dashboard')

@section('content')
<div class="card card border-left-primary shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Blog</h6>
                </div>
<div class="card-body">
 <form method="POST" action="{{route('blogs.update',['id'=>$blog->id])}}" enctype="multipart/form-data">
    <div class="form-group row">
    <div class="col-6">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" value="{{$blog->title}}">
    </div>
    <div class="row">
    <div class="col-6">
                <label for="image">Product Image</label>
                <input class="form-control p-1 col-8" type="file" name = "image">
    </div>
    <div class="col-6"><?php $img = $blog->blog_image; ?>
                <img src="{{asset('assets/uploads/blogimages/'.$img)}}" height="100"> 
    </div>
    </div>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="summary-ckeditor" name="body">{{$blog->body}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Save</button>
    @csrf
    {{method_field('PUT')}}
 </form>
 </div>
 </div>
@endsection