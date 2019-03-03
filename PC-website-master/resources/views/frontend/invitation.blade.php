@extends('frontend.master')
@section('title')
Invitation - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop

@section('content')
<div class="page-title parallax parallax4"> 
    	<div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h2 class="title">{{ $invitation->name }}</h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">                 
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="" style="width : 80%; margin-left:10%; text-align : justify;">
                {!! $invitation_letter->body !!}
            </div><!-- /.container -->
        </section>
@stop