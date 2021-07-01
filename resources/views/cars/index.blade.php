@extends('cars.layout')




@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

        <div class="w-50 p-3" style="background-color: #eee;"> {{ $powitanie }}
        <input type="text" name="powitanie">
        </div>


            <div class="pull-left">


                <h2>Cars Table </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('cars.create') }}"> Create New Car</a>

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

            <th>Brand</th>

            <th>Production</th>

            <th width="280px">Action</th>

        </tr>

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