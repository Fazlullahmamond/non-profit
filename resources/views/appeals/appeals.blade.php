@extends('layout.app')
@section('content')
    <!-- Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="parallax-mask"></div>
            <div class="section-name">
                <h2>Appeals</h2>
                <div class="short-text">
                    <h5>Home<i class="fa fa-angle-double-right"></i>Active Appeals </h5>
                </div>
            </div>
        </div>
    </div>


    <div class="grid-cause-area list-cause-area">
        <div class="container">
            @forelse ($appeals as $appeal)
                <div class="row">
                    <div class="cause content-box">
                        <div class="col-md-5 col-sm-6">

                            <div class="img-wrapper">
                                <div class="overlay">
                                </div>
                                <img class="img-responsive" src="/storage/appeal_images/{{ $appeal->image }}"
                                    style="height: 300px" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="info-block">
                                <h4><a href="{{ route('appeal_details', $appeal->id) }}">{{ $appeal->title }}</a></h4>
                                <p>{!! Str::substr($appeal->description, 0, 300) !!}</p>
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
                                    <a href="{{ route('appeal_details', $appeal->id) }}" class="btn btn-min btn-solid"><i
                                            class="fa fa-archive"></i><span>Donate Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h1>No Appeal</h1>
            @endforelse



            <div class="pagination-wrapper">
                {{ $appeals->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
