<?php

namespace App\Http\Controllers;

use App\Models\AbstractClass;
use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarsController extends AbstractController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cars = Car::latest()->paginate(5);


        return view('cars.index', compact('cars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'brand' => 'required',

            'production' => 'required',

        ]);


        Car::create($request->all());


        return redirect()->route('cars.index')
            ->with('message', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param AbstractClass $car
     * @return Response
     */
    public function show($car)
    {
        $car = with(new Car())->find($car);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AbstractClass $car
     * @return Response
     */
    public function edit($car)
    {
        $car = with(new Car())->find($car);
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param AbstractClass $car
     * @return Response
     */
    public function update(Request $request, $car)
    {
        $car = with(new Car())->find($car);
        $request->validate([
            'brand' => 'required',
            'production' => 'required',
        ]);

        $car->update($request->all());

        return redirect()->route('cars.index')
            ->with('message', 'Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AbstractClass $car
     * @return Response
     */
    public function destroy($car)
    {
        $car = with(new Car())->find($car);
        $car->delete();


        return redirect()->route('cars.index')
            ->with('message', 'Car deleted successfully');
    }
}