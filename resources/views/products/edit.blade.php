<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="pull-left">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Edit Product</h2>
                    </div>
                                              
                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            <a href="{{ route('products.index') }}">Back</a>
                        </x-button>
                    </div>
   
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('products.update',$product->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="grid grid-rows-2 gap-6">
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name }}" autofocus />
                            </div>
                        <div>
                            <x-label for="detail" :value="__('Detail')" />
                            <x-input id="detail" class="block mt-1 w-full" type="text" name="detail" value="{{ $product->detail }}" autofocus />
                        </div>
                    
                        <div class="flex items-center justify-end mt-4">    
                            <x-button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                            {{ __('Update') }}
                            </x-button>
                        </div>

                    </form>     
 
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
