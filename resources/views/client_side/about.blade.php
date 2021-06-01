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
                    <li class="current"><a href="/about-us">About us</a></li>
                    <li><a href="/ministries">Ministries</a></li>
                    {{--                    <li class="has-dropdown">--}}
                    {{--                        <a>News</a>--}}
                    {{--                        <ul class="dropdown">--}}
                    {{--                            <li><a href="/news-and-updates">New and Updates</a></li>--}}
                    {{--                            <li><a href="/project-progress">Project Progress</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <li><a href="/contact">Contact</a></li>
                    <li class="telephone"><i class="fa fa-tty"></i> &nbsp;+254 712 345 678</li>
                    <li><a href="/contact">Donate Online</a></li>
                </ul>


            </section>
        </nav>
    </div>
    <div class="about-page">

        {{-- The Hero section of the home page--}}
        <div class="about-hero-unit">
            <div class="row">
                <div class="hero-unit-info columns medium-12">
                    <h2 style="font-weight: lighter">About Us</h2>
                    <div class="hero-unit-arrow">
                        <a href="#me"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- About --}}
        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
            <div class="large-4  medium-4 columns">
                <p class="text-center" style="font-size: 20px;">Vision</p>
                <span>To gather men to Christ, become a family, mould them into a Christ-like
                    Character, Empower For Ministry, and send them to change the world to glorify God.</span>
            </div>
            <div class="large-4  medium-4 columns">
                <p class="text-center" style="font-size: 20px;">Mission</p>
                <span>
                    To be a leading Christian ministry in Touching Lives and Changing
                    the world through LIBERATION, EMPOWERMENT & creating opportunities
                    for MINISTRY TO HAPPEN across the world.
                </span>
            </div>
        </div>
        <div class="text-center">
            <span style="font-size: 30px; font-weight: lighter">What We do</span>
            <hr style="width:25%; margin-left:37.5% !important; margin-right:40% !important; border: 1px solid #912842;">
            <div class="row">
                <div class="large-4  medium-4 columns">
                    <div style="width: 100%; height: 300px">
                        <img style='height: 100%; width: 100%; object-fit: cover'
                             src="/site_images/me-pray.jpg">
                    </div>
                    <h3 style="font-weight: lighter">Serve the <i>Church</i></h3>
                    <hr style="width:25%; margin-left:37.5% !important; margin-right:40% !important; border: 1px solid #912842;">
                    <p>Our weekday and weekend gatherings take a lot of people to make them work, from ushers to
                        greeters, youth and adult group leaders, our care ministry and everywhere in-between.</p>
                </div>
                <div class="large-4  medium-4 columns">
                    <div style="width: 100%; height: 300px">
                        <img style='height: 100%; width: 100%; object-fit: cover'
                             src="/site_images/me-pray.jpg">
                    </div>
                    <h3 style="font-weight: lighter">Serve the <i>City</i></h3>
                    <hr style="width:25%; margin-left:37.5% !important; margin-right:40% !important; border: 1px solid #912842;">
                    <p>We seek and are committed to building relationships and have intentional and strategic
                        partnerships where we can work alongside the work God is already doing in our city.
                    </p>
                </div>
                <div class="large-4  medium-4 columns">
                    <div style="width: 100%; height: 300px">
                        <img style='height: 100%; width: 100%; object-fit: cover'
                             src="/site_images/me-pray.jpg">
                    </div>
                    <h3 style="font-weight: lighter">Serve the <i>World</i></h3>
                    <hr style="width:25%; margin-left:37.5% !important; margin-right:40% !important; border: 1px solid #912842;">
                    <p>We believe God has called us to be a church that that follows Him by turning our hearts and our
                        focus to global communities by serving our neighbor where they are.</p>
                </div>
            </div>
        </div>
        <div class="the-church row" id="me">
            <div class="large-7 medium-7 columns ch-info">
                <span>The Church</span>
                <h3 style="font-size: 40px; font-weight: lighter">We are a church that believes in Jesus & loves God and
                    people</h3>
                <hr style="margin-left: 0; width: 100px; border: 1px solid #912842">
                <p style="margin-top: 30px">We are a church that believes in Jesus, a church that loves God and people.
                    Overwhelmed by the gift of
                    salvation we have found in Jesus, we have a heart for authentic worship, are passionate about the
                    local
                    church, and are on mission to see God’s kingdom established across the earth. We are a church that
                    believes in Jesus, a church that loves God and people.</p>
                <a href="/contact" class="button hollow-button">Contact us
                    <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="large-5 medium-5 columns ch-info">
                <div class="abt-img">
                </div>
                <div style="margin-top: 20px">
                    <span>Murith & Tryphosa</span>
                    <p>Senior Pastors of Covenant Chapel Ministry</p>
                </div>
            </div>
        </div>

    </div>
    {{--Page Footer Inclusion--}}
    @include('layouts.partials.frontsidefooter')
@stop
