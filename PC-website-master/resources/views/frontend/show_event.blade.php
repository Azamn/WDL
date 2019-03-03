@extends('frontend.master')

@section('title')
{{$event->title}} &nbsp; {{$event->tagline}} - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop

@section('keywords')
algorithm,algorithm 4.0,programmersclub, programmers club, programmersclub.co.in,armash fankar,aiktc.org,kalsekar technical campus,computer engineering,programmers,coding,laravel,php,event,college event,panel,engineering,college events,coding,hackers,code,mongodb
@stop

@section('description')
In Programmers Club, we truly believe in the power of illustration and transformation; thus, engaging and inspiring young programmers to come together on a single platform where they can interact with each other and share their innovative ideas.At Programmers Club, our mission is to make students take advantage of the resources provided and help them build their skills by providing them A clear understanding to define their goals.
@stop

@section('content')
<div class="page-title parallax parallax4"> 
        	<div class="overlay"></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 style="font-size:24px;" class="title">{{strtoupper($event->title)}} - {{strtoupper($event->tagline)}} </h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">               
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title parallax -->
    	
        <section class="main-content blog-posts course-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-title-single">
                            <div class="feature-post">
                                <img src="{{$event->banner_image}}" alt="{{$event->title}}">
                            </div><!-- /.feature-post -->
                            <div class="course-widget-price">
                                <h4 class="course-title">EVENT INFO</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <span>Date</span>
                                        <span class="time">
                                        <?php $timestamp = strtotime($eventinfo->date);
                                        $newDate = date('d F Y', $timestamp); 
                                        echo $newDate; ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-leanpub" aria-hidden="true"></i>
                                        <span>Duration</span>
                                        <span class="time">{{ucwords($eventinfo->duration)}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span>Start Time</span>
                                        <span class="time">{{$eventinfo->time}} AM</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Location</span>
                                        <span class="time">{{ucwords($eventinfo->location)}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <span>Participation</span>
                                        @if($eventinfo->participation == 'group')
                                        	<span class="time">{{$eventinfo->number_of_students}} Students / {{ucwords($eventinfo->participation)}}</span>
                                        @else
                                        	<span class="time">{{ucwords($eventinfo->participation)}}</span>
                                        @endif	
                                    </li>
                                    <li>
                                        <i class="fa fa-flag" aria-hidden="true"></i>
                                        <span>Departments</span>
                                        <span class="time">{{strtoupper($eventinfo->eligible_departments)}}</span>
                                    </li>
                                </ul>
                                <h5 class="bt-course">Participation Fees: <span>₹{{$eventinfo->fees}}</span></h5>
                                @if($event->status == 'active')
                               		   <a class="flat-button bg-orange" style="background: rgb(255, 69, 0,);border-color: rgba(199, 195, 187, 0.88);"  data-toggle="modal" data-target="#myModal">PARITCIPATION OPEN</a>
                                    <!-- <a class="flat-button bg-orange" data-toggle="modal" data-target="#myModal">PARTICIPATE</a> -->
                                @else
                                	<a class="flat-button bg-orange" style="background: rgba(199, 195, 187, 0.88);border-color: rgba(199, 195, 187, 0.88);">PARITCIPATION CLOSED</a>
                            	@endif
                            </div>
                            <div class="entry-content">
                                <h4 class="title-1 bold">ABOUT THE EVENT</h4>
                                <p>
                                    {{$event->about_event}}
                                </p> 

                                <div class="flat-spacer h8px"></div>
                                <h4 class="title-1 bold">EVENT THEME</h4>
                                <p>
                                    {{$event->event_theme}}
                                </p>
                                <ul class="flat-list color-black">     
                                    @foreach($keypoints as $points)
                                    	<li>{{$points}}</li> 
                                    @endforeach                                       
                                </ul> 
                            </div>    
                            <br>
                            <div class="entry-content">   
                                <!-- SCHEDULE -->
                                <div class="col-md-6">
                                    <ul class="curriculum">
                                            <li class="section">
                                                <h4 class="section-title">Schedule</h4>
                                                <ul class="section-content">
                                                    @if(empty($schedules))
                                                        <h3>Coming Soon</h3>
                                                    @endif
                                                    @foreach($schedules as $schedule)
                                                        <li class="course-lesson">
                                                            <a href="#" class="lesson-title">{{$schedule->title}}</a>
                                                            <div class="fr">
                                                                <span class="duration">{{$schedule->start_time}} - {{$schedule->end_time}}</span>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <!-- PROBLEM DEFINATIONS -->
                                    <div class="col-md-6">
                                    <ul class="curriculum">
                                            <li class="section">
                                                <h4 class="section-title">Suggested Problem Definitions</h4>
                                                <ul class="section-content">
                                                    <a href="/event/algorithm-3.0/problem-definitions" class="flat-button bg-orange">CLICK HERE</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> 

                            </div><!-- /.entry-post -->
                        </div><!-- /.main-post -->

                    </div><!-- /col-md-8 -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /main-content -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="padding-top: 100px;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PARTICIPATION FORM (Min 1 Participants)</h4>
      </div>
      <div class="modal-body">
         {!! Form::open(array('url'=>'/event/participant','id' => '','class' => 'flat-contact-form style2 bg-dark height-small' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
            <div class="row">
                <input type="hidden" name="event_id" required="" value="{{$event_id}}">
                <div class="col-md-3">
                    <input type="text" name="team" required="" class="form-control" placeholder="Team Name">
                </div>
                <div class="col-md-3">
                    <input type="text" name="college" required="" class="form-control" placeholder="College">
                </div>
                <div class="col-md-3">
                    <input type="text" name="department" required="" class="form-control" placeholder="Department">
                </div>
                <div class="col-md-3">
                    <select name="year" class="form-control" required="">
                        <option value="">--SELECT YEAR--</option>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="name1" required="" class="form-control" placeholder="Participant 1 Name">
                </div>
                <div class="col-md-4">
                    <input type="email" name="email1" required="" class="form-control" placeholder="Participant 1 Email">
                </div>
                <div class="col-md-4">
                    <input type="text" name="mobile1" required="" class="form-control" placeholder="Participant 1 Mobile">
                </div>

                 <div class="col-md-4">
                    <input type="text" name="name2" class="form-control" placeholder="Participant 2 Name">
                </div>
                <div class="col-md-4">
                    <input type="email" name="email2" class="form-control" placeholder="Participant 2 Email">
                </div>
                <div class="col-md-4">
                    <input type="text" name="mobile2" class="form-control" placeholder="Participant 2 Mobile">
                </div>
                 <div class="col-md-4">
                    <input type="text" name="name3" class="form-control" placeholder="Participant 3 Name">
                </div>
                <div class="col-md-4">
                    <input type="email" name="email3" class="form-control" placeholder="Participant 3 Email">
                </div>
                <div class="col-md-4">
                    <input type="text" name="mobile3" class="form-control" placeholder="Participant 3 Mobile">
                </div>
            </div> 
            <div class="col-md-4">
                    <input type="text" name="name4"  class="form-control" placeholder="Participant 4 Name">
                </div>
                <div class="col-md-4">
                    <input type="email" name="email4" class="form-control" placeholder="Participant 4 Email">
                </div>
                <div class="col-md-4">
                    <input type="text" name="mobile4"  class="form-control" placeholder="Participant 4 Mobile">
                </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-sm">Submit</button>
        {!! Form::close() !!}
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop