@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center my-5">How It Works</h1><hr>
	<div class="row my-5">
		<div class="col-4 col-sm-5 mx-auto px-3"><img class="mx-auto" src="{{asset('assets/landingimages/help/Step-1.svg')}}"alt="child actor"></div>
		<div class="col-8 col-sm-7 px-3">
            <h1 style="font-size:3vw; font-weight:bold;">1. Create A Pet Profile</h1>
            <h3 class="mt-3" style="font-size:2vw; line-height:4vw;">Create a pet profile in minutes and manage it in your dashboard. Use your dashboard to:
            <li>Add and edit to your pet profile</li>
            <li>Respond to adopter messages</li></h3>
		</div>
	</div>
    <hr>
	<div class="row my-5">
		<div class="col-8 col-sm-7 px-3">
            <h1 style="font-size:3vw; font-weight:bold;">2. Review Messages</h1>
            <h3 class="mt-3" style="font-size:2vw; line-height:4vw;">Finding a new home for your pet can feel like a big decision. We’ll make sure you’re not alone.
            <li>We'll notify you when you have a new message to review.</li></h3>
		</div>
        <div class="col-4 col-sm-5 mx-auto px-3"><img class="mx-auto" src="{{asset('assets/landingimages/help/Step-2.svg')}}"alt="child actor"></div>
	</div>
    <hr>
	<div class="row my-5">
		<div class="col-4 col-sm-5 mx-auto px-3"><img class="mx-auto" src="{{asset('assets/landingimages/help/Step-3.svg')}}"alt="child actor"></div>
		<div class="col-8 col-sm-7 px-3">
            <h1 style="font-size:3vw; font-weight:bold;">3. Meet Adopters</h1>
            <h3 class="mt-3" style="font-size:2vw; line-height:4vw;">After you screen the messages, it’s time to meet the adopter !
            <li>Find helpful meet and greet FAQs in the website.</li></h3>
		</div>
	</div>
    <hr>
	<div class="row my-5">
		<div class="col-8 col-sm-7 px-3">
            <h1 style="font-size:3vw; font-weight:bold;">4. Finalize Adoption</h1>
            <h3 class="mt-3" style="font-size:2vw; line-height:4vw;">This is the end of the process that will find your pet the perfect home it deserves.
            {{-- <li>We'll notify you when you have a new message to review.</li> --}}
            </h3>
		</div>
        <div class="col-4 col-sm-5 mx-auto px-3"><img class="mx-auto" src="{{asset('assets/landingimages/help/Step-2.svg')}}"alt="child actor"></div>
	</div>

</div>
@endsection