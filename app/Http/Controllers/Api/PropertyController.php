<?php

namespace App\Http\Controllers\Api;

use Log;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Filters\PropertyFilters;


class PropertyController extends Controller
{
    
    public function search(Request $request, PropertyFilters $filters){
        $properties = Property::filter($filters)->get();
        return response()->json([
            "status" => "success",
            "message" => "Search property perfomed successful"
            "properties" => $properties
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $returnData['property'] = $property
        return View::make('property.show', $returnData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
