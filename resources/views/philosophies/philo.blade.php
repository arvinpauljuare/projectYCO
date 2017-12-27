@extends('layouts.app')
@section('content')
	<!-- BANNER -->
  	<div class="bannerBG">
    	<div class="asTitleCont text-center">
      		<span class="asTitle">PHILOSOPHIES</span>
    	</div>
  	</div>

  	<!-- WHO -->
  	<div class="row">
	  	<div class="col-md-6 philoWhoTextCont">
	  		<img class="philoWhoLabel" src="{{ asset('img/philo/philoWho.png') }}">
	  		<br/>
	  		<span class="philoWhoText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span>
	  	</div>
	  	
	  	<div class="col-md-6 philoWhoImgCont" style="">
	  		<img src="{{ asset('img/philo/Who.jpg') }}" class="img-responsive center-block philoWhoImg">
	  	</div>
	</div>

	<!-- WHAT -->
	<div class="row philoWhatCont" style="">
		<div class="center-block philoWhatBlock" style="">
			<div class="col-md-5 col-sm-5 col-xs-5" style="padding-left: 0px;">
				<img src="{{ asset('img/philo/What.jpg') }}" class="philoWhatImg">
			</div>
			<div class="col-md-7 col-sm-7 col-xs-7" style="margin-top: 30px;">
				<span class="philoWhatLabel">WHAT</span>
			</div>
		</div>
	</div>

	<!-- HOW -->
  	<div class="row">
	  	<div class="col-md-6 philoWhoTextCont">
	  		<img class="philoWhoLabel" src="{{ asset('img/philo/how.png') }}">
	  		<br/>
	  		<span class="philoWhoText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span>
	  	</div>
	  	
	  	<div class="col-md-6 philoWhoImgCont" style="">
	  		<img src="{{ asset('img/philo/How.jpg') }}" class="img-responsive center-block philoWhoImg">
	  	</div>
	</div>

@endsection