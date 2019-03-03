@extends('frontend.master')
@section('title')
Workshops - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop
@section('keywords')
programmersclub, programmers club,programmersclub.co.in,workshops,workshop,learning,students,college,programs,armash fankar,aiktc.org,kalsekar technical campus,computer engineering,programmers,coding,laravel,php,event,college event,panel,engineering,college events,coding,hackers,code,mongodb
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
                            <h2 class="title">WORKSHOPS</h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                                 
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title parallax -->
    	
        <section class="main-content blog-posts flat-row course-grid">
            <div class="container">
                <div class="row">
                    @foreach($workshops as $workshop)
                    <div class="post-warp clearfix">
                        <div class="flat-course flat-hover-zoom">
                            <div class="featured-post">             
                                <div class="overlay">
                                    <div class="link"></div>
                                </div>
                                <div class="entry-image">                                    
                                    <a href="courses-single.html"><img src="{{ asset('frontend/images/workshop/'.$workshop->banner_image) }}" alt="{{ $workshop->title }}"></a>
                                </div>
                            </div><!-- /.featured-post -->

                            <div class="course-content">
                                <h4><a href="courses-single.html">{{ $workshop->title }}</a> </h4>

                                <div class="price">
                                    @if($workshop->fee==0)
                                        Free
                                    @else
                                        ₹ {{ $workshop->fee }}
                                    @endif
                                </div>    
                                <p>{{ $workshop->about_worjshop }}</p>

                                <ul class="course-meta desc">
                                    <li>
                                        <h6>{{ $workshop->duration }} Days </h6>
                                        <span> Course</span>
                                    </li>

                                    <li>
                                        <h6>{{ date('d/m/Y', strtotime($workshop->date)) }}</h6>
                                        <span> Date</span>
                                    </li>

                                    <li>
                                        <h6><span class="course-time">{{ date('g:i A', strtotime($workshop->start_time))}} - {{ date('h:i', strtotime($workshop->end_time)) }}</span></h6>
                                        <span>Duration</span>
                                    </li>
                                </ul> 
                            </div><!-- /.course-content -->
                        </div>
                        @endforeach

                    </div><!-- / .post-wrap -->

                   <!--  <div class="blog-pagination">
                        <ul class="flat-pagination">
                            <li><span class="active">1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>                                
                            <li class="next">
                                <a href="#">Next</a>
                            </li>                               
                        </ul><!-- /.flat-pagination -->
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /main-content -->
@stop

@section('css')
<style>
    .flat-course .course-meta li{
        margin-right : 30px;
    }
</style>
@stop