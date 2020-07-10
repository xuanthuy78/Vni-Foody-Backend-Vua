<?php

namespace App\Http\Controllers\Api;
use\App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Categories::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Categories::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Categories $id)
    {
        if( $id->update($request->all())){
            return response()->json(["message" => "Product update Succesfully"]);
           }
           else
           {
                 return response()->json(["message" => "Product update fail."]);
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $id)
    {
        if(  $id->delete()){
            return response()->json(["message" => "Product delete Succesfully"]);
           }else
           {
            return response()->json(["message" => "Product delete fail."]);  
           }
    }
}
