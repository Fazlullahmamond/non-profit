@extends('layout.app')

@section('content')
    <!-- Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="parallax-mask"></div>
            <div class="section-name">
                <h2>Contact Us</h2>
                <div class="short-text">
                    <h5>Home<i class="fa fa-angle-double-right"></i>Contact Us</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-4 widget">
                            <h4>Adress</h4>
                            <i class="fa fa-map-marker"></i>
                            <p>Adress no. 29, Some Street, Some Country</p>
                        </div>
                        <div class="col-sm-4 widget">
                            <h4>Phone</h4>
                            <i class="fa fa-phone"></i>
                            <p>+40 712 345 678</p>
                            <p>+40 712 345 876</p>
                        </div>
                        <div class="col-sm-4 widget">
                            <h4>E-mail</h4>
                            <i class="fa fa-envelope"></i>
                            <p>spam.Kindness@mail.com</p>
                            <p>spam.Kindness@mail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="comment-form-wrapper contact-from clearfix">
                        <div class="widget-title ">
                            <h4>Contact Us</h4>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="comment-form row altered" action="{{ route('contact_store') }}" method="POST">

                            <div class="field col-sm-4">

                                <h4>Name</h4>
                                <input type="text" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <h4>E-mail</h4>
                                <input type="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="field col-sm-4">
                                <h4>Phone</h4>
                                <input type="text" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field col-sm-12">
                                <h4>Message</h4>
                                <textarea name="message">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @csrf

                            <div class="field col-sm-4">
                                <button type="submit" class="btn btn-big btn-solid"><i class="fa fa-paper-plane"></i><span>Send
                                        Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
<style>
    .text-danger{

        color: red;
    }
</style>
@endsection
