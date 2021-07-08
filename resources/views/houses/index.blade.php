@extends('houses.layout')
 
@section('content')

    <div class="row">
         <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <p class="font-monospace">{{ \App\Models\Product::getWelcome() }}</p>  
        </div> 
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success" href="{{ route('houses.create') }}"> Create New Home</a>
            </div>
       
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $message }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
   
    <table class="table">
      <thead class="table-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Adres</th>
            <th scope="col">Wlasciciel</th> 
            <th scope="col" width="280px">Action</th>
        </tr>
      </thead>
        @foreach ($houses as $house)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $house->adres }}</td>
            <td>{{ $house->wlasciciel }}</td>
            <td>
                <form action="{{ route('houses.destroy',$house->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('houses.show',$house->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('houses.edit',$house->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $houses->links() !!}
      
@endsection