<input type="hidden" id="constant_url" value="{{ url('') }}/{{ Config::get('app.constantURL') }}">
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
        </a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    
        <div class="navbar-collapse collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-center">
                <li class="" style="">
                    <a href="{{ url('home') }}">HOME</a>
                </li>
                <li style="">
                    <a href="{{ url('about/us') }}">ABOUT US</a>
                </li>
               <!--  <li style="">
                    <a href="{{ url('philosophies') }}">OUR BUSINESS</a>
                </li> -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUR BUSINESS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('optimum') }}">TheOptimum R. Fit-out Inc.</a></li>
                      <li><a href="{{ url('ycodesign') }}">YCOptimum Design</a></li>
                      <li><a href="{{ url('ycobusinesssolutions') }}">YCOptimum Business Solutions </a></li>
                    </ul>
                  </li>
               <!--  <li style="">
                    <a href="{{ url('philosophies') }}">PHILOSOPHIES</a>
                </li>
                <li style="">
                    <a href="{{ url('projects') }}">PROJECTS</a>
                </li> -->
                <li style="">
                    <a href="{{ url('contact/us') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
  
</div>