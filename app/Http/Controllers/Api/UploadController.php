<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response ()->download(public_path('image/3.jpg'), 'image');
        // $path = public_path().'images';
        // return Response::download($path);       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // $fileName='image.jpg';
        // $path=$request->file('image')->move(public_path("/"), $fileName);
        // $imageURL=url('/',$fileName);
        // return response()->json(['url'=>$imageURL],200);
        if ($request->hasFile('image'))
        {
              $file      = $request->file('image');
              $filename  = $file->getClientOriginalName();
            //   $extension = $file->getClientOriginalExtension();
              $picture   = date('His').'-'.$filename;
              $file->move(public_path('image'), $picture);
              return response()->json(["message" => "Image Uploaded Succesfully"]);
        } 
        else
        {
              return response()->json(["message" => "Select image first."]);
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
