<?php

namespace App\Http\Controllers\CommonControllers;

use App\CommonModels\Attachment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attachments = Attachment::all();

        return view('',compact('attachments'));
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
    public function store($file,str $model_name)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommonModels\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommonModels\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommonModels\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachment $attachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommonModels\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id,Attachment $attachment)
    {
        //
        
        
        if($attachment->destroy($id))
            Session::flash('success','Successfully Deleted');
        else
            Session::flash('error','Something Went Wrong');

        return redirect()->back();
    }

    public function upload_attachment($file)
    {

    }
}
