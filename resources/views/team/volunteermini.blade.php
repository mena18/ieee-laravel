<div class="col-xs-6 col-md-3 col-lg-3 volunteers">
	<span class="imageOfVolunteer bg" style="background-image:url(' {{URL::to($volunteer->img)}}' )">
	</span>
	<h2>{{$volunteer->name}}</h2> <!-- to print the name  -->
	<p>{{$volunteer->committee}}</p>

	<div class="socialOfVol" style="margin-right: 0">
		<div class="facebook">
			<a href="{{$volunteer->facebook}}" target="_blank">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
		</div>
		<div class="linkedin">
			<a href="{{$volunteer->linkedin}}" target="_blank">
				<i class="fa fa-linkedin-square" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>
