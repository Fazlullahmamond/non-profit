@extends('layout.app')
@section('content')
    <!-- Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="parallax-mask"></div>
            <div class="section-name">
                <h2>{{ $blog->title }}</h2>
                <div class="short-text">
                    <h5>Home<i class="fa fa-angle-double-right"></i>Blog details</h5>
                </div>
            </div>
        </div>
    </div>


    <!-- Blog-Wrapper -->
    <div class="blog-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="blog-posts col-md-8">
                    <div class="blog-post single-post">
                        <a href="{{ route('blog_details', $blog->id) }}">
                            <h2>{{ $blog->title }}</h2>
                        </a>
                        <div class="meta">
                            <h5><i class="fa fa-folder-o"></i><a
                                    href="{{ route('category_blogs', $blog->category_id) }}">{{ $blog->category->name }}</a>
                            </h5>
                            <h5><i class="fa fa-clock-o"></i><a>{{ $blog->created_at->format('j M Y') }}</a></h5>

                        </div>
                        <div class="img-wrapper">
                            <img class="img-responsive" src="/storage/blog_images/{{ $blog->image }}"
                                alt="{{ $blog->title }}">

                        </div>

                        {!! $blog->description !!}

                    </div>

                </div>
               <!-- sidebar -->
               <div class="sidebar-wrapper col-md-4">
                <div class="sidebar">
                    <div class="search-bar">
                        <form action="#">
                            <div class="field">
                                <input type="text" name="search" placeholder="Type and Hit Enter">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Categories</h4>
                            <div class="sep">
                                <div class="sep-inside"></div>
                            </div>
                        </div>
                        <div class="categories">
                            @foreach ($categories as $category)
                                <a
                                    href="{{ route('category_blogs', $category->id) }}">{{ $category->name }}<span>{{ $category->blogs_count }}</span></a>
                            @endforeach


                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                            <div class="sep">
                                <div class="sep-inside"></div>
                            </div>
                        </div>
                        <div class="recent-posts clearfix">
                            @forelse ($latestBlogs  as $blog)
                                <div class="post clearfix">
                                    <div class="image-wrapper">
                                        <div class="mask"><a href="{{ route('blog_details', $blog->id) }}"><i
                                                    class="fa fa-link"></i></a></div>
                                        <img src="/storage/blog_images/{{ $blog->image }}" alt="{{ $blog->title }}" style="height: 70px; width: 80px;">

                                    </div>
                                    <div class="info-block">
                                        <a href="{{ route('blog_details', $blog->id) }}">
                                            <h4>{{ $blog->title }}</h4>
                                        </a>
                                        <div class="meta">
                                            <p><i class="fa fa-folder-o"></i>{{ $blog->category->name }}</p>
                                            <span>&#x7C;</span>
                                            <p><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('j M Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            @empty
                            No other blogs
                            @endforelse

                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
