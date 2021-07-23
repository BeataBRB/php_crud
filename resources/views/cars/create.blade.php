@extends('layouts.app', ['nazwaModulu' => 'Tabela Car'])

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="pull-left">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Add New Car</h2>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            <a href="{{ route('cars.index') }}">Back</a>
                        </x-button>
                    </div>
                    
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <x-success-message />    
    
                    <form action="{{ route('cars.store') }}" method="POST">
                        @method ('POST')
                        @csrf

                        <div class="grid grid-rows-2 gap-6">
                            <div class="form-group">
                                <x-label for="brand" :value="__('Brand')" />
                                <x-input id="brand" class="block mt-1 w-full"
                                         type="text"
                                         name="brand"/>
                            </div>
                            <div class="form-group">
                                <x-label for="production" :value="__('Production')" />
                                <x-input id="production" class="block mt-1 w-full"
                                         type="text"
                                         name="production"/>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">                                           
                            <x-button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                            {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection