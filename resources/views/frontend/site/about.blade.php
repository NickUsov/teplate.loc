@extends('frontend.layouts.master')

@section('content')
    <!-- about header section -->
<div id="about-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12"></div>
		</div>
	</div>
</div>

<!-- team section -->
<div id="team">
	<div class="container">
    
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Meet the crew!</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
			</div>
         </div>
         
         <div class="row mt30">
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					<img src="frontend/images/team1.jpg" class="img-responsive" alt="team img">
					<h3>LINDA</h3>
					<h4>Creative Director</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					<img src="frontend/images/team2.jpg" class="img-responsive" alt="team img">
					<h3>JULIA</h3>
					<h4>UX Designer</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					<img src="frontend/images/team3.jpg" class="img-responsive" alt="team img">
					<h3>MARY</h3>
					<h4>Frontend Developer</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo.</p>
				</div>
			</div>
         </div>
         
         <div class="row mt30"> 
			<div class="col-md-12 col-sm-12">
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h3>Onetel Design Studio</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo.</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<strong>HTML5 &AMP; CSS3</strong>
				<span class="pull-right">100%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
				<strong>BOOTSTRAP</strong>
				<span class="pull-right">80%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				<strong>UX Design</strong>
				<span class="pull-right">70%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
			</div>
		</div>
	</div>
</div>		
@endsection