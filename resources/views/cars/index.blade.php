@extends('layouts.app', ['nazwaModulu' => 'Tabela Car'])

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">  
                <div class="p-6 bg-white border-b border-gray-200">     

                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <p class="font-semibold text-xl text-gray-800 leading-tight">{{ \App\Models\Car::getWelcome() }} Cars</p>         
                    </div>
                            
                    <x-success-message />

                    <div class="flex items-center justify-end mt-4">                                           
                        <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                            <a href="{{ route('cars.create') }}"> Create New Car</a>
                        </button>
                    </div>
                
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Production</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="280px">Action</th>
                            </tr>
                        </thead>
                
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($cars as $car)

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ ++$i }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->production }}</td>
                                <td>

                                    <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
                                        <x-button>
                                            <a  href="{{ route('cars.show',$car->id) }}">Show</a>
                                        </x-button>

                                        <x-button class="bg-yellow-400 hover:bg-yellow-300">
                                            <a href="{{ route('cars.edit',$car->id) }}">Edit</a>
                                        </x-button>
     
                                        @csrf
                                        @method('DELETE')

                                        <x-button class="bg-red-500 hover:bg-red-400">
                                        {{ __('Delete') }}
                                        </x-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="mt-4">
                    {!! $cars->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection