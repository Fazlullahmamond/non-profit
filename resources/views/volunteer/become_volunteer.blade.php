@extends('layout.app')
@section('content')
    <!-- Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="parallax-mask"></div>
            <div class="section-name">
                <h2>Become Volunteer</h2>
                <div class="short-text">
                    <h5>Home<i class="fa fa-angle-double-right"></i>Become Volunteer</h5>
                </div>
            </div>
        </div>
    </div>




    <!-- contact wrapper -->
    <div class="contact-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="comment-form-wrapper contact-from clearfix">
                        <div class="widget-title ">
                            <h4>Become one of Us</h4>
                            <p>porro sunt dolor quia voluptatem. Dolore harum culpa</p>
                        </div>
                        @if (session('success'))
                            <div class="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="comment-form row altered" action="{{ route('become_volunteer') }}" method="POST">
                            @csrf <!-- Add CSRF token for Laravel form submission -->

                            <div class="field col-sm-4">
                                <h4>First Name<span class="text-danger">*</span></h4>
                                <input type="text" name="first_name" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <h4>Last Name<span class="text-danger">*</span></h4>
                                <input type="text" name="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4" style="margin-top: 0">
                                <h4>Email<span class="text-danger">*</span></h4>
                                <input type="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <h4>Primary Number<span class="text-danger">*</span></h4>
                                <input type="text" name="primary_number" value="{{ old('primary_number') }}">
                                @error('primary_number')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <h4>Secondary Number</h4>
                                <input type="text" name="secondary_number" value="{{ old('secondary_number') }}">
                                @error('secondary_number')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <h4>Date of Birth<span class="text-danger">*</span></h4>
                                <input type="date" name="dob" value="{{ old('dob') }}">
                                @error('dob')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <h4>Gender<span class="text-danger">*</span></h4>
                                <select name="gender" id="" value="{{ old('gender') }}">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="not_specified">Prefer Not Saying</option>
                                </select>
                                @error('gender')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-8">
                                <h4>Interested In<span class="text-danger">*</span></h4>
                                <input type="text" name="interested_in" value="{{ old('interested_in') }}">
                                @error('interested_in')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-12">
                                <h4>Address<span class="text-danger">*</span></h4>
                                <input type="text" name="address" value="{{ old('address') }}">
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-12">
                                <h4>Description<span class="text-danger">*</span></h4>
                                <textarea name="description" value="{{ old('description') }}"></textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field col-sm-12">
                                <h4>Resume</h4>
                                <input type="file" name="resume" accept=".pdf" value="{{ old('resume') }}">
                                @error('resume')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-12">
                                <h4>Image</h4>
                                <input type="file" name="image" accept=".jpg, .jpeg, .png, .gif"
                                    value="{{ old('image') }}">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field col-sm-4">
                                <button class="btn btn-big btn-solid" type="submit"><i
                                        class="fa fa-paper-plane"></i><span>Submit</span></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
