@extends('layout.app')

@section('content')
    <!-- basic-slider start -->
    <div class="slider-section">
        <div class="slider-active owl-carousel">
            <div class="single-slider slider-screen nrbop bg-black-alfa-40"
                style="background-image: url(assets/img/slides/s1.jpg);">
                <div class="container">
                    <div class="slider-content text-white">
                        <h2 class="b_faddown1 cd-headline clip is-full-width">Clean Water for All</h2>
                        <p class="b_faddown2">We're on a mission to provide clean and safe drinking water to underserved
                            communities, <br>ensuring every drop counts towards a healthier, more equitable world.
                        </p>
                        <div class="slider_button b_faddown3"><a href="#">Donate Now</a></div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-screen nrbop bg-black-alfa-40 "
                style="background-image: url(assets/img/slides/s2.jpg);">
                <div class="container">
                    <div class="slider-content text-white">
                        <h2 class="b_faddown1 cd-headline clip is-full-width">A Hand for the Underprivileged </h2>
                        <p class="b_faddown2">We lend a helping hand to those in need, working to alleviate poverty and
                            improve lives <br> through compassionate support and essential resources.
                        </p>
                        <div class="slider_button b_faddown3"><a href="#">Donate Now</a></div>
                    </div>
                </div>
            </div>

            <div class="single-slider slider-screen nrbop bg-black-alfa-40"
                style="background-image: url(assets/img/slides/s3.jpg);">
                <div class="container">
                    <div class="slider-content text-white">
                        <h2 class="b_faddown1 cd-headline clip is-full-width">Fighting Climate Change Together </h2>
                        <p class="b_faddown2">Join us in the fight against climate change as we strive to create a more
                            sustainable planet <br> through collective action and eco-friendly practices.
                        </p>
                        <div class="slider_button b_faddown3"><a href="#">Donate Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- basic-slider end -->

    <!-- Features -->
    <div class="features-wrapper one">
        <div class="container">
            <div class="section-name one">
                <h2>What We Do</h2>
                <div class="short-text">
                    <h5>Here is all Reasons to Work With Us</h5>
                </div>
            </div>
            <div class="row features">
                @foreach ($categories as $category)
                    <div class="col-md-4 col-sm-6 ">
                        <div class="feature clearfix">
                            <div class="img-wrapper">
                                <div class="overlay">
                                </div>
                                <img class="img-responsive" src="/storage/category_images/{{ $category->image }}"
                                    alt="{{ $category->name }}" style="height: 300px">
                            </div>
                            <h4 style="margin-top: 25px">{{ $category->name }}</h4>
                            <p>{!! Str::substr($category->description, 0, 130) !!}</p>
                            <a href="{{ route('category_details', $category->id) }}"
                                class="btn btn-min btn-secondary
						"><span>Learn More</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    @if ($appeals->first())
        <!-- Special Cuase Paralax -->
        <div class="special-cause">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 donet__area_img">
                        <img src="/storage/appeal_images/{{ $appeals->first()->image }}" alt=""
                            style="height: 450px" />
                    </div>
                    <div class="col-md-6 col-xs-12 donet__area">
                        <div class="section-name parallax one">
                            <h1>special appeal Right Now</h1>
                            <h2>{{ $appeals->first()->title }}</h2>
                            <h4>{!! Str::substr($appeals->first()->description, 0, 300) !!}</h4>
                        </div>
                        <div class="foundings">
                            <div class="progress-bar-wrapper big">
                                <div class="progress-bar-outer">
                                    <div class="clearfix">
                                        <span class="value one">Rised: ${{ $appeals->first()->donated }}</span>
                                        <span class="value two">- To go: ${{ $appeals->first()->donation_goal }}</span>
                                    </div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar">
                                            <span
                                                data-percent="{{ ($appeals->first()->donated / $appeals->first()->donation_goal) * 100 }}">
                                                <span
                                                    class="pretng">{{ ($appeals->first()->donated / $appeals->first()->donation_goal) * 100 }}%</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns-wrapper">
                            <a href="#" class="btn btn-big btn-solid "><i class="fa fa-archive"></i><span>Make
                                    Donation</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Causes -->
    <div class="causes-wrapper">
        <div class="container">
            <div class="section-name one">
                <h2>Recent Appeals</h2>
                <div class="short-text">
                    <h5>Your little support can bring smile of there</h5>
                </div>
            </div>
            <div class="causes">
                <div class="causes-list row">
                    @foreach ($appeals as $appeal)
                        <div class="cause-wrapper col-md-4 col-xs-12 col-sm-6 legal health">
                            <div class="cause content-box">
                                <div class="img-wrapper">
                                    <div class="overlay">
                                    </div>
                                    <img class="img-responsive" src="/storage/appeal_images/{{ $appeals->first()->image }}"
                                        style="height: 250px" alt="">
                                </div>
                                <div class="info-block">
                                    <h4><a href="{{ route('appeal_details', $appeal->id) }}">{{ $appeal->title }}</a></h4>
                                    <p>{!! Str::substr($appeal->description, 0, 100) !!}</p>
                                    <div class="foundings">
                                        <div class="progress-bar-wrapper min">
                                            <div class="progress-bar-outer">
                                                <p class="values">
                                                    <span class="value one">Raised: ${{ $appeal->donated }}</span>-<span
                                                        class="value two">To go: ${{ $appeal->donation_goal }}</span>
                                                </p>
                                                <div class="progress-bar-inner">
                                                    <div class="progress-bar">
                                                        <span
                                                            data-percent="{{ ($appeal->donated / $appeal->donation_goal) * 100 }}">
                                                            <span
                                                                class="pretng">{{ ($appeal->donated / $appeal->donation_goal) * 100 }}%"><span
                                                                    class="pretng">55%</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="donet_btn">
                                        <a href="{{ route('appeal_details', $appeal->id) }}"
                                            class="btn btn-min btn-solid"><i class="fa fa-archive"></i><span>Donate
                                                Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <!-- work togather -->
    <div class="donation-wrapper-home work_togathers ">
        <div class="parallax-mask"></div>
        <div class="container">
            <div class="work_togather">
                <h2>Give a little &amp; change a lot.</h2>
                <h1>Let’s Work Togather!!</h1>
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
                                        title="">{{ $volunteer->first_name . ' ' . $volunteer->last_name }}</a></h2>
                                <p>{!! Str::substr($volunteer->description, 0, 90) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- Volunteers -->
    <div class="volunteers-need-wrapper volunteers-wrapper">
        <div class="parallax-mask"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="weneed-volunt info-block">
                        <h2>We Need Volunteers</h2>
                        ><p>Our mission relies on dedicated individuals like you. Join our passionate team of volunteers
                            and<br>
                            make a meaningful impact. Whether you're passionate about clean water, aiding the<br>
                            underprivileged, or fighting climate change, your time and skills can help us create
                            positive<br>
                            change. Together, we can build a better world.</p>
                        <a href="{{ route('become_volunteer') }}" class="btn btn-big"><i
                                class="fa fa-heartbeat"></i>Become a Volunteer</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- gallery -->
    <div class="volunteers-wrapper images-gallery-wrapper">
        <div class="container">
            <div class="section-name one">
                <h2>Gallery</h2>
                <div class="short-text">
                    <h5>A glimpse of our impact in images. Witness the transformation.</h5>
                </div>
            </div>
            @foreach ($images as $image)
                <div class="row">
                    @foreach ($image->images as $single_image)
                        <div class="col-sm-4 images-outer ">
                            <div class="images-inner  ">
                                <div class="nivo-activator"></div>
                                <div class="images single-images-gl clearfix">
                                    <a href="/storage/gallery_images/{{ $single_image }}" class="nivo-trigger"
                                        data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img
                                            style="height: 300px; width: 100%"
                                            src="/storage/gallery_images/{{ $single_image }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            @endforeach

        </div>
    </div>

    <!-- Blog -->
    <section class="blog-area blog-post-wrapper">
        <div class="container">
            <div class="section-name one">
                <h2>Recent News</h2>
                <div class="short-text">
                    <h5>Stay updated with our latest stories and developments. Discover how we're making a difference in
                        real time.</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- Blog Single -->
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-box">
                            <div class="blog-top-desc" style="margin-bottom: 10px">
                                <div class="blog-date">
                                    {{ $blog->created_at->format('j M Y') }}
                                </div>
                                <h4>{{ $blog->title }}</h4>
                                <i class="fa fa-folder"></i></i>
                                <strong>{!! $blog->category->name !!}</strong>
                            </div>
                            <img src="/storage/blog_images/{{ $blog->image }}" alt="{{ $blog->title }}"
                                style="width: 300px; height:300px">
                            <div class="blog-btm-desc">
                                <p>{!! Str::substr($blog->decription, 0, 100) !!}</p>
                                <a href="{{ route('blog_details', $blog->id) }}" class="btn btn-min btn-solid"> Read More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Single -->
                @endforeach

            </div>
        </div>
    </section>
@endsection
