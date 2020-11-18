@extends('layouts.booking')
@section('content')
<div class="container-fluid p-3 my-3 ">
  
  <nav class="navbar navbar-expand-md navbar-expand-sm bg-info ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
  <li class="nav-item  p-3">
      <a class="nav-link text-white" href="#">  </a>
    </li>
    <li class="nav-item  p-3">
      <a class="nav-link text-white" href="/requests">Requests</a>
    </li>
    <li class="nav-item  p-3">
      <a class="nav-link text-white" href="/services">Services</a>
    </li>
    <li class="nav-item  p-3 active">
      <a class="nav-link text-white active" href="#">Payments</a>
    </li>
    
  </ul>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->


<!-- The slideshow -->
<div class="carousel-inner" >

  <div class="carousel-item active">
  
    <img src="/images/1.jpg"    alt="Los Angeles" style="width:50%;height:50%">
    
    <!-- <div class="col-md-4 col-sm-4 col-xs-4"> -->
    
        <div class="carousel-caption some-text">
        <h3>Best Service</h3>
        <p>Price : $200</p>
        </div>
        <!-- </div>     -->
  </div>
  <div class="carousel-item">
  
    <img src="/images/2.jpg"  alt="Chicago" style="width:50%;height:50%">
   
    <!-- <div class="col-md-4 col-sm-4 col-xs-4"> -->
    
    <div class="carousel-caption">
    <h3>Best Service</h3>
        <p>Price : $200</p>
  </div>
  <!-- </div> -->
  </div>
  <div class="carousel-item">

    <img src="/images/3.jpg"  alt="New York" style="width:50%;height:50%">
   
    <!-- <div class="col-md-4 col-sm-4 col-xs-4">
     -->
    <div class="carousel-caption">
    <h3>Best Service</h3>
        <p>Price : $200</p>
  <!-- </div> -->
  
  </div></div>

</div>
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>
<!-- Left and right controls -->
<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a> -->

</div>
<?php 
   foreach($results as $value){
  
  ?>
<div class="payments">
<div class="row" style="margin-bottom:2%">
  <div class="col-sm-4 col-md-4"><span class="pending_pay_text pending_pay_mob_text"><strong>Pending Payments</strong></span>
  <span style="margin-left:5%">{{ \Carbon\Carbon::parse($value->payment_time)->format('d-M-Y H:i:s')}}</span></div>
  <div class="col-sm-8 col-md-6">
  <h1 class="col-md-5 col-sm-12 col-xs-12"></h1> 
    <div class="checkout-wrap col-md-7 col-sm-12 col-xs-12 pull-right">
        <ul class="checkout-bar">
            <li class=""><a href="#get-started" data-toggle="tab">Request</a>
            </li>
            <li class=""><a href="#about-you" data-toggle="tab">Service</a>
            </li>
            <li class="active"><a href="#looking-for" data-toggle="tab">Payment</a>
            </li>
            <!-- <li class=""><a href="#">Review</a>
            </li> -->
        </ul>
    </div>
  
  
  
  
  </div>
</div>

<div class="row" style="margin-bottom:2%">
  <div class="col-sm-5 col-xs-2">
  <span style="display: block;margin-left:8%;float:left">
  <img src="/images/ny.jpg" class="rounded-circle" alt="Cinque Terre" style="width:80px;height:80px;">
  </span>
  <span class="text-info user_name_mob_text user_name_text"><strong><?php  echo  $value->uname;?></strong></span>
  <span style="margin-top:2%;margin-left:5%"><?php  echo $value->ucity;?></span>
  </div>
  <div class="col-sm-7 col-xs-8">
  <span class="deals_mob_icon deals_icon"><i class='far fa-handshake' style='font-size:36px'></i></span>
  <span class="deals_text deals_mob_text"><strong> You had <?php  echo $value->deals;?> deals before</strong> </span></div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-6 checkin-text" ><span><strong>
  Service is complete. Please Confirm Payment.</strong></div>
  
</div>
<div class="row" style="margin-bottom:2%">
  <div class="col-sm-12 col-md-6"><span style="display:block;margin-left:5%">
  <i class='fas fa-file-invoice-dollar'></i><strong>Invoice</strong></span>
  <span style="float:left;margin-left:5%">Session Price</span>
  <span style="float:right;color:#D2691E;margin-right:5%"><strong>$<?php  echo $value->sprice;?> </strong></span>
  </div>
  </div>  
  <div class="row" style="margin-bottom:2%">
  <div class="col-sm-8"  style="margin-left:5%">
  <button type="button" class="btn btn-light">Start a Chat</button>
  <button type="button" class="btn btn-primary"  style="margin-left:5%">Resend Invoice</button>
  </div>
</div>

</div>
</div>
<?php 
   }
  
  ?>
</div>       
@stop




