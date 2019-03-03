<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Slider;
use DB;
use Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Newsletter;
use App\Contact;
use App\Tutorial;
use App\Event;
use App\EventInfo;
use App\EventSchedule;
use App\ProblemDefination;
use App\EventParticipant;
class EventController extends Controller
{
    public function Events()
    {
    	if(Auth::check() && Auth::user())
    	{
    		$events = Event::get();
    		return view('admin.events',compact('events'));
    	}
    	else
    	{
    		return Redirect::to('/');
    	}
    }

    public function AddEvent()
    {
    	if(Auth::check() && Auth::user())
    	{
    		return view('admin.add_events');
    	}
    	else
    	{
    		return Redirect::to('/');
    	}
    }

    public function PostEvent(Request $request)
    {
    	$input = $request->all();

    	$string = $input['title'].' '.$input['tagline'];
    
    	$slug = str_slug($string, "-");

    	$event = new Event();
    	$event->title = $input['title'];
    	$event->tagline = $input['tagline'];
    	$event->about_event = $input['about_event'];
    	$event->event_theme = $input['event_theme'];
    	$event->key_points = $input['key_points'];
    	$event->slug = $slug;
    	$event->status = 'active';
    	$event->save();

    	$last_id = $event->id;

    	foreach($input['gallery_images'] as $gallery_image)
        {
            $decodeGalleryImage = json_decode($gallery_image);        
                foreach($decodeGalleryImage as $image)
                {
                    if(!empty($image))
                    {
                       $secure_url = $image->secure_url;
                       DB::table('events')
                       ->where('id', $last_id)
                       ->update(['banner_image' => $secure_url]);
                    }
                }            
        }

    	$info = new EventInfo();
    	$info->event_id = $last_id;
    	$info->duration = $input['duration'];
    	$info->date = $input['date'];
    	$info->time = $input['time'];
    	$info->location = $input['location'];
    	$info->participation = $input['participation'];
    	$info->number_of_students = $input['number_of_students'];
    	$info->eligible_departments = $input['eligible_departments'];
    	$info->fees = $input['fees'];
    	$info->save();

    	Session::flash('success','New Event Added Successfully');
        return Redirect::to('/access/root/events');


    }

    public function GetSchedule($id)
    {
        if(Auth::check() && Auth::user())
        {
            $check_id = DB::table('events')->where('id',$id)->first();
            if(!empty($check_id))
            {
                $schedules = DB::table('event_schedules')->where('event_id',$id)->get();
                return view('admin.schedules',compact('schedules','id'));
            }
            else
            {
                return Redirect::back();
            }
        }   
        else
        {
            return Redirect::back();
        }
    }

    public function PostSchedule(Request $request)
    {
        $input = $request->all();

        $info = new EventSchedule();
        $info->event_id = $input['event_id'];
        $info->title = $input['title'];
        $info->start_time = $input['start_time'];
        $info->end_time = $input['end_time'];
        $info->save();

        Session::flash('success','New Scheudle Added Successfully');
        return Redirect::back();
    }

    public function ActivateSchedule($id)
    {
         DB::table('event_schedules')
            ->where('id', $id)
            ->update(['status' => 'active']);

        Session::flash('success','Scheudle Updated Successfully');
        return Redirect::back(); 
    }

    public function DeactivateSchedule($id)
    {
        DB::table('event_schedules')
            ->where('id', $id)
            ->update(['status' => 'inactive']);

        Session::flash('success','Scheudle Updated Successfully');
        return Redirect::back();
    }

    public function GetProblemDefination($id)
    {
        if(Auth::check() && Auth::user())
        {
            $check_id = DB::table('events')->where('id',$id)->first();
            if(!empty($check_id))
            {
                $problemdefinations = DB::table('problem_definations')->where('event_id',$id)->get();
                return view('admin.problemdefinations',compact('problemdefinations','id'));
            }
            else
            {
                return Redirect::back();
            }
        }   
        else
        {
            return Redirect::back();
        }
    }

    public function PostProblemDefination(Request $request)
    {
        $input = $request->all();

        $info = new ProblemDefination();
        $info->event_id = $input['event_id'];
        $info->problem_defination = $input['problem_defination'];
        $info->save();

        Session::flash('success','New Problem Defination Added Successfully');
        return Redirect::back();
    }

     public function ActivateProblem($id)
    {
         DB::table('problem_definations')
            ->where('id', $id)
            ->update(['status' => 'active']);

        Session::flash('success','Problem Defination Updated Successfully');
        return Redirect::back(); 
    }

    public function DeactivateProblem($id)
    {
        DB::table('problem_definations')
            ->where('id', $id)
            ->update(['status' => 'inactive']);

        Session::flash('success','Problem Defination Updated Successfully');
        return Redirect::back();
    }

    public function ViewParticipants($id)
    {
        $event = DB::table('events')->where('id',$id)->first();
        $participants = DB::table('event_participants')->where('event_id',$id)->get();

        return view('admin.event_participants',compact('participants','event'));
    }

    public function MarkParticipantPaid($id)
    {
        DB::table('event_participants')
            ->where('id', $id)
            ->update(['status' => 'paid']);

        Session::flash('success','Participants Status Updated Successfully');
        return Redirect::back(); 
    }

    public function MarkParticipantUnpaid($id)
    {
        DB::table('event_participants')
            ->where('id', $id)
            ->update(['status' => 'unpaid']);

        Session::flash('success','Participants Status Updated Successfully');
        return Redirect::back(); 
    }

    public function ExportEventParticipants($id)
    {
        if(Auth::check() && Auth::user())
        {
            Excel::create('participants',function($excel)
            {   
                $excel->sheet('Sheetname',function($sheet)
                {
                    $data = EventParticipant::get(); 
        
                    $test =  $data->toArray();
                    array_push($test, array());
                    $sheet->fromArray($test);
                });
            })->export('csv');
        }
        else
        {
            return Redirect::to('/');
        }
    }
    //to delete the participant
    public function deleteParticipant($id)
    {
        DB::table('event_participants')
            ->where('id', $id)
            ->delete();

        Session::flash('success','Participant Deleted Successfully');
        return Redirect::back();
    }

}
