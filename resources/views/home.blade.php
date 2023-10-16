@extends('layouts.app')

@section('content')

<!-- banner starts -->
<div class="container-fluid banner">
   <div class="row align-items-center">
      <div class="col-md-6"></div>
      <div class="col-md-6 text-center">
         <h1 class="text-uppercase">stylist picks beat the heat</h1>
         <button class="btn btn-outline-light">SHOP NOW</button>
      </div>
   </div>
</div>
<!-- banner ends -->

<!-- new arrivals starts -->
<div class="container newArrivals">
   <div class="text">
      <h3>Discover NEW Arrivals</h3>
      <p>Recently added shirts!</p>
   </div>

   <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
         <div class="card h-100">
            <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">Plain White Shirt</h5>
               <p class="card-text">$175.00</p>
            </div>
         </div>
      </div>



   </div>
   <!-- new arrivals ends -->

</div>
@endsection