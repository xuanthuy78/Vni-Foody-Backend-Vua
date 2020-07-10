<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Partners;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Partners::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Partners::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $id)
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
    public function update(Request $request,Partners $id)
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
    public function destroy(Partners $id)
    {
        if(  $id->delete()){
            return response()->json(["message" => "Product delete Succesfully"]);
           }else
           {
            return response()->json(["message" => "Product delete fail."]);  
           }
    }
}
