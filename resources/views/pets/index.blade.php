@extends('layouts.app')
@section('content')
<style>

</style>

<div class="container">
<h2>Pets</h2>
  <div class="row mt-5">
    <div class="col-3">
 <form method="GET" action="pets">
    <div class="form-group row">
        <div class="col-12">
            <label for="type">Type</label><br>
            <input type="radio" name="type" value="dog"> Dog<br>
            <input type="radio" name="type" value="cat"> Cat    
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <div class="col-12">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="m"> Male<br>
            <input type="radio" name="gender" value="f"> Female
        </div>        
    </div>
    <hr>
    <div class="form-group row">
        <div class="col-12">
            <label for="age">Age</label><br>
            <input type="checkbox" name="age" value="young"> Young<br>
            <input type="checkbox" name="age" value="adult"> Adult<br>
            <input type="checkbox" name="age" value="senior"> Senior<br>
        </div>
    </div>
    <hr>
    <div class="form-group row mt-4">
        <div class="col-12">
            <label for="size">Size</label><br>
            <input type="checkbox" name="size" value="small"> Small<br>
            <input type="checkbox" name="size" value="medium"> Medium<br>
            <input type="checkbox" name="size" value="large"> Large<br>
            <input type="checkbox" name="size" value="extra large"> Extra Large<br>
        </div>
      </div>
      <hr>
      <div class="form-group row mt-4">
        <div class="col-12">
            <label for="color">Color</label><br>
            <input type="checkbox" name="color" value="black"> Black<br>
            <input type="checkbox" name="color" value="white"> White<br>
            <input type="checkbox" name="color" value="brown"> Brown<br>
            <input type="checkbox" name="color" value="grey"> Grey<br>
            <input type="checkbox" name="color" value="multicolor"> Multicolor<br>
        </div>
    </div>
    <hr>
    {{-- <div class="form-group row">
        <div class="col-12">
            <input type="checkbox" name="is_vaccinated" value="TRUE"> Vaccinated    
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <input type="checkbox" name="is_dewormed" value="TRUE"> Dewormed
        </div>        
    </div> --}}
    <button class="btn btn-primary" type="submit">Search</button>

 </form>
    </div>

    <div class="col-9 row">
  @foreach($pets as $pet)
    <div class="col-3 mb-5">
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
  </div>
  </div>
</div>

@endsection