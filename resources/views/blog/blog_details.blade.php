@extends('layout.front')
@section('content')
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="/front/img/faq.jpg" media="(min-width: 992px)" /><img class="img--bg" src="/front/img/faq.jpg"
                    alt="img" />
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                                <h1 class="promo-primary__title"><span>Blog</span> <span>Post</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog post start-->
        <section class="section blog-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="blog-post__top">
                            <div class="blog-post__img"><img class="img--bg" src="/storage/blog_images/{{ $blog->image }}"
                                    alt="{{ $blog->title }}" /></div>
                            <div class="blog-post__description">
                                <div class="row">
                                    <div class="col-6"><span class="blog-post__name"><a
                                                href="{{ route('category_blogs', $blog->category_id) }}"
                                                class="blog-item__badge">{{ $blog->category->name }}</a></span></div>
                                    <div class="col-6 text-right"><span
                                            class="blog-post__date">{{ $blog->created_at->format('j M Y') }}</span><span>
                                            <svg class="icon">
                                                <use xlink:href="#comment"></use>
                                            </svg> 5</span></div>
                                </div>
                            </div>
                        </div>
                        <h6 class="blog-post__title">{{ $blog->title }}</h6>
                        <p>{!! $blog->description !!}</p>


                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="blog-post__category-holder">
                            <h6 class="blog-post__title">Category</h6>
                            <ul class="blog-post__category">
                                @foreach ($categories as $category)
                                    <li>
                                        <a
                                            href="{{ route('category_blogs', $category->id) }}">{{ $category->name }}</span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <h6 class="blog-post__title">Recent Posts</h6>
                        <div class="recent-posts">

                            <div class="recent-posts clearfix">
                                @forelse ($latestBlogs  as $blog)
                                    <div class="recent-posts__item">
                                        <div class="recent-posts__item-img"><img class="img--bg"
                                                src="/storage/blog_images/{{ $blog->image }}" alt="{{ $blog->title }}" />
                                        </div>
                                        <div class="recent-posts__item-description"><a class="recent-posts__item-link"
                                                href="{{ route('blog_details', $blog->id) }}">{{ $blog->title }}</a><span
                                                class="recent-posts__item-value">{{ $blog->created_at->format('j M Y') }}</span>
                                        </div>
                                    </div>
                                @empty
                                    No other blogs
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <!-- blog post end-->

    </main>
@endsection
