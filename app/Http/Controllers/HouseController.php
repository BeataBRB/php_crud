<?php

namespace App\Http\Controllers;

use App\Models\AbstractClass;
use App\Models\House;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HouseController extends AbstractController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $houses = House::latest()->paginate(5);
  
        return view('houses.index', compact('houses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('houses.create');
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
            'adres' => 'required',
            'wlasciciel' => 'required',
        ]);
  
        House::create($request->all());
   
        return redirect()->route('houses.index')
            ->with('message','House created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param AbstractClass $house
     * @return Response
     */
    public function show($house)
    {
        $house = with(new House())->find($house);
        return view('houses.show')->with('house', $house);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AbstractClass $house
     * @return Response
     */
    public function edit($house)
    {
        $house = with(new House())->find($house);
        return view('houses.edit')->with('house', $house);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param AbstractClass $house
     * @return Response
     */
    public function update(Request $request, $house)
    {
        $house = with(new House())->find($house);
        $request->validate([
            'adres' => 'required',
            'wlasciciel' => 'required',
        ]);
  
        $house->update($request->all());
  
        return redirect()->route('houses.index')
            ->with('message','House updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AbstractClass $house
     * @return Response
     */
    public function destroy($house)
    {
        $house = with(new House())->find($house);
        $house->delete();
  
        return redirect()->route('houses.index')
            ->with('message','House deleted successfully');
    }
}
