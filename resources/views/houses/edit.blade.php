@extends('layouts.app')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Houses') }}
        </h2>
    @endsection

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="pull-left">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Edit House</h2>
                    </div>
                                              
                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            <a href="{{ route('houses.index') }}">Back</a>
                        </x-button>
                    </div>
   
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('houses.update',$house->id) }}" method="POST">
                    
                        @csrf
                        @method('PUT')

                        <div class="grid grid-rows-2 gap-6">
                            <div>
                                <x-label for="adres" :value="__('Adres')" />
                                <x-input id="adres" class="block mt-1 w-full" type="text" name="adres" value="{{ $house->adres }}" autofocus />
                            </div>
                            <div>
                                <x-label for="wlasciciel" :value="__('Wlasciciel')" />
                                <x-input id="wlasciciel" class="block mt-1 w-full" type="text" name="wlasciciel" value="{{ $house->wlasciciel }}" autofocus />
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">    
                                <x-button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                {{ __('Update') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection