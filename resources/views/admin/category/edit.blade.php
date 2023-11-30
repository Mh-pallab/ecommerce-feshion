@extends('layouts.app')

@section('content')
   <div class="col-lg-9 col-12">
      <div class="card">
         <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('category.index') }}">Back</a>

            <form action="{{ route('category.update', $category->id) }}" method="POST">
               @csrf
               @method('PUT')

               @include('admin.category.form')

               <button type="submit" class="btn btn-success float-end">Save</button>
            </form>
         </div>
      </div>

   </div>
@endsection
