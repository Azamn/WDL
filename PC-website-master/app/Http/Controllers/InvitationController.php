<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\InvitationLetter;
use App\Invitation;

class InvitationController extends Controller
{
    public function ListLetters()
    {
    	$invitation_letters = InvitationLetter::all();
        $data = [
        	'invitation_letters' => $invitation_letters
        ];

        return view('admin.invitation_letter')->with($data);
    }

    public function createLetter()
    {
    	return view('admin.letter_form');
    }

    public function storeLetter(Request $request)
    {
    	$letter = new InvitationLetter();
        
        $this->validate($request, [
            'name' => 'required|unique:invitation_letters',
            'body' => 'required',
        ]);
        
        $letter->name = $request->name;
        $letter->body = $request->body;

        $letter->save();
        
        return redirect()->route('letters');
    }

    public function editLetter($id)
    {
        $letter = InvitationLetter::find($id);
        if(!$letter)
        {
            Session::flash('error','Letter Not Found');
            return redirect()->back();
        }
        $data = [
            'letter' => $letter
        ];
        return view('admin.letter_form')->with($data);
    }

    public function updateLetter(Request $request, $id)
    {
    
        $letter = InvitationLetter::find($id);
        if(!$letter)
        {
            Session::flash('error','Letter Not Found');
            return redirect()->back();
        }

        $validation_rules = [
            'name' => 'required',
            'body' => 'required',
        ];

        $this->validate($request, $validation_rules);

        $letter->name = $request->name;
        $letter->body = $request->body;
        
        $letter->save();
        Session::flash('success','Letter Added Successfully');

        return redirect()->back();
    }
    
    public function destroyLetter($id)
    {
        $letter = InvitationLetter::find($id);
        if($letter)
        {
            $title = $letter->title;
            $letter->delete();
            Session::flash('success',$title.' Delete Successfully');
        }
        else
        {
            Session::flash('error','Letter Not Found');
        }
        
        return redirect()->route('letters');
    }

    public function ListInvitation()
    {
    	$invitations = Invitation::all();
        $data = [
        	'invitations' => $invitations
        ];

        return view('admin.invitations')->with($data);
    }

    public function createInvitation()
    {
    	return view('admin.invitation_form');
    }

    public function storeInvitation(Request $request)
    {
    	$invitation = new Invitation();
        
        $this->validate($request, [
            'name' => 'required|unique:invitations',
            'slug' => 'required|unique:invitations',
            'invitation_letter_id' => 'required'
        ]);

        $slug = $request->slug;

        // invitaion url
        $long_url = route("invitation_front", $slug);

        //api url
        $api_url = "https://api-ssl.bitly.com/v3/user/link_save?longUrl=$long_url&access_token=2ad49d3f7158122422487a9db8042201a33d9b0c";
        
        //calling api
        $response = file_get_contents($api_url);
        //decoding json
        $response = json_decode($response);
		
		$status_code = $response->status_code;

		$short_url = "";
		$short_url = $response->data->link_save->link;

        $invitation->name = $request->name;
        $invitation->slug = $request->slug;
        $invitation->short_link = $short_url;
        $invitation->invitation_letter_id = $request->invitation_letter_id;

        $invitation->save();
        
        return redirect()->route('invitations');
    }

    public function destroyInvitatation($id)
    {
        $invitation = Invitation::find($id);
        if($invitation)
        {
            $name = $invitation->name;
            $invitation->delete();
            Session::flash('success',$name.' Delete Successfully');
        }
        else
        {
            Session::flash('error','invitation Not Found');
        }
        
        return redirect()->route('invitations');
    }

    public function editInvitation($id)
    {
        $invitation = Invitation::find($id);
        if(!$invitation)
        {
            Session::flash('error','Invitation Not Found');
            return redirect()->back();
        }
        $data = [
            'invitation' => $invitation
        ];
        return view('admin.invitation_form')->with($data);
    }

    public function updateInvitation(Request $request, $id)
    {
    
        $invitation = Invitation::find($id);
        if(!$invitation)
        {
            Session::flash('error','Invitation Not Found');
            return redirect()->back();
        }

        $validation_rules = [
            'name' => 'required',
            'slug' => 'required',
            'invitation_letter_id' => 'required'
        ];

        $this->validate($request, $validation_rules);

        $invitation->name = $request->name;
        $invitation->slug = $request->slug;
        $invitation->invitation_letter_id = $request->invitation_letter_id;
        
        $invitation->save();
        Session::flash('success','Invitation Updated Successfully');

        return redirect()->back();
    }

}
