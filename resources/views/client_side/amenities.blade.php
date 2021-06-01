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
                    <li class="current"><a href="/ministries">Ministries</a></li>
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

    <div class="amenities-page">

        {{-- The Hero section of the Amenities page--}}
        <div class="amenities-hero-unit">
            <div class="row">
                <div class="large-8 large-centered columns">
                    <div class="amenities-hero-unit-info">
                        <p>
                            Helping Grow Your Faith At <strong>Covenant Chapel Ministry</strong>
                        </p>
                        <div class="hero-unit-info-links">
                            <a href="/contact" class="button custom-button">Join Ministry now</a>
                        </div>
                        <div class="hero-unit-arrow">
                            <a href="#introduction"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Introduction section--}}
        <div class="amenities-intro" id="introduction">
            <div class="row">
                <div class="large-5 medium-5 end columns">
                    <h2>Join A Group</h2>

                    <p>
                        Become a part of any community within our church and meet other members. </p>
                </div>
            </div>
        </div>

        {{-- Amenities details--}}
        <div class="amenities-details-arrival">
            <div class="row">
                <div class="large-1 medium-1 columns">
                    <hr/>
                    <span>01.</span>
                </div>
                <div class="large-5 medium-5 columns">
                    <h2>Ministry one</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris
                        sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros
                        dignissim.…</p>
                </div>
                <div class="large-6 medium-6 columns">
                    <img class="thumbnail" src="/site_images/amenities_arrival.jpg">
                </div>
            </div>
        </div>

        <div class="amenities-details-retail">
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <img class="thumbnail" src="/site_images/amenities_retail.jpg">
                </div>
                <div class="large-5 medium-5 columns">
                    <h2>Ministry Two</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris
                        sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros
                        dignissim.
                    </p>
                </div>
                <div class="large-1 medium-1  columns">
                    <hr/>
                    <span>02.</span>
                </div>
            </div>
        </div>

        <div class="amenities-details-restaurant">
            <div class="row">
                <div class="large-1 medium-1 columns">
                    <hr/>
                    <span>03.</span>
                </div>
                <div class="large-5 medium-5 columns">
                    <h2>Ministry Three
                    </h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris
                        sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros
                        dignissim.
                    </p>
                </div>
                <div class="large-6 medium-6 columns">
                    <img class="thumbnail" src="/site_images/amenities_parking.jpg">
                </div>
            </div>
        </div>

        <div class="amenities-details-playground">
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <img class="thumbnail" src="/site_images/amenities_playground.jpg">
                </div>
                <div class="large-5 medium-5 columns">
                    <h2>Ministry Four</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris
                        sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros
                        dignissim.
                    </p>
                </div>
                <div class="large-1 medium-1 columns">
                    <hr/>
                    <span>04.</span>
                </div>
            </div>
        </div>

        <div class="amenities-details-pool">
            <div class="row">
                <div class="large-1 medium-1 columns">
                    <hr/>
                    <span>05.</span>
                </div>
                <div class="large-5 medium-5 columns">
                    <h2>Ministry Five</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris
                        sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros
                        dignissim.
                    </p>
                </div>
                <div class="large-6 medium-6 end columns">
                    <img class="thumbnail" src="/site_images/amenities_pool.jpg">
                </div>
            </div>
        </div>

        <div class="amenities-details-gym">
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <img class="thumbnail" src="/site_images/amenities_gym.jpg">
                </div>
                <div class="large-5 medium-5 columns">
                    <h2>Ministry Six</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris
                        sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros
                        dignissim.
                    </p>
                </div>
                <div class="large-1 medium-1 columns">
                    <hr/>
                    <span>06.</span>
                </div>
            </div>
        </div>
    </div>

    {{--Page Footer Inclusion--}}
    @include('layouts.partials.frontsidefooter')

@stop