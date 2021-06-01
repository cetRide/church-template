@extends('layouts.front_default')

@section('content')

    {{-- The Top Bar Menu--}}
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="logo">
                    <a href="/">
                        <img src="/site_images/ccm-logo.jpg">
                    </a>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <!-- Left Nav Section -->
                <ul class="left">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-us">About us</a></li>
                    <li><a href="/ministries">Ministries</a></li>
                    {{--                    <li class="has-dropdown">--}}
                    {{--                        <a>News</a>--}}
                    {{--                        <ul class="dropdown">--}}
                    {{--                            <li><a href="/news-and-updates">New and Updates</a></li>--}}
                    {{--                            <li><a href="/project-progress">Project Progress</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <li class="current"><a href="/contact">Contact</a></li>
                    <li class="telephone"><i class="fa fa-tty"></i> &nbsp;+254 712 345 678</li>
                    <li><a href="/contact">Donate Online</a></li>
                </ul>

            </section>
        </nav>
    </div>

    <div class="contact-page">

        {{-- The Hero section of the home page--}}
        <div class="contact-banner" style="margin-top: 100px;">
            <div class="row">
                <div class="contact-hero-unit-info columns medium-12">
                    <h2><strong>CONTACT</strong> US</h2>
                </div>
            </div>
        </div>

        {{-- Contact details section--}}
        <div class="contact-details">
            <div class="row">
                <div class="large-12 columns">
                    <div class="contact-divider">
                        <img src="/site_images/contactline.jpg">
                    </div>
                </div>
                <div class="large-12 columns">
                    <div class="contact-details-title">
                        <h2><span>OUR</span> CONTACT INFO</h2>
                    </div>
                </div>

                <div class="large-12 columns">
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <div class="contact-address">
                              <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-map-marker fa-stack-1x"></i>
                              </span>
                                <h4>Address Details</h4>

                                <p class="office">Our Location</p>

                                <p>Covenant Church Chapel Ministry</p>

                                <p>Zimmerman, Nairobi, Kenya</p>
                            </div>
                        </div>
                        <div class="large-4 medium-4 columns">
                            <div class="contact-telephone">
                             <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                               <i class="fa fa-mobile fa-stack-1x"></i>
                             </span>
                                <h4>Telephone</h4>

                                <p>+254 712 345 678</p>

                                <p>+254 712 345 678</p>
                            </div>
                        </div>
                        <div class="large-4 medium-4 columns">
                            <div class="contact-email">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-envelope fa-stack-1x"></i>
                          </span>
                                <h4>Email Address</h4>

                                <p>ccm@gmail.com</p>

                                <p>infoccm@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact Form Section--}}
        <div class="contact-form">
            <div class="row">
                <div class="large-12 columns">
                    <div class="contact-divider">
                        <img src="/site_images/contactline1.jpg">
                    </div>
                </div>

                <div class="large-6 large-centered  medium-6  medium-centered columns">
                    <div class="contact-form-title">
                        <h2>WRITE TO US: </h2>
                    </div>
                </div>
                <div class="large-8 large-centered  medium-8  medium-centered columns">
                    <div class="contact-form-details">
{{--                        {!! Form::open(['route' => 'message.post']) !!}--}}

                        @include('layouts.partials.frontformfeedback')

                        <div class="row">
                            <div class="large-6 medium-6 columns">
                                <input type="text" required placeholder="First Name" id="first_name" >
                            </div>
                            <div class="large-6 medium-6 columns">
                                <input type="text" required placeholder="Last Name" id="second_name" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 medium-6 columns">
                                <input type="email" required placeholder="Email" id="email">
                            </div>
                            <div class="large-6 medium-6 columns">
                                <input type="text" placeholder="Phone Number" id="phone_number">
                            </div>
                        </div>
                        <input type="text" required placeholder="Subject" id="subject">
                        <textarea name="" cols="30" rows="10" required placeholder="Your Message" id="message"></textarea>
                        <br/>
                        <button type="submit" class="button small-12 large-12 medium-12">SEND</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    {{--Page Footer Inclusion--}}
    @include('layouts.partials.frontsidefooter')
@stop
