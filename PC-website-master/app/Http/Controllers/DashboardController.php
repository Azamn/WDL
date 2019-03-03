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


class DashboardController extends Controller
{

    //
public function Dashboard()
    {
    	if(Auth::check() && Auth::user())
    	{
            $participants = DB::table('event_participants')->where('event_id',1)->count();
            $workshops = DB::table('workshops')->count();
            $tutorials = DB::table('tutorials')->count();
            $newsletters = DB::table('newsletters')->count();

            return view('admin.dashboard',compact('participants','workshops','tutorials','newsletters'));
    	}
    	else
    	{
    		return Redirect::to('/');
    	}
    }

    //SLIDER

    public function Slider()
    {
    	if(Auth::check() && Auth::user())
    	{
    		$sliders = DB::table('sliders')->get();
    		return view('admin.slider',compact('sliders'));
    	}
    	else
    	{
    		return Redirect::to('/');
    	}
    }

    public function PostSlider(Request $request)
    {
    	$input = $request->all();
    	// dd($input);
    	if($input['gallery_images'][0] == 'undefined')
        {
            return Redirect::back();
        }

    	$slider = new Slider();
        $slider->title = 'something';
        $slider->description = 'something';
        $slider->status = 'active';
        $slider->save();
       
        $last_id = $slider->id;

        foreach($input['gallery_images'] as $gallery_image)
        {
            $decodeGalleryImage = json_decode($gallery_image);        
                foreach($decodeGalleryImage as $image)
                {
                    if(!empty($image))
                    {
                       $secure_url = $image->secure_url;
                       DB::table('sliders')
                       ->where('id', $last_id)
                       ->update(['image_src' => $secure_url]);
                    }
                }            
        }
        
        Session::flash('success','New Slider Added Successfully');
        return Redirect::to('/access/root/sliders');
    }

    public function ActivateSlider($id)
    {
    	 DB::table('sliders')
            ->where('id', $id)
            ->update(['status' => 'active']);

        Session::flash('success','Slider Updated Successfully');
        return Redirect::to('/access/root/sliders'); 
    }

    public function DeactivateSlider($id)
    {
    	DB::table('sliders')
            ->where('id', $id)
            ->update(['status' => 'inactive']);

        Session::flash('success','Slider Updated Successfully');
        return Redirect::to('/access/root/sliders');
    }

    public function NewsLetters()
    {
        if(Auth::check() && Auth::user())
        {
            $newsletters = DB::table('newsletters')->get();
            return view('admin.newsletters',compact('newsletters'));    
        }
        else
        {
            return Redirect::to('/');
        }
        
    }

    public function ExportNewsletter()
    {
        if(Auth::check() && Auth::user())
        {
            Excel::create('newsletters',function($excel)
            {
                $excel->sheet('Sheetname',function($sheet)
                {
                    $data = Newsletter::get();
                   
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

    public function ContactUs()
    {
        if(Auth::check() && Auth::user())
        {
            $contacts  = Contact::orderBy('id','desc')->get();
            return view('admin.contact',compact('contacts'));
        }
        else
        {
            return Redirect::to('/');
        }
    }

    public function AddTutorials()
    {
        if(Auth::check() && Auth::user())
        {
            $tutorials = Tutorial::orderBy('id','desc')->get();
            return view('admin.tutorials',compact('tutorials'));
        }
    }

    public function PostTutorials(Request $request)
    {
        $input = $request->all();
        
        if($input['gallery_images'][0] == 'undefined')
        {
            return Redirect::back();
        }

        $slider = new Tutorial();
        $slider->title = $input['title'];
        $slider->description = $input['description'];
        $slider->link = $input['link'];
        $slider->save();
       
        $last_id = $slider->id;

        foreach($input['gallery_images'] as $gallery_image)
        {
            $decodeGalleryImage = json_decode($gallery_image);        
                foreach($decodeGalleryImage as $image)
                {
                    if(!empty($image))
                    {
                       $secure_url = $image->secure_url;
                       DB::table('tutorials')
                       ->where('id', $last_id)
                       ->update(['image_src' => $secure_url]);
                    }
                }            
        }
        
        Session::flash('success','New Tutorial Added Successfully');
        return Redirect::to('/access/root/tutorials');
    }

    public function DeleteTutorial($id)
    {
        DB::table('tutorials')
            ->where('id', $id)
            ->delete();

        Session::flash('success','Tutorial Deleted Successfully');
        return Redirect::to('/access/root/tutorials');
    }

    //WORKSHOP
    public function AddWorkshops()
    {
        if(Auth::check() && Auth::user())
        {
            $tutorials = Tutorial::orderBy('id','desc')->get();
            return view('admin.tutorials',compact('tutorials'));
        }
    }

    public function PostWorkshops(Request $request)
    {
        /*$input = $request->all();
        
        if($input['gallery_images'][0] == 'undefined')
        {
            return Redirect::back();
        }

        $slider = new Tutorial();
        $slider->title = $input['title'];
        $slider->description = $input['description'];
        $slider->link = $input['link'];
        $slider->save();
       
        $last_id = $slider->id;

        foreach($input['gallery_images'] as $gallery_image)
        {
            $decodeGalleryImage = json_decode($gallery_image);        
                foreach($decodeGalleryImage as $image)
                {
                    if(!empty($image))
                    {
                       $secure_url = $image->secure_url;
                       DB::table('tutorials')
                       ->where('id', $last_id)
                       ->update(['image_src' => $secure_url]);
                    }
                }            
        }
        
        Session::flash('success','New Tutorial Added Successfully');
        return Redirect::to('/access/root/tutorials');*/
    }

    public function DeleteWorkshop($id)
    {
        /*DB::table('tutorials')
            ->where('id', $id)
            ->delete();

        Session::flash('success','Tutorial Deleted Successfully');
        return Redirect::to('/access/root/tutorials');*/
    }
    public function deleteSlider($id)
    {
        DB::table('sliders')
            ->where('id', $id)
            ->delete();

        Session::flash('success','Slider Deleted Successfully');
        return Redirect::back();
    }



}
