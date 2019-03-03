<?php

namespace App\Http\Controllers\EventControllers;

use App\EventModels\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Integer;
use Nexmo\Call\Event as NexmoEvent;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();

        return view('',compact('events'));
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
        //Object Of Event Model
        $event = new Event();
        
        //mapping  the data on  object of event
        $event->title = $request->title;
        $event->tag_line = $request->tag_line;
        $event->banner_image = $request->image_url;
        $event->about_event = $request->about_event;
        $event->event_theme = $request->event_theme;
        $event->key_points = $request->key_points;
        $event->slug = str_slug($request->title, "-");
        $event->register_status = 1;
        $event->duration = $request->duration;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->departments = $request->departments;
        $event->location = $request->location;
        $event->participation = $request->participation;
        $event->fees = $request->fees;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventModels\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventModels\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventModels\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventModels\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id,Event $event)
    {
        //
        if($event->destroy($id))
            Session::flash('success','Successfully Deleted');
        else
            Session::flash('error','Something Went Wrong');

        return redirect()->back();

    }

    /**
     * Open or Close Registeration
     * @param  
     */
    public function openOrCloseRegisteration(int $id,Event $event)
    {
        // Get Data from databse or return 404
        $event = $event->findOrFail($id);
        
        // if registeration is open then close registeration else open registeration
        if ($event->registeration_status == 1)
            $event->registeration_status = 0;
        else
            $event->registeration_status = 1;

        // Update the instance else return error
        if($event->save())
            Session::flash('success','Registration Open Successfully');
        else
            Session::flash('error','Something Went Wrong');

        return redirect()->back();
    }
}
