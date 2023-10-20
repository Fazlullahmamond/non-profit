@extends('layout.app')
@section('content')
    <!-- Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="parallax-mask"></div>
            <div class="section-name">
                <h2>Works</h2>
                <div class="short-text">
                    <h5>Home<i class="fa fa-angle-double-right"></i>Our Works </h5>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-cause-area list-cause-area">
        <div class="container">
            @forelse ($works as $work)
                <div class="row">
                    <div class="cause content-box">
                        <div class="col-md-5 col-sm-6">

                            <div class="img-wrapper">
                                <div class="overlay">
                                </div>
                                <img class="img-responsive" src="/storage/work_images/{{ $work->image }}"
                                    style="height: 300px" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="info-block">
                                <h4><a href="{{ route('work_details', $work->id) }}">{{ $work->title }}</a></h4>
                                <h6>{{ $work->category->name }}</h6>
                                <p>{!! Str::substr($work->description, 0, 250) !!}</p>

                                <div class="donet_btn" style="margin-top:10px">
                                    <a href="{{ route('work_details', $work->id) }}" class="btn btn-min btn-solid"><i
                                            class="fa fa-archive"></i><span>Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h1>No Done Yet</h1>
            @endforelse



            <div class="pagination-wrapper">
                {{ $works->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
