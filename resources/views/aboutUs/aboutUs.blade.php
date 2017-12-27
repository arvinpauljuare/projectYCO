@extends('layouts.app')
@section('content')
	<!-- BANNER -->
  	<div class="bannerBG">
    	<div class="asTitleCont text-center">
      		<span class="asTitle">ABOUT US</span>
    	</div>
  	</div>

  	<!-- HISTORY -->
  	<div style="" class="asHistCont">
    	<div class="row text-center">
      		<img src="{{ asset('img/home/eye.png') }}" class="visionMissionIcon">
          <p class="visionMissionLabel">VISION & MISSION</p>
    	</div>
    	<div class="row text-center" style="padding-top: 20px;">
      	<div class="visionMissionText">
          <span>Envisioned to be among the world’s leading companies, YCOptimum Holdings, through our commitment to constant innovation, integrity, and dynamism, shall deliver beyond expectation complete range of high-quality, innovative, and efficient solutions and services to our clientele by building an organization of passionate and globally-competitive team members working together to impart added optimum value to our business relations.</span>
          <br>
          <br>
          <span>At YCOptimum Holdings, our goal is to be the best in everything we do.</span>
        </div>
    	</div>
  	</div>

  	<!-- PROFILE -->
  	<div style="" id="aboutUsProfile">
    	<div class="asProfCont" style="">
      		<img class="asProfTitle" src="{{ asset('img/aboutUs/aboutUsProfileTitle.png') }}">
      		<h6 class="asProfText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</h6>
      		<img class="asProfBar" src="{{ asset('img/aboutUs/aboutUsProfileBar.png') }}">
   		</div>
  	</div>

  	<!-- PEOPLE -->
  <!-- 	<div id="" class="asPeopleCont">
  		<div class="row text-center">
    			<img class="asPeopleTitle" src="{{ asset('img/aboutUs/aboutUsPeopleTitle.png') }}">
  		</div>

  		<div class="row asPersonCont">
     			<div class="col-md-4 asPersonPanel" style="">
        			<div class="text-center asPersonInfoCont" style="">
          			<img class="imgcircle" src="{{ asset('img/aboutUs/samplePic.jpg') }}">
          			<h4 class="asPersonName" style="">MARK</h4>
          			<h5 class="asPersonPos">CEO</h5>
       			</div>
        			<h5 class="asPersonDesc">Description.</h5>
     			</div>
    
    			<div class="col-md-4 asPersonPanel" style="">
      			<div class="text-center asPersonInfoCont" style="">
          			<img class="imgcircle" src="{{ asset('img/aboutUs/samplePic.jpg') }}">
          			<h4 class="asPersonName">MARK</h4>
          			<h5 class="asPersonPos">CEO</h5>
        			</div>
        			<h5 class="asPersonDesc">Description.</h5>
    			</div>
    			
    			<div class="col-md-4 asPersonPanel" style="">
     	 			<div class="text-center asPersonInfoCont" style="">
          			<img class="imgcircle" src="{{ asset('img/aboutUs/samplePic.jpg') }}">
          			<h4 class="asPersonName">MARK</h4>
          			<h5 class="asPersonPos">CEO</h5>
        			</div>
        			<h5 class="asPersonDesc">Description.</h5>
    			</div>
  		</div>
  	</div> -->

	<!-- CONTACT US -->
	<div class="asCSCont" id="aboutUsContact">
		
		<div class="text-center">
    		<img src="{{ asset('img/home/contactUs.png') }}" class="asCSTitle">
  		</div>
    
  		<div class="row asCSForm">
  			
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
	          			<textarea class="form-control csText" rows="4">Message</textarea>
	        		</div>
	      		</div>

	      		<div class="text-center csButtonCont">
	        		<button class="btn btn-primary csButton">
	          			<span class="csButtonLabel">SEND US A MESSAGE</span>
	        		</button>
	     	 	</div>
     		</div>


    		<div class="col-md-6 col-sm-12 col-xs-12">

    			<div class="row asIcon1Cont">
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