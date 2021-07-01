@extends('houses.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Houses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('houses.create') }}"> Create new home</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Adres</th>
            <th>wlasciciel</th>
            
        </tr>
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