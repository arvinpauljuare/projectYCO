@extends('layouts.app')
@section('content')
	<!-- SLIDE 1 -->
	<div class="homeSlide1BG text-center">
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

	<!-- CONTAINERS -->
	<div id="slide3" class="slide">
		<div class="mini-container text-center" id="NW">
			<a href="{{ url('optimum') }}">
				<img src="{{ asset('img/home/cont1.png') }}" class="imageCont">
			</a>
		</div>
		<div class="mini-container" id="NE">
			<a href="{{ url('ycobusinesssolutions') }}">
				<img src="{{ asset('img/home/cont2.png') }}" class="imageCont2">
			</a>
		</div>
		<div class="mini-container" id="SW">
			<a href="{{ url('ycodesign') }}">
		   		<img src="{{ asset('img/home/ycoDesign.png') }}" class="imageCont3">
		   	</a>
		</div>
		<div class="mini-container" id="SE">
		   <img src="{{ asset('img/home/cont4.jpg') }}" class="imageCont3">
		</div>
	</div>

	<!-- CONTACT US -->
	<form action="mailto:{{ $ycoInfo->email }}" method="post" enctype="text/plain">
		<div id="slide4" class="slideContactUs">
			
			<div class="text-center">
	    		<img src="{{ asset('img/home/contactUs.png') }}" class="csTitle">
	  		</div>
	    
	  		<div class="row csForm">
	  			
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
		          			<textarea class="form-control csText" rows="5" name="Message">Message</textarea>
		        		</div>
		      		</div>

		      		<div class="text-center csButtonCont">
		        		<button class="btn btn-primary csButton" type="submit" value="send">
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