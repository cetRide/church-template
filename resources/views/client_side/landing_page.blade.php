@extends('layouts.front_default')
@section('content')
    <div class="landing-container">
        {{--Section one--}}
        <div class="background-section-one intro" style="padding:0  !important;">
            <div style="background: rgba(0, 0, 0, 0.5);min-height: 500px;">
                <div id="boxholder">
                    <div class="row collapsed expanded" style="padding-left: 15px;padding-right: 15px;">
                        <div class="large-3 small-4 columns" style="padding-top:25px;">
                            <a href="">
                                <img src="/landingpage_images/the-alma-logo.png" alt="Cytonn Investments" class="logo">
                            </a>
                        </div>
                        <div class="row">
                            <div class="large-5 small-12 columns large-offset-4 book" style="padding-top:25px;">
                                <a href="https://cytonnrealestate.com/the-alma" class="secondary hollow button"
                                   target="_blank" id="large-5"> Visit Main Site</a>
                                <a href="https://crm.cytonn.com/clientevents/slug/weekly_real_estate_site_visit"
                                   class="secondary hollow button" target="_blank"
                                   style="background-color: white; color: black">
                                    Book Site Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px;padding-right: 15px;">
                        <div class="large-5 columns">
                            <div class="display-table">
                                <div class="va-align large-3">
                                    <div class="row">
                                        <h5 id="hfive-sectionone" style="margin-top: 0 !important;">
                                            Enjoy a long term purchase plan with zero deposit this Madaraka Season
                                        </h5>
                                        <p style="float: left;color: #fff;">
                                            <i>*Offer valid until 1<sup>st</sup> June 2019</i>
                                        </p>
                                    </div>
                                    <div class="row" style="float: left;">
                                        <a href="#contacts-form" class="secondary hollow button"> Reserve a Unit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Section Price--}}
        <div class="price" style="display: flex;justify-content: center;">
            <div id="boxholder" class="row collapsed expanded" style="padding-left: 15px;padding-right: 15px;">
                <div class="large-12 large-offset-0 medium-12 small-12 columns">
                    <h2 id="h2" style="margin-top: 0;padding-top:0;"> Here's your opportunity to start your journey to
                        owning your dream home.</h2>
                </div>

            </div>
        </div>

        {{--Scetion Two--}}
        <div class="about">
            <div id="boxholder">
                <div class="row" style="padding-left: 15px;padding-right: 15px;">
                    <div class="large-8 columns large-offset-2 overview" style="text-align: left;">
                        <h3>About The Alma</h3>
                        <div class="overview" style="text-align: left;">
                            <p>The Alma is a comprehensive residential development in Ruaka that was inspired by the
                                need to create a convenient lifestyle for homeowners who are looking for a live, work
                                and play environment.</p>
                            <p>The development has 9 blocks with 477 units and features 1, 2 and 3 bedroom apartments.</p>
                            <p>Complementary amenities include: a parking bay, a retail center, a lift for every block,
                                elevated children’s playgrounds, a swimming pool and a gym, back-up generators, 24/7
                                security and CCTV surveillance.</p>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div>

        {{--Section Three--}}
        <div class="background-section-video intro-video">
            <div class="info">
                <div class="row collapsed expanded">
                    <div class="large-12 columns video" style="margin-top: 100px; margin-bottom: 100px">
                        <a class=" hollow button" id="playvideo"
                           href="https://www.youtube.com/embed/CMjWP1HjPuU"
                           target="_blank">
                            <i class="fa fa-play-circle" aria-hidden="true"></i> WATCH THE VIDEO
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-box" style="margin-top: 1px;">
            <div class="row collapse expanded">
                <div id="boxholder">
                    <div class="small-12 medium-6 column small-order-1 medium-order-2 login-box-social-section">
                        <div class="login-box-form-section">
                            <h1 class="login-box-title">Get in touch with us</h1>

                            <p>Cytonn Real Estate would like to work with you hand in hand and help you get your dream
                                home</p>
                            <br>

                            <p>Connect with Us!
                                <br>
                                <b>clientservices@cytonn.com</b><br/><b>sales@cytonn.com</b></p>
                        </div>
                    </div>
                    <div class="small-12 medium-6 column small-order-2 medium-order-1 section-six">
                        <div class="login-box-form-section contacts-form" id="contacts-form">
                            <h2 class="login-box-title">Start your home ownership journey with Cytonn today</h2>

                            @if (Session::has('flash_notification.message'))
                                @if(Session::get('flash_notification.message') === 'Your Contacts have been Saved Successfully')
                                    <div data-alert
                                         class="alert-box {{ Session::get('flash_notification.level') }}">
                                        {{ Session::get('flash_notification.message') }}
                                        <a href="#" class="close">&times;</a>
                                    </div>
                                @endif
                            @endif

                            @if(Session::has('error_message'))
                                <div class="alert-box alert form-errors">
                                    {{ Session::get('error_message') }}
                                </div>
                            @endif

                            <form action="/introduction/leads/save">
                                <input type="hidden" value="{{csrf_token()}}">
                                <label>First Name</label>
                                <input class="login-box-input" type="text" name="firstname" required/>
                                <label>Last Name</label>
                                <input class="login-box-input" type="text" name="lastname" required/>
                                <label>Email Address</label>
                                <input class="login-box-input" type="email" name="email" required/>
                                <label>Phone Number</label>
                                <input class="login-box-input" type="text" name="phone_number"/>

                                <div class="row">
                                    <div class="small-12 medium-12 columns medium-order-1">
                                        <input type="hidden" value="{{$code}}" name="code">
                                        {!! Form::captcha() !!}
                                    </div>
                                </div>
                                <input class="login-box-submit-button" type="submit" name="submit" value="Submit"/>
                            </form>
                        </div>
                    </div>
                    <div class="small-12 medium-1 column small-order-2 medium-order-1">
                    </div>
                </div>
            </div>
        </div>

        {{--Section Footer--}}
        <div class="footer" style="display: flex;align-items: center;justify-content: center;">
            <div id="boxholder">
                <div class="footer-links">
                    <div class="small-12 medium-12 large-12 columns">
                        <div class="small-4 medium-4 large-4 columns">
                            <ul class="menu vertical" style="text-align: left">
                                <li><i class="fa fa-map-marker" style="color: #868686;"></i> Nairobi, Kenya</li>
                                <li><i class="fa fa-envelope" style="color: #868686;"></i> sales@cytonn.com</li>
                                <li><i class="fa fa-phone" style="color: #868686;"></i> 020 392 9000</li>
                            </ul>
                        </div>

                        <div class="small-4 medium-4 large-4 columns">
                            <ul class="menu vertical" style="text-align: left">
                                <li><i class="fa fa-map-marker" style="color: #868686;"></i> United States</li>
                                <li><i class="fa fa-phone" style="color: #868686;"></i> +1 (301) 982-2560</li>
                                <li><i class="fa fa-phone" style="color: #868686;"></i> +1 (301) 825-9948</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


