@extends('layout.front')
@section('content')
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="/front/img/faq.jpg" media="(min-width: 992px)"/><img class="img--bg" src="/front/img/faq.jpg" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>Compassion</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                            <h1 class="promo-primary__title"><span>Blog</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog start-->
    <section class="section blog background--light">
        <div class="container">
            <div class="row offset-margin">
                @forelse ($latestBlogs  as $blog)

                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="blog-item blog-item--style-1">
                        <div class="blog-item__img"><img class="img--bg" src="/storage/blog_images/{{ $blog->image }}" alt="{{ $blog->title }}"/><span class="blog-item__badge">{{ $blog->category->name }}</span></div>
                        <div class="blog-item__content">
                            <h6 class="blog-item__title"><a href="{{ route('blog_details', $blog->id) }}">{{ $blog->title }}d</a></h6>
                            <p>{!! Str::substr($blog->description, 0, 100) !!}</p>
                            <div class="blog-item__details"><span class="blog-item__date">{{ $blog->created_at->format('j M Y') }}</span></div>
                        </div>
                    </div>
                </div>
            @empty
                No other blogs
            @endforelse

            </div>
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    <ul class="pagination">
                        <li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                        </li>
                        <li class="pagination__item"><span>1</span></li>
                        <li class="pagination__item pagination__item--active"><span>2</span></li>
                        <li class="pagination__item"><span>3</span></li>
                        <li class="pagination__item"><span>4</span></li>
                        <li class="pagination__item"><span>5</span></li>
                        <li class="pagination__item pagination__item--disabled">...</li>
                        <li class="pagination__item"><span>12</span></li>
                        <li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <!-- pagination end-->
                </div>
            </div>
        </div>
    </section>
    <!-- blog end-->
    <!-- bottom bg start-->
    <section class="bottom-background bottom-background--brown" style="background-image: url(img/bottom-bg.png)"></section>
    <!-- bottom bg end-->
</main>

@endsection
