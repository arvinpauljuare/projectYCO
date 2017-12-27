@extends('layouts.app')
@section('content')
	<!-- YCO -->
	<div id="title" class="slide header">
    	<img class="homeMainLogo" src="{{ asset('img/icons/iconMain.png') }}">
  	</div>

  	<!-- ABOUT US -->
  	<div id="slide1" class="header slideAboutUs">
    	<div class="text-center">
	      <img src="{{ asset('img/home/aboutUsTitle.png') }}" class="aboutUsTitle">
	      <div class="aboutUsDiv">
	        <span>YCOptimum Holdings is a pioneering company in Manila City, Philippines founded on March 2016.</span>
	        <br>
	        <br>
          	<span>We are a team of young, passionate, and strong-willed individuals aiming to develop businesses which offer high-quality, innovative, and efficient solutions and services.</span>
	      </div> 
	    </div>

	    <div class="text-center aboutUsButtonCont">
	      <a class="btn btn-primary aboutUsButton" href="{{ url('about/us') }}">
	        <span class="aboutUsLabel">READ MORE</span>
	      </a>
	    </div>
	</div>

	<!-- VISION MISSION -->
	<!-- <div id="slide2" class="slideVision">
		<div class="text-center visionMission">
		  <img src="{{ asset('img/home/eye.png') }}" class="visionMissionIcon">
		  <p class="visionMissionLabel">VISION & MISSION</p>
		  <hr class="visionMissionHR">
		  <div class="visionMissionText">
		  	<span>Envisioned to be among the world’s leading companies, YCOptimum Holdings, through our commitment to constant innovation, integrity, and dynamism, shall deliver beyond expectation complete range of high-quality, innovative, and efficient solutions and services to our clientele by building an organization of passionate and globally-competitive team members working together to impart added optimum value to our business relations.</span>
		  	<br>
		  	<br>
		  	<span>At YCOptimum Holdings, our goal is to be the best in everything we do.</span>
		  </div>
		</div>
	</div> -->

	<!-- CONTAINERS -->
	<div id="slide3" class="slide">
		<div class="mini-container text-center" id="NW">
		  <img src="{{ asset('img/home/cont1.png') }}" class="imageCont">
		</div>
		<div class="mini-container" id="NE">
		  <img src="{{ asset('img/home/cont2.png') }}" class="imageCont2">
		</div>
		<div class="mini-container" id="SW">
		   <img src="{{ asset('img/home/cont3.jpg') }}" class="imageCont3">
		</div>
		<div class="mini-container" id="SE">
		   <img src="{{ asset('img/home/cont4.jpg') }}" class="imageCont3">
		</div>
	</div>

	<!-- CONTACT US -->
	<div id="slide4" class="slideContactUs">
		
		<div class="text-center">
    		<img src="{{ asset('img/home/contactUs.png') }}" class="csTitle">
  		</div>
    
  		<div class="row csForm">
  			
  			<div class="col-md-6 col-sm-12 col-xs-12">
  				<div class="row">
			        <div class="col-md-8 col-sm-8 col-xs-8">
			          <input type="text" class="form-control csText" placeholder="Name">
			        </div>
			        <div class="col-md-4 col-sm-4 col-xs-4">
			          <input type="text" class="form-control csText" placeholder="Email">
			        </div>
      			</div>

	      		<div class="row csSubjectCont">
	        		<div class="col-md-12">
	          			<input type="text" class="form-control csText" placeholder="Subject">
	        		</div>
	      		</div>

	      		<div class="row csSubjectCont">
	        		<div class="col-md-12">
	          			<textarea class="form-control csText" rows="5">Message</textarea>
	        		</div>
	      		</div>

	      		<div class="text-center csButtonCont">
	        		<button class="btn btn-primary csButton">
	          			<span class="csButtonLabel">SEND US A MESSAGE</span>
	        		</button>
	     	 	</div>
     		</div>


    		<div class="col-md-6 col-sm-12 col-xs-12">

    			<div class="row icon1Cont">
			        <div class="col-md-2 col-sm-2 col-xs-2">
			          	<img src="{{ asset('img/home/icon1.png') }}">
			        </div>
			        <div class="col-md-10 col-sm-10 col-xs-10">
			          	<h6 class="csPlace">Place your location here</h5>
			        </div>
      			</div>

      			<div class="row icon2Cont" style="">
        			<div class="col-md-2 col-sm-2 col-xs-2">
         				<img src="{{ asset('img/home/icon2.png') }}">
        			</div>
        			
        			<div class="col-md-10 col-sm-10 col-xs-10">
          				<h6 class="csInfo">info@ycoholdings.com</h5>
        			</div>
      			</div>

       			<div class="row icon3Cont" style="">
        			<div class="col-md-2 col-sm-2 col-xs-2">
        				<img src="{{ asset('img/home/icon3.png') }}">
        			</div>
        			<div class="col-md-10 col-sm-10 col-xs-10">
          				<h6 class="csNumber">0912345678</h5>
        			</div>
      			</div>
    		</div>
    	</div>
    </div>
@endsection