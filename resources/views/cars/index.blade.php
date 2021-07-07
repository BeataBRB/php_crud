@extends('cars.layout')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <p class="font-monospace">{{ \App\Models\Product::getWelcome() }}</p>  
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success" href="{{ route('cars.create') }}"> Create New Car</a>
            </div>
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
                <th scope="col">Brand</th>
                <th scope="col">Production</th>
                <th scope="col" width="280px">Action</th>
            </tr>
        </thead>
        @foreach ($cars as $car)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $car->brand }}</td>
            <td>{{ $car->production }}</td>
            <td>

                <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cars.show',$car->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('cars.edit',$car->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach

    </table>

    {!! $cars->links() !!}
    
@endsection