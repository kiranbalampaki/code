@extends('layouts.app')

@section('content')
<div class="">
    <h1 class="text-center my-5">Blogs</h1>
    <div class="container">
        <div class="row">
        @if(count($blogs)>0)
            @foreach($blogs as $blog)
                <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                    <div class="card">
                        <div class="card-block">
                            <div>
                                <img class="card-img-top img-fluid" style="width: 100%; height: 15vw; object-fit: cover;" src="assets/uploads/blogimages/{{$blog->blog_image}}" alt="">
                            </div>

                            <div class="card-text px-3">
                                <h4 class="card-title mt-3">{{$blog->title}}</h4>
                                <p>{!!str_limit($blog->body, 150, '....')!!}</p>
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <small><i class="fa fa-clock-o pr-2"></i>{{$blog->created_at}}</small>
                            <a href="/blogs/{{$blog->id}}" class="btn btn-info btn-sm float-right" role="button">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No posts found</p>
        @endif
        
        </div>
        <div class="mt-4">{{$blogs->links()}}</div>
    </div>
</div>
@endsection