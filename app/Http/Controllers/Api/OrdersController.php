<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Orders;
use\App\User;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Orders::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Orders::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $id)
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
    public function update(Request $request,Orders $id)
    {
        if( $id->update($request->all())){
            return response()->json(["message" => "Comments update Succesfully"]);
           }
           else
           {
                 return response()->json(["message" => "Comments update fail."]);
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $id)
    {
        if(  $id->delete()){
            return response()->json(["message" => "Comments delete Succesfully"]);
           }else
           {
            return response()->json(["message" => "Comments delete fail."]);  
           }
    }
    public function searchByName(Request $request, $name) {
        // // $date=$request->get();
        // dd($name);
        $order = Orders::where('name', 'like', '%' .$name .'%')->get();
        

        return response()->json($order); 
    }
}
