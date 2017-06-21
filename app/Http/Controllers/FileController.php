<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        
         
     if ($request->hasFile('file')) {

         $filename = $request->file->getClientOriginalName();

          $filesize = $request->file->getClientSize();
        # code...
        $request->file->storeAs('public/upload',$filename);

       $file = new File;



        $file->menuname=$request->menuname;
      
         $file->category=$request->category;
          $file->price=$request->price;
            $file->time=$request->time;
         

       $file->filename =  $filename;
       
        $file->filesize =  $filesize;
 
         $file->save();


        //return 'yes';
      }




      // return $request->all();






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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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