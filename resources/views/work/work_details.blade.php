@extends('layout.app')
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>{{ $work->title }}</h2>
				<div class="short-text">
					<h5>Home<i class="fa fa-angle-double-right"></i>Our Works</h5>
				</div>
			</div>
		</div>
	</div>


	<!-- Causes Wrapper -->
	<div class="causes-page-wrapper single-cause" style="margin-bottom: 30px">
		<div class="container" >
			<div class="row cause"  style="margin-bottom: 30px">
				<div class="col-md-10 col-md-offset-1">
					<div class="image-wrapper">
						<img class="img-responsive"  src="/storage/work_images/{{ $work->image }}"  style="height: 500px; width: 100%" alt="">
					</div>
					<div class="meta">
						<h2>{{ $work->title }}</h2>
						<div class="short-stats clearfix">
							<h5><i class="fa fa-folder-o"></i>{{ $work->category->name}}</h5>
							<h5><i class="fa fa-clock-o"></i>{{ $work->created_at->diffForHumans() }}</h5>
						</div>
					</div>

					<div class="info-block">
						{!! $work->description !!}
					</div>
				</div>
			</div>
		</div>

	</div>

@endsection
