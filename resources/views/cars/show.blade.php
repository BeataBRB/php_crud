@extends('layouts.app')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Tabela') }}</h2>    
    @endsection

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="pull-left">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Show House</h2>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            <a href="{{ route('cars.index') }}">Back</a>
                        </x-button>
                    </div>

                    <div class="grid grid-rows-2 gap-6">
                        <div>
                            <x-label for="brand" :value="__('Brand')" />
                            <x-input id="brand" class="block mt-1 w-full" type="text" name="brand" value=" {{ $car->brand }}" autofocus />
                        </div>
                        <div>
                            <x-label for="production" :value="__('Production')" />
                            <x-input id="production" class="block mt-1 w-full" type="text" name="production" value="{{ $car->production }}" autofocus />
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    @endsection