@extends('layouts.app')
@section('content')
	<!-- BANNER -->
  	<div class="bannerBG">
    	<div class="asTitleCont text-center">
      		<span class="asTitle">ABOUT US</span>
    	</div>
  	</div>

    <!-- PROFILE -->
    <div style="" id="">
      <div class="" style="">
          <div class="row text-center" style="padding-top: 0px;">
            <div class="visionMissionTextHeader">
              <span>YCOptimum Holdings is a pioneering company in Manila City, Philippines founded on March 2016.</span>
              <br>
              <br>
              <span>We are a team of young, passionate, and strong-willed individuals aiming to develop businesses which offer high-quality, innovative, and efficient solutions and services.</span>
            </div>
            <img class="asProfBar" src="{{ asset('img/aboutUs/aboutUsProfileBar.png') }}">
          </div>
      </div>
    </div>

  	<!-- HISTORY -->
  <!-- 	<div style="" class="asHistCont">
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
  	</div> -->

  	<!-- PROFILE -->
  	<div style="" id="aboutUsProfile">
    	<div class="asProfCont" style="">
      		<div class="row text-center">
              <img src="{{ asset('img/home/eye.png') }}" class="visionMissionIcon">
              <p class="visionMissionLabel">VISION & MISSION</p>
              
          </div>
      		
          <div class="row text-center" style="padding-top: 10px;">
            <div class="visionMissionText">
              <span>Envisioned to be among the world’s leading companies, YCOptimum Holdings, through our commitment to constant innovation, integrity, and dynamism, shall deliver beyond expectation complete range of high-quality, innovative, and efficient solutions and services to our clientele by building an organization of passionate and globally-competitive team members working together to impart added optimum value to our business relations.</span>
              <br>
              <br>
              <span>At YCOptimum Holdings, our goal is to be the best in everything we do.</span>
            </div>
          </div>
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

  <!-- WHAT -->
  <div class="row philoWhatCont" style="background-color: #f3f4f4">
    <div class="center-block philoWhatBlock" style="">
      <div class="col-md-5 col-sm-5 col-xs-5" style="padding-left: 0px;">
        <img src="{{ asset('img/philo/What.jpg') }}" class="philoWhatImg">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-7" style="margin-top: 30px;">
        <span class="philoWhatLabel">CORE VALUES</span>
        <br>
        <br>
        <span>Our core values have shaped our corporate culture from the very beginning up to this day.</span>
        <br>
        <br>
        <span style="font-weight: bold;">PASSION</span>
        <br>
        <span>We stand up for what we believe in, and go the extra distance in all our activity.</span>
        <br>
        <br>
        <span style="font-weight: bold;">WILL TO WIN</span>
        <br>
        <span>We exhibit a strong will to win in the marketplace and in every aspect of our business.</span>
        <br>
        <br>
        <span style="font-weight: bold;">INTEGRITY</span>
        <br>
        <span>We always see to it that we always do the right thing, we are held accountable for our actions and delivering on promises.</span>
      </div>
    </div>
  </div>

	<!-- CONTACT US -->
  <form action="mailto:{{ $ycoInfo->email }}" method="post" enctype="text/plain">
  	<div class="asCSCont" id="aboutUsContact">
  		
  		<div class="text-center">
      		<img src="{{ asset('img/home/contactUs.png') }}" class="asCSTitle">
    		</div>
      
    		<div class="row asCSForm">
    			
    			<div class="col-md-6 col-sm-12 col-xs-12">
    				<div class="row">
  			        <div class="col-md-8 col-sm-8 col-xs-8">
  			          <input type="text" class="form-control csText" placeholder="Name" name="Name">
  			        </div>
  			        <div class="col-md-4 col-sm-4 col-xs-4">
  			          <input type="email" class="form-control csText" placeholder="Email" name="Email">
  			        </div>
        			</div>

  	      		<div class="row csSubjectCont">
  	        		<div class="col-md-12">
  	          			<input type="text" class="form-control csText" placeholder="Subject" name="Subject">
  	        		</div>
  	      		</div>

  	      		<div class="row csSubjectCont">
  	        		<div class="col-md-12">
  	          			<textarea class="form-control csText" rows="4" name="Message">Message</textarea>
  	        		</div>
  	      		</div>

  	      		<div class="text-center csButtonCont">
  	        		<button class="btn btn-primary csButton" type="submit" value="send">
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
  			          	<h6 class="csPlace">{{ $ycoInfo->location }}</h5>
  			        </div>
        			</div>

        			<div class="row icon2Cont" style="">
          			<div class="col-md-2 col-sm-2 col-xs-2">
           				<img src="{{ asset('img/home/icon2.png') }}">
          			</div>
          			
          			<div class="col-md-10 col-sm-10 col-xs-10">
            				<h6 class="csInfo">{{ $ycoInfo->email }}</h5>
          			</div>
        			</div>

         			<div class="row icon3Cont" style="">
          			<div class="col-md-2 col-sm-2 col-xs-2">
          				<img src="{{ asset('img/home/icon3.png') }}">
          			</div>
          			<div class="col-md-10 col-sm-10 col-xs-10">
            				<h6 class="csNumber">{{ $ycoInfo->number }}</h5>
          			</div>
        			</div>
      		</div>

      	</div>
  	</div> 
  </form>
  
  
@endsection