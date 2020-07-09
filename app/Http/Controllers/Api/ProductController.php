<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use\App\Products;
use\App\Comments;
use\App\Categories;
use\App\Partners;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Products::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Products::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $id)
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
    public function update(Request $request, Products $id)
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
    public function destroy(Products $id)
    {
       if(  $id->delete()){
        return response()->json(["message" => "Product delete Succesfully"]);
       }else
       {
        return response()->json(["message" => "Product delete fail."]);  
       }
     
        // if ( $id) {
        //     Session::flash('success', 'Xóa thành công!');
        // }else {                        
        //     Session::flash('error', 'Xóa thất bại!');
        // }
        
        
       
    }
    public function searchByName(Request $request, $name) {
        // // $date=$request->get();
        // dd($name);
        $product = Products::where('name', 'like', '%' .$name .'%')->get();

        return response()->json($product); 
    }
    public function searchByCategory(Request $request, $categories_id) {
        // // $date=$request->get();
        // dd($name);
        $product = Products::where('categories_id', 'like', '%' .$categories_id .'%')
        // ->join = Categories:: where('')
        ->get();

        return response()->json($product); 
    }
    public function searchByPartner(Request $request, $name) {
        // // $date=$request->get();
        // dd($name);
        $product = Partners::where('name', 'like', '%' .$name .'%')->get();

        return response()->json($product); 
    }
}
