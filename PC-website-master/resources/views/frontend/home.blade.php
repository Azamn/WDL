@extends('frontend.master')
@section('title')
Home - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop
@section('keywords')
programmersclub, programmers club, programmersclub.co.in,armash fankar,aiktc.org,kalsekar technical campus,computer engineering,programmers,coding,laravel,php,event,college event,panel,engineering,college events,coding,hackers,code,mongodb
@stop
@section('description')
In Programmers Club, we truly believe in the power of illustration and transformation; thus, engaging and inspiring young programmers to come together on a single platform where they can interact with each other and share their innovative ideas.At Programmers Club, our mission is to make students take advantage of the resources provided and help them build their skills by providing them A clear understanding to define their goals.
@stop
@section('content')

  <!-- Slider -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        @foreach($sliders as $slider)
                            <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                                <img src="{{$slider->image_src}}" alt="slider-image" style="height:768;widht:1024";/>
                                <div class="tp-caption sfl title-slide center" data-x="174" data-y="250" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                                   <!-- EDUCATE HTML TEMPLATES -->
                                </div>
                                <div class="tp-caption sfr desc-slide center" data-x="256" data-y="310" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- /.tp-banner-container -->

            <div class="flat-row course row-bg">
                <div class = "container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 flat-pdr-100">
                            <h1 class="title-course">What we learn after we know it all, is what counts.</h1>

                            <p class='flat-lh-25' style="font-size: 16px;">
                                Programmers Club is the best platform for you to polish & develop your programming & technical skills. Programmers Club helps you to meet new people, interact, share and gain knowledge about different programming aspects and languages. It helps you to improve your technical as well as problem solving skills.
                            </p>

                            <div class="flat-spacer"></div>

                            <div class="flat-button-container">
                                <a class="flat-button orange" href="/workshops">VIEW WORKSHOPS</a>
                                <a class="flat-button orange" href="/tutorials">VIEW TUTORIALS</a>
                            </div>

                        </div>

                        <!-- <div class="col-md-5 col-sm-12">
                            <ul class = "flat-course-images">
                                <li>
                                    <img src="/frontend/images/index/py.jpg" alt="Python"/>
                                </li>

                                <li>
                                    <img src="/frontend/images/index/laravel.jpg" alt="Laravel"/>
                                </li>

                                <li>
                                    <img src="/frontend/images/index/java.jpg" alt="Java"/>
                                </li>

                                <li>
                                    <img src="/frontend/images/index/php.jpg" alt="PHP"/>
                                </li>

                                <li>
                                    <img src="/frontend/images/index/wordpress.jpg" alt="Wordpress"/>
                                </li>

                                <li>
                                    <img src="/frontend/images/index/mongodb.jpg" alt="MongoDB"/>
                                </li>
                            </ul>
                        </div> -->

                    </div>
                </div>
            </div><!-- /.flat-row -->


             <div class="flat-row course row-bg">
                <div class = "container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 flat-pdr-100">
                            <h1 class="title-course text-center">PARTICIPATE IN ALGORITHM 4.0</h1>

                            <p class='flat-lh-25 text-center' style="font-size: 16px;">
                                The objective of this technical event is to bring the students of different institutes together to interact and offer a new focus for IT students on the challenges of meeting global demands over social causes in a sustainable way. The event will touch on programmer's ability to solve social issues and know how to highlight their knowledge to target the problems in more effective and efficient ways.
                            </p>

                            <div class="flat-spacer"></div>

                            <div class="flat-button-container text-center">
                                <a class="flat-button blue" href="/event/algorithm-4o-where-logic-meets-creativity">PARTICIPATE NOW!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.flat-row -->

            

            <div class="flat-row join-us parallax parallax1 overlay bg-222">
                <div class="overlay bg-222">
                    <div class="container">
                        <div class="row">

                            <div class="counter-content">
                                <span class="counter-prefix">Join</span>
                                <div class="numb-counter">
                                    <div class="numb-count" data-to="200" data-speed="1000" data-waypoint-active="yes">0</div>
                                </div>
                                <span class="counter-suffix"><span style="color: #ffaa30;font-size: 55px;font-family: 'Montserrat', sans-serif;">+</span>students</span>
                            </div>

                            <p>Programmers Club 
                            lps you to effectively organize your daily workload into different dedicated activities, so that you can balance your academics along with real world programming tasks.</p>

                            <a href="/contact" class="flat-button">JOIN NOW</a>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>
            </div>



           <!--  <section class="flat-row partners">
                <div class="container">
                    <ul class="partners-slider">
                        <li>
                            <img alt="owlcarousel-item-img" src="images/clients/Logo-01.jpg"/>
                        </li>
                        <li>
                            <img alt="owlcarousel-item-img" src="images/clients/Logo-02.jpg"/>
                        </li>
                        <li>
                            <img alt="owlcarousel-item-img" src="images/clients/Logo-03.jpg"/>
                        </li>
                        <li>
                            <img alt="owlcarousel-item-img" src="images/clients/Logo-04.jpg"/>
                        </li>
                        <li>
                            <img alt="owlcarousel-item-img" src="images/clients/Logo-05.jpg"/>
                        </li>
                        <li>
                            <img alt="owlcarousel-item-img" src="images/clients/Logo-06.jpg"/>
                        </li>
                    </ul>
                </div>
            </section> -->

            <section class="flat-row testimonial">
                <div class="container">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                   "Programmers Club is striving hard to enhance the Skill of college Students.They are organizing company standard workshop.The good thing i like is that student teaches to student."
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">DR. ABDUL RAZAK HONNUTAGI</strong>
                                    <div class="author-info">DIRECTOR - KALSEKAR TECHNICAL CAMPUS</div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                  “The members of Programmers Club have shown excellent performance in this academic year in all activities conducted by them. They always try to devise innovative programs for the benefit of the college students.”
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">PROF.TABREZ KHAN</strong>
                                    <div class="author-info">HOD-DEPARTMENT OF COMPUTER ENGINEERING</div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                  "Programmers Club provides great service for young individuals who are very passionate about programming. They provide great guidance, clean code and fast return times together with competitive technology." 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">MR.ARSHAD ANSARI</strong>
                                    <div class="author-info">CO-FOUNDER FITRANGI.COM</div>
                                </div>
                            </div>
                        </div>

                         <div class="testimonial">
                            <div class="testimonial-content">
                                <blockquote>
                                  "Programmers Club is one of the friendliest groups I’ve ever came across. The group is extremely supportive and willing to share advice and expertise. Not only is provides best platform to explore your skills, but it’s also a fun, relaxed way to learn new technologies." 
                                </blockquote>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-author">
                                    <strong class="author-name">STUDENTS</strong>
                                    <div class="author-info">DEPARTMENT OF COMPUTER ENGINEERING</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-row news-letter">
                <div class="container">
                    <div class="have-question">
                        <h2 class="">Get notifications about Workshops, Events and Meet ups</h2>
                    </div>

                    <div class="news-letter-form">
                        <div class="widget-mailchimb">
                            <h1 class="widget-title">NEWSLETTER</h1>
                            <p>Subscribe now and receive newsletter with programming materials, workshops, interesting project ideas and much more!</p>

                            {!! Form::open(array('url'=>'/newsletter-subscribe','id' => 'newsletter' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                                @if($errors->any())
                                    <div class="alert alert-error" id="flash">
                                        {!!  implode('',$errors->all('<li class="error">:message</li>')) !!}
                                    </div>
                                @endif
                                <div id="subscribe-content">
                                    <div class="input-wrap email">
                                        <input type="text" id="subscribe-email" name="email" placeholder="Your Email Here">
                                    </div>
                                    <div class="button-wrap">
                                        <button type="submit" id="subscribe-button" class="subscribe-button" title="Subscribe now"> SUBSCRIBE </button>
                                    </div>
                                </div>
                                <div id="subscribe-msg"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </section>
@stop

@section('css')
<style>
    .flat-course .course-meta li{
        margin-right : 30px;
    }
</style>
@stop