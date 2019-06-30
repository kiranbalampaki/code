@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="container">
        <div class="row text-justify">

            <div class="col-0 col-sm-3 col-xs-4 col-hidden">
            asdf
            </div>

            <div class="col-6 col-sm-6 col-xs-4">
                <a href="/blogs">Go Back</a><br>
                {{-- <img class="img-fluid mt-2" style="width: 100%; height: 20vw; object-fit: cover;" src="../assets/uploads/blogimages/{{$blog->blog_image}}"> --}}
                
                <div class="px-2">
                    <h1 class="mt-3" style="font-size:2.5vw; font-weight:bold;">{{$blog->title}}</h1>                
                    <small><i class="fa fa-clock-o pr-2"></i>{{$blog->created_at}}</small>
                    <p>{!!$blog->body!!}</p>
                </div>
            </div>

            <div class="col-3 col-sm-3 col-xs-4 bg-secondary p-3">
                    <div><h5 class="text-light text-center">More</h5></div>
                    <hr>
                    @foreach($allBlogs as $blog)
                            <div class="row">
                                <div class="col-6 m-0">
                                    <img class="" style="width: 100%; height: 5vw; object-fit: cover;" src="../assets/uploads/blogimages/{{$blog->blog_image}}" alt="">
                                </div>
                                <div class="col-6 p-0 pr-3">
                                    <a href="/blogs/{{$blog->id}}" style="text-decoration:none; color:#ddd;"><h6 class="card-title m-0">{{$blog->title}}</h6></a><br>
                                    <small><i class="fa fa-clock-o pr-2"></i>{{ date('d F, Y', strtotime($blog->created_at)) }}</small>
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="card-footer">
                                <small><i class="fa fa-clock-o pr-2"></i>{{$blog->created_at}}</small>
                                <a href="/blogs/{{$blog->id}}" class="btn btn-info btn-sm float-right" role="button">Read More</a>
                            </div> --}}
                    @endforeach
            </div>

        </div>
    </div>
</div>
@endsection