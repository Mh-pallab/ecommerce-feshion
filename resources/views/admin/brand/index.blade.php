@extends('layouts.app')

@section('content')
   <div class="col-lg-9 col-12">
      <a class="btn btn-primary" href="{{ route('dashboard') }}">Back</a>
      <a class="btn btn-success float-end" href="{{ route('brand.create') }}">Add New</a>

      <table class="table mt-3">
         <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
         </thead>
         <tbody>
            @foreach ($brands as $item)
               <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->status }}</td>
                  <td>
                     <a class="btn btn-secondary " href="{{ route('brand.edit', $item->id) }}">Edit</a>

                     <form class="d-inline-block" action="{{ route('brand.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                     </form>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
@endsection
