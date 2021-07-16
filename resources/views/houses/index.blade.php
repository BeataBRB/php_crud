<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('Tabela') }}</h2>    
    </x-slot>  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">  
                <div class="p-6 bg-white border-b border-gray-200">     
 
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <p class="font-semibold text-xl text-gray-800 leading-tight">{{ \App\Models\Product::getWelcome() }} Houses</p>         
                    </div>
                    <x-success-message />

                    <div class="flex items-center justify-end mt-4">                                           
                    <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    <a href="{{ route('houses.create') }}"> Create New Houses</a>
                    </button>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Adress</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Wlasciciel</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="280px">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($houses as $house)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ ++$i }}</td>
                                <td>{{ $house->adres }}</td>
                                <td>{{ $house->wlasciciel }}</td>
                                <td>
                                    <form action="{{ route('houses.destroy',$house->id) }}" method="POST">
                                        <x-button>
                                        <a  href="{{ route('houses.show',$house->id) }}">Show</a>
                                        </x-button>

                                        <x-button class="bg-yellow-400 hover:bg-yellow-300">
                                        <a href="{{ route('houses.edit',$house->id) }}">Edit</a>
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
                        {!! $houses->links() !!}
                        </div>
                </div>   
            </div>
        </div>
    </div>          
</x-app-layout>