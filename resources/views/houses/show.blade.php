<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Tabela') }}</h2>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="pull-left">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Show House</h2>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            <a href="{{ route('houses.index') }}">Back</a>
                        </x-button>
                    </div>

                    <div class="grid grid-rows-2 gap-6">
                        <div>
                            <x-label for="adres" :value="__('Adres')" />
                            <x-input id="adres" class="block mt-1 w-full" type="text" name="adres" value=" {{ $house->adres }}" autofocus />
                        </div>
                        <div>
                            <x-label for="wlasciciel" :value="__('Wlasciciel')" />
                            <x-input id="wlasciciel" class="block mt-1 w-full" type="text" name="wlasciciel" value="{{ $house->wlasciciel }}" autofocus />
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>