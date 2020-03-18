@extends('layout.body',['headerClass'=>'events-hero','active'=>'offline','script'=>'offlineCourses'])
@section('title')
	Offline Courses
@endsection
@section('caption')
	<h2>OFFLINE COURSES</h2>
@endsection
@section('content')
	<section class="details">
		<div class="container">
			<div class="row">
				<div id="faq-links" class="flex">
					<div id="summer" class="faq-selected btn btn-primary btn-lg">Summer Courses</div>
					<div id="midyear" class="btn btn-warning">Midyear Courses</div>
				</div>


				<div id="faq-wrapper" class="about-summer">

					<div class="faq-group">
						<div class="slide-left">
							<div class="courseSelected">Summer Courses</div>
						</div>
						<hr>
					</div><!--faq-group-->
					<div class="slide-left">
						<div  class="faq">
							<ul class="faq-accordion">
								@if(count($summer)>0)
									@foreach($summer as $course)
										<li>
											<a href="#">{{$course->name}}
												<span>
													{{$course->open?"Open":"Finished"}}
												</span>
											</a>
											<ul class="faq-content">
												<li>
													<div>
														{!!$course->description!!}
													</div>
												</li>
											</ul>
										</li>
									@endforeach
								@else
									<h1>COMMING SOON</li>
								@endif

							</ul>
						</div>
					</div>
				</div>
				<div class="about-midyear faq-hide">

					<div class="faq-group">
						<div class="slide-left">
							<div class="courseSelected">MidYear Courses</div>
						</div>
						<hr>
					</div>

					<div class="slide-left">
						<ul class="faq-accordion">
							@if(count($mid_year)>0)

								@foreach($mid_year as $year => $year_courses)
										<h1 class="courses_year_head">{{$year}}</h1>
										@foreach($year_courses as $course)
										<li>
											<a href="#">{{$course->name}}
												<span>
													{{$course->open?"Open":"Finished"}}
												</span>
											</a>
											<ul class="faq-content">
												<li>
													<div>
														{!!$course->description!!}
													</div>
												</li>
											</ul>
										</li>
									@endforeach
								@endforeach

							@else
								<li>COMMING SOON</li>
							@endif

						</ul>

					</div><!--lide-left -->
				</div>
			</div>
		</div>
	</section>
@endsection
