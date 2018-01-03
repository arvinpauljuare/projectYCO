@extends('layouts.app')
@section('content')

  <!-- BANNER -->
    <div class="bannerContactUsBG">
      <div class="asTitleCont text-center">
          <span class="asTitle">CONTACT US</span>
      </div>
    </div>  

  <!-- MAP -->
  <div style="width:100%; height:100%;">
    <div id="map" style="height: 100%; width: 100%"></div>
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
