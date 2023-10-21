@extends('layout.app')
@section('content')
    <!-- Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="parallax-mask"></div>
            <div class="section-name">
                <h2>About Us</h2>
                <div class="short-text">
                    <h5>Home<i class="fa fa-angle-double-right"></i>About Us</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- about wrapper -->
    <div class="about-page-wrapper">
        <div class="description container">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="image-wrapper">
                        <img class="img-responsive" src="assets/img/featured-image-11.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="about-right-text">
                        <div class="widget-title">
                            <h4>Hi We Provide Worldwide Charity Service Since 1978</h4>
                        </div>
                        <p class="first">
                            We are a passionate and dedicated team committed to making a positive impact on the world. Our
                            journey began with a shared vision - a vision of a better, more compassionate world. Our belief
                            in the power of collective action drives us to work tirelessly toward this goal.
                        </p>
                        <p class="second">
                            With a focus on critical issues like clean water access, poverty alleviation, and environmental
                            conservation, we are actively involved in bringing about change. Our unwavering dedication to
                            these causes is fueled by the belief that every small effort counts.
                        </p>
                        <p class="third">

                            Our work goes beyond words; it's defined by action. We believe in creating real change, one
                            project at a time. Our hands-on approach, coupled with the support of volunteers and partners,
                            allows us to turn vision into reality.
                        </p>
                        <p class="third">

                            Through the years, we've seen countless lives transformed, communities empowered, and the
                            environment restored. Our success stories are a testament to the difference that passionate
                            people can make when they come together with a common purpose.
                        </p>
                        <p class="third">

                            As we move forward, we invite you to join us on this journey. Together, we can create a world
                            where everyone has access to the basic necessities, where poverty is reduced, and where our
                            environment is protected for future generations. Be a part of our story, and let's write a
                            brighter future together.</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- team -->
        <div class="team-wrapper">
            <div class="container">
                <div class="section-name one">
                    <h2>our volunteers</h2>
                    <div class="short-text">
                        <h5>We are all times support them for their smile</h5>
                    </div>
                </div>

                <div class="team-members row">

                    @foreach ($volunteers as $volunteer)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="best-volunteer">
                                    <div class="voluntee-image">
                                        <a href="#" title=""><img
                                                src="/storage/volunteer_resumes/{{ $volunteer->image }}" alt=""></a>
                                    </div>

                                    <span
                                        style="
                                    margin-top: 10px;
                                "><a
                                            href="#" title="">{{ $volunteer->interested_in }}</a></span>
                                    <h2><a href="#"
                                            title="">{{ $volunteer->first_name . ' ' . $volunteer->last_name }}</a>
                                    </h2>
                                    <p>{!! Str::substr($volunteer->description, 0, 90) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="partners">
            <div class="container">
                <div class="row">
                    <div id="partners-slider" class="owl-carousel owl-theme owl-transition clearfix">
                        <div class="item">
                            <a href="#"><img class="img-responsive" style="height: 100px" src="assets/img/others/logo-1.png"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="img-responsive" style="height: 100px" src="assets/img/others/logo-3.png"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="img-responsive" style="height: 100px" src="assets/img/others/logo-2.png"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="img-responsive" style="height: 100px" src="assets/img/others/logo-4.png"
                                    alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="img-responsive"  style="height: 100px" src="assets/img/others/logo-5.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
