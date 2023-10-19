@extends('layout.app')
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>{{ $appeal->title }}</h2>
				<div class="short-text">
					<h5>Home<i class="fa fa-angle-double-right"></i>appeals</h5>
				</div>
			</div>
		</div>
	</div>


	<!-- Causes Wrapper -->
	<div class="causes-page-wrapper single-cause">
		<div class="container">
			<div class="row cause">
				<div class="col-md-10 col-md-offset-1">
					<div class="image-wrapper">
						<img class="img-responsive"  src="/storage/appeal_images/{{ $appeal->image }}"  style="height: 500px; width: 100%" alt="">
					</div>
					<div class="meta">
						<h2>{{ $appeal->title }}</h2>
						<div class="short-stats clearfix">
							<h5><i class="fa fa-clock-o"></i>{{ $appeal->created_at->diffForHumans() }}</h5>
						</div>
					</div>
					<div class="clearfix">
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
						<a href="#donate" class="btn btn-big btn-solid "><i class="fa fa-archive"></i><span>Make Donation</span></a>
					</div>
					<div class="info-block">
						{!! $appeal->description !!}
					</div>
				</div>
			</div>
		</div>
		<div class="donation-wrapper" id="donate">
			<div class="container" >
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="donation clearfix">
							<ul class="tabs-switcher nav nav-tabs clearfix">
								<li class="active">
									<a data-toggle="tab" href="#tab-1"><i class="fa fa-paypal"></i>PayPlay</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab-2"><i class="fa fa-cc-visa"></i>Visa / MasterCard</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane row active" id="tab-1">
									<p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, omnis, ad. Eligendi molestiae qui, modi minima voluptatibus est accusamus nisi reprehenderit mollitia vitae perferendis aliquam tenetur sequi enim tempora expedita, assumenda doloremque quos maxime esse.</p>
									<form class="donation-form col-xs-12 row">
										<div class="field col-sm-6">
											<h4>Donation Amount</h4>
											<div class="radio-inputs">
												<input type="radio" id="amount-1" name="amount" value="50">
												<label for="amount-1"><span></span>$50</label>
												<input type="radio" id="amount-2" name="amount" value="100">
												<label for="amount-2"><span></span>$100</label>
												<input type="radio" id="amount-3" name="amount" value="150">
												<label for="amount-3"><span></span>$150</label>
											</div>
										</div>
										<div class="field col-sm-6">
											<h4>PayPal</h4>
											<input type="email" name="paypal">
										</div>
										<div class="field col-sm-6">
											<a href="#" class="btn btn-big btn-solid "><i class="fa fa-archive"></i><span>Donate Now</span></a>
										</div>
									</form>
								</div>
								<div class="tab-pane row" id="tab-2">
									<p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, omnis, ad. Eligendi molestiae qui, modi minima voluptatibus est accusamus nisi reprehenderit mollitia vitae perferendis aliquam tenetur sequi enim tempora expedita, assumenda doloremque quos maxime esse.</p>
									<form class="donation-form col-xs-12 row">
										<div class="field col-sm-6">
											<h4>First Name</h4>
											<input type="text" name="First Name">
										</div>
										<div class="field col-sm-6">
											<h4>Last Name</h4>
											<input type="text" name="Last Name">
										</div>
										<div class="field col-sm-6">
											<h4>Donation Amount</h4>
											<div class="radio-inputs">
												<input type="radio" id="amount-4" name="amount" value="50">
												<label for="amount-4"><span></span>$50</label>
												<input type="radio" id="amount-6" name="amount" value="100">
												<label for="amount-6"><span></span>$100</label>
												<input type="radio" id="amount-7" name="amount" value="150">
												<label for="amount-7"><span></span>$150</label>
											</div>
										</div>
										<div class="field col-sm-6">
											<h4>Donation Amount</h4>
											<div class="radio-inputs">
												<input type="radio" id="one-time" name="type" value="one-time">
												<label for="one-time"><span></span>One Time</label>
												<input type="radio" id="monthly" name="type" value="monthly">
												<label for="monthly"><span></span>Monthly</label>
												<input type="radio" id="yearly" name="type" value="yearly">
												<label for="yearly"><span></span>Yearly</label>
											</div>
										</div>
										<div class="field col-sm-6">
											<h4>Credit Card</h4>
											<select name="Credit Crad" id="credit_card">
												<option value="Visa">Visa</option>
												<option value="Master Card">Master Card</option>
											</select>
										</div>
										<div class="field col-sm-6">
											<h4>Card Number</h4>
											<input type="text" name="Card Number">
										</div>
										<div class="field col-sm-6">
											<h4>MM/YY</h4>
											<input type="text" name="Expiration Date">
										</div>
										<div class="field col-sm-6">
											<h4>CVC</h4>
											<input type="text" name="CVC">
										</div>
										<div class="field col-sm-6">
											<a href="#" class="btn btn-big btn-solid "><i class="fa fa-archive"></i><span>Donate Now</span></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
