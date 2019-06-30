@extends('layouts.app')

@section('content')
    <section class="container-fluid row banner">
        <div class="my-auto col-10 text-center">
            <h1 style="font-weight:bold; font-size:4vw;">Do you want to<br>find <font color="#55dcd6">a best friend?</font></h1>
            <h3 style="font-size:2vw;">We will help you find a best friend.</h3>
            <a class="btn bannerbutton">Find a Pet</a>
        </div>
        <div class="col-2"></div>
    </section>

<div class="container py-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Pets</h1>
        <a href="/pets" class="d-none d-sm-inline-block btn btn-md btn-primary">View All</a>
    </div>

    <div class="row">
        @if(count($pets)>0)
            @foreach($pets as $pet)
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card petcard">
                    <div class="card-block">
                    <div>
                        <img class="card-img-top img-fluid" style="width: 100%; height: 15vw; object-fit: cover;" src="assets/uploads/pets/{{$pet->pet_photo}}" alt="">
                    </div>

                    <div class="card-text px-3 text-center">
                        <h4 class="card-title mt-2">{{$pet->name}}</h4>
                        <p>
                        <?php
                            if ($pet->gender == "m"){
                                echo "Male";
                            }
                            else{
                                echo "Female";
                            }
                        ?>
                        </p>
                    </div>
                                            
                    <div class="card-footer overlay text-center py-5">
                        <p class="">Labrador<br>{{$pet->age}}<br>{{$pet->size}}<br>{{$pet->color}}</p>
                        <a href="/pets/{{$pet->id}}" class="btn btn-success text-white" role="button">Find More</a>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        @else
            <p>No posts found</p>
        @endif
    </div>
</div>


    <div class="container-fluid img-fluid text-center text-white infobanner p-5">
    <h2 style="font-size:2vw;">New Pet ?<br>Everything you need to know</h2>
    <h4 style="font-size:1.5vw;">Use our helpful new pet guides to learn more about what you need<br>
        to prepare your home for your new family member, nutrition information, and<br> training tips.</h4>
    <a class="btn btn-outline-secondary px-4 py-2" style="border:1px solid white; border-radius:50px; font-size:1vw">EXPLORE GUIDES</a>
    </div>

<div class="container py-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Pets</h1>
        <a href="/pets" class="d-none d-sm-inline-block btn btn-md btn-primary">View All</a>
    </div>

    <div class="row">
        @if(count($products)>0)
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card petcard">
                    <div class="card-block">
                    <div>
                        <img class="card-img-top img-fluid" style="width: 100%; height: 15vw; object-fit: cover;" src="assets/uploads/products/{{$product->product_image}}" alt="">
                    </div>

                    <div class="card-text px-3 text-center">
                        <h4 class="card-title mt-2">{{$product->product_name}}</h4>
                        <p>Rs. {{$product->price}}</p>
                    </div>
                                            
                    <div class="card-footer overlay text-center py-5">
                        <a href="/products/{{$product->id}}" class="btn btn-success text-white" role="button">Find More</a>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        @else
            <p>No posts found</p>
        @endif
    </div>
</div>

<div class="container py-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
        <a href="/blogs" class="d-none d-sm-inline-block btn btn-md btn-primary">View All</a>
    </div>

    <div class="row">
        @if(count($blogs)>0)
            @foreach($blogs as $blog)
                <div class="col-sm-6 col-md-4 col-lg-4 mt-2">
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
</div>


@endsection