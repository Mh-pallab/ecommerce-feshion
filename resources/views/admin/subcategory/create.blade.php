@extends('layouts.app')

@section('content')
   <div class="col-lg-9 col-12">
      <div class="card">
         <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('subcategory.index') }}">Back</a>

            <form action="{{ route('subcategory.store') }}" method="POST">
               @csrf

               @include('admin.subcategory.form')

               <button type="submit" class="btn btn-success float-end">Save</button>
            </form>
         </div>
      </div>

   </div>
@endsection
