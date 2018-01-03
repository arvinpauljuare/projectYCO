@extends('layouts.app')
@section('content')
	<!-- BANNER -->
  	<div class="bannerBG">
    	<div class="asTitleCont text-center">
      		<span class="asTitle">YCOptimum Design</span>
    	</div>
  	</div>

  <!-- PROFILE -->
  <div style="" id="aboutUsHeader">
      <div class="asProfContHeader" style="">
          <div class="row text-center" style="padding-top: 0px;">
            <div class="visionMissionTextHeader">
              <span></span>
            </div>
          </div>
      </div>
      <!-- PROJECTS SELECTION -->
      <div id="" style="padding: 20px 105px 0px 105px;">
        <div class="row text-center">
          <div class="col-md-4">
            <button id="residentialProjYD" class="btn btn-default form-control" style="height: 50px;">
              <span style="font-weight: bold">RESIDENTIAL</span>
            </button>
          </div>
          <div class="col-md-4">
            <button id="officeProjYD" class="btn btn-default form-control" style="height: 50px;">
              <span style="font-weight: bold">OFFICES</span>
            </button>
          </div>
          <div class="col-md-4">
            <button id="retailProjYD" class="btn btn-default form-control" style="height: 50px;">
              <span style="font-weight: bold">RETAIL/COMMERCIAL</span>
            </button>
          </div>
           <img class="asProfBar" src="{{ asset('img/aboutUs/aboutUsProfileBar.png') }}" style="margin-top: 60px">
        </div>
      </div>
    </div>

  <div id="residentialYDProjContainer" style="padding: 0px 100px 40px 100px;"></div>
  <div id="officeYDProjContainer" style="padding: 0px 100px 40px 100px;"></div>
  <div id="retailYDProjContainer" style="padding: 0px 100px 40px 100px;"></div>

	<!-- CONTACT US -->
  <form action="mailto:{{ $ycoInfo->email }}" method="post" enctype="text/plain">
  	<div class="asCSCont" id="projectsContact">
  		
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