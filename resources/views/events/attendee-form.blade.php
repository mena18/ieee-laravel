@extends('layout.body',['active'=>'events','headerClass'=>'events-hero'])
@section('title')
Register Attendance
@endsection
@section('content')
	<style>
		.error {
			border-color: #d9534f !important;
		}
	</style>
	<section class="sign-up-form">
		<div class="container">
			<div class="section-content">
				<h3>Please Fill The Form Below</h3>
				<div class="um um-register um-2881">
					<div class="um-form">
						<form method="post" id="eventForm" action="{{route('event.attendance',['id'=>$event->id])}}">
							@foreach ( $errors->all() as $error )
								<div class="alert alert-danger"> {{$error}} </div>
							@endforeach
							<div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
								{{csrf_field()}}
								<div class="um-col-1">

									<div class="um-field um-field-user_login um-field-text" data-key="user_login">

										<div class="um-field-label">
											<label for="user_login-2881">Name</label>
											<div class="um-clear">
											</div>
										</div>
										<div class="um-field-area">
											<input autocomplete="off" class="um-form-field valid " type="text" name="name" id="name" value="{{old('name')}}"/>
										</div>
									</div>

									<div class="um-field um-field-first_name um-field-text" data-key="first_name">

										<div class="um-field-label">
											<label for="first_name-2881">Faculty</label>
											<div class="um-clear">
											</div>
										</div>
										<div class="um-field-area">
											<input autocomplete="off" class="um-form-field valid " type="text" name="Faculty" id="Faculty" value="{{old('Faculty')}}"/>
										</div>
									</div>

									<div class="um-field um-field-last_name um-field-text" data-key="last_name">
										<div class="um-field-label">
											<label for="last_name-2881">Academic Semester </label>
											<div class="um-clear"></div>
										</div>
										<div class="um-field-area">
											<input placeholder="Ex : 6" autocomplete="off" class="um-form-field valid " type="text" name="semester" id="Semester" value="{{old('semester')}}"/>
										</div>
									</div>

									<div class="um-field um-field-user_email um-field-text" data-key="user_email">
										<div class="um-field-label">
											<label for="user_email-2881">E-mail Address</label>
											<div class="um-clear"></div>
										</div>
										<div class="um-field-area">
											<input autocomplete="off" class="um-form-field valid " type="text" name="mail" id="email" value="{{old('mail')}}"/>
										</div>
									</div>
									<!-- <div class="um-field um-field-user_email um-field-text" data-key="user_email">
										<div class="um-field-label">
											<label for="user_mobile-2881">Your Facebook Link</label>
											<div class="um-clear"></div>
										</div>
										<div class="um-field-area">
											<input autocomplete="off" class="um-form-field valid " type="text" name="profile" id="facebook" value="{{old('profile')}}" placeholder="" data-validate="membership-id" data-key="user_membership-id" required min="0" max="" />
										</div>
									</div> -->
									<div class="um-field um-field-user_email um-field-text" data-key="user_email">
										<div class="um-field-label">
											<label for="user_email-2881">Mobile Number</label>
											<div class="um-clear"></div>
										</div>
										<div class="um-field-area">
											<input autocomplete="off" class="um-form-field valid " type="text" name="mobile" id="Mobile" value="{{old('mobile')}}"/>
										</div>
									</div>

									<div class="container">
										<div class="radio">
											<input id="radio-1" value="1" name="member" type="radio" >
											<label for="radio-1" class="radio-label">Member</label>
										</div>
										<div class="radio">
											<input id="radio-2" value="0" name="member" type="radio" checked>
											<label for="radio-2" class="radio-label">Non Member</label>
										</div>
									</div>
								</div>
							</div>

							<div class="um-col-alt">
								<div class="register scl">
									<input type="submit" id="eventReg" value="Send" class="um-button" />
								</div>
								<div class="um-clear"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
