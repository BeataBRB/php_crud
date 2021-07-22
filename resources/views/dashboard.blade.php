@extends('layouts.app')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div>Witaj {{ Auth::user()->name }}</div> 
        </h2>
    @endsection

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Wybierz tabele
                    </h2>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ol class="list-decimal list-inside">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('cars.index')}}">Cars</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('houses.index')}}">Houses</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('products.index')}}">Product</a></li>
                        </ol>
                    </div>
                </div>   
            </div>
        </div>
    </div>  
    @endsection

