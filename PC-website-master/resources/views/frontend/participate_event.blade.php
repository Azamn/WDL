@extends('frontend.master')
@section('title')
Participate {{$event->title}} &nbsp; {{$event->tagline}} - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop
@section('keywords')
programmersclub, programmers club, programmersclub.co.in,armash fankar,aiktc.org,kalsekar technical campus,computer engineering,programmers,coding,laravel,php,event,college event,panel,engineering,college events,coding,hackers,code,mongodb
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
                            <h2 style="font-size:24px;" class="title">PARTICIPATE IN {{strtoupper($event->title)}}</h2>
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
                        <div id="respond" class="comment-respond contact style2">
                            <h1 class="title comment-title">PARTICIPATION FORM</h1>
                            {!! Form::open(array('url'=>'/contact-us','id' => '','class' => 'flat-contact-form style2 bg-dark height-small' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                                <div class="field clearfix">      
                                    <div class="wrap-type-input">                    
                                        <div class="input-wrap name">
                                            <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                                        </div>
                                        <div class="input-wrap name">
                                            <input type="text" value="" tabindex="2" placeholder="Mobile" name="mobile" id="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-wrap">
                                    <button type="submit" class="flat-button bg-orange">Send Your Message</button>
                                </div>
                            {!! Form::close() !!}<!-- /.comment-form -->                     
                        </div><!-- /#respond -->
                    </div><!-- /col-md-8 -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /main-content -->

@stop