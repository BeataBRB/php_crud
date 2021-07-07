<?php

namespace App\Http\Controllers;

use App\Models\AbstractClass;
use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     *  @return Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * 
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * 
     *  @param AbstractClass $abstractClass
     * @return Response
     */
    public function show($abstractClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  @param AbstractClass $abstractClass
     * @return Response
     */
    public function edit($abstractClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param AbstractClass $abstractClass
     * @return Response
     */
    public function update(Request $request, $abstractClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param AbstractClass $abstractClass
     * @return Response
     */
    public function destroy($abstractClass)
    {
        //
    }
}
