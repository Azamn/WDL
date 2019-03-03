@extends('frontend.master')
@section('title')
Tutorials - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop
@section('keywords')
programmersclub, programmers club, programmersclub.co.in,armash fankar,aiktc.org,kalsekar technical campus,computer engineering,programmers,coding,laravel,php,event,college event,panel,engineering,college events,coding,hackers,code,mongodb,python,sql,mysql,query,database,java,springs,linux,ubuntu,open source
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
                            <h2 class="title">TUTORIALS</h2>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">                  
                        </div><!-- /.breadcrumbs --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /page-title parallax -->
        <div class="flat-post-ordering clearfix" style="margin-top: 12px;margin-right: 12px;margin-bottom:-50px;">
            <div class="sort-views">
                <div class="widget widget_search">
                    {!! Form::open(array('url'=>'/tutorials/search','id' => '','class' => 'search-form' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                        <input type="search" style="border-color: #000;" autocomplete="off" name="search" class="search-field" placeholder="Search …">
                        <input type="submit" class="search-submit">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <section class="main-content blog-posts blog-grid have-sidebar">
            <div class="container">
                <div class="post-content">
                    <div class="post-wrap clearfix">
                        @foreach($tutorials as $tut)
                            <article class="post flat-hover-zoom">
                                <div class="featured-post">
                                    <div class="entry-image">
                                        <img src="{{$tut->image_src}}" alt="{{$tut->title}}">
                                    </div>
                                </div>
                                <div class="content-post">
                                    <h2 class="title-post">
                                        <a href="{{$tut->link}}" target="_blank">{{ucwords($tut->title)}}</a>
                                    </h2>

                                    <div class="entry-content">
                                        <p>{{$tut->description}}</p>
                                    </div><!-- /entry-post -->
                                </div><!-- /content-post -->
                            </article><!-- /post -->
                        @endforeach    

                    </div><!-- /post-wrap -->
                    <div class="blog-pagination text-center">{!! $tutorials->render() !!}</div>
                   
                    </div>
                </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /main-content -->
@stop