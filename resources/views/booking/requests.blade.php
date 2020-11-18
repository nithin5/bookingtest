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
    <li class="nav-item  p-3 active">
      <a class="nav-link text-white" href="#">Requests</a>
    </li>
    <li class="nav-item  p-3">
      <a class="nav-link text-white" href="/services">Services</a>
    </li>
    <li class="nav-item  p-3">
      <a class="nav-link text-white" href="/payments">Payments</a>
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
<div class="section">
<?php 
   foreach($results as $value){
  
  ?>
<div class="services" id="services_<?php echo $value->id;?>">

<div class="row" style="margin-bottom:2%">
  <div class="col-sm-4 col-md-4"><span class="pending_pay_text pending_pay_mob_text"><strong>Pending Requests</strong></span>
  <span style="margin-left:5%"> {{ \Carbon\Carbon::parse($value->requested_time)->format('d-m-Y H:i:s')}}</span></div>
  <div class="col-sm-8 col-md-6">
  <h1 class="col-md-5 col-sm-12 col-xs-12"></h1> 
    <div class="checkout-wrap col-md-7 col-sm-12 col-xs-12 pull-right">
        <ul class="checkout-bar">
            <li class="active"><a href="#get-started" data-toggle="tab">Request</a>
            </li>
            <li class=""><a href="#about-you" data-toggle="tab">Service</a>
            </li>
            <li class=""><a href="#looking-for" data-toggle="tab">Payment</a>
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
  <img src="/images/<?php  echo  $value->upic;?>" class="rounded-circle" alt="Cinque Terre" style="width:80px;height:80px;">
  </span>
  <span class="text-info user_name_mob_text user_name_text"><strong><?php  echo  $value->uname;?></strong></span>
  <span style="margin-top:2%;margin-left:5%"><?php  echo $value->ucity;?></span>
  </div>
  <div class="col-sm-7 col-xs-8">
  <span class="deals_mob_icon deals_icon"><i class='far fa-handshake' style='font-size:36px'></i></span>
  <span class="deals_text deals_mob_text"><strong> You had <?php  echo $value->deals;?> deals before</strong> </span></div>
</div>
<div class="row">
  <div class="col-sm-12 checkin-text services-head-mob_text" ><span><strong>
 Customer is available at : </strong></div>
  
</div>
 
<div class="row" style="margin-bottom:2%">
  <div class="col-sm-8">
  <span style="margin-left:5%;float:left"><i class='far fa-clock' style='font-size:24px'></i></span>
  <span style="display:block"> {{ \Carbon\Carbon::parse($value->avail_start_time)->format('d-m-Y H:i:s')}}</span>
  <span>
  {{ \Carbon\Carbon::parse($value->avail_end_time)->format('d-m-Y H:i:s')}}
  </span>
  </div>
  

</div>
<div class="row" style="margin-bottom:2%">
  <div class="col-sm-8"><span style="margin-left:5%">
  <i class='fas fa-map-marker-alt' style='font-size:24px'></i></span>
  <span><?php  echo $value->uaddr;?></span>
  </div>
  </div>  
  <div class="row" style="margin-bottom:2%">
  <div class="col-sm-8"  style="margin-left:5%">
  <button type="button" class="btn btn-light">Reschedule</button>
  <button type="button" class="btn btn-primary"  style="margin-left:5%" onClick="request_update(<?php echo $value->id;?>)">Accept Request</button>
  </div>
</div>

</div>

</div>
<?php
}


?>
</div><!--section -->
<div class="newsection" >
</div>
<span id="loadmore" num_loaded="1" >Load More records</span>
<script>
function request_update(id)
          {
              var id = id;
              
              $.ajax({
                  url:"/requestupdate",
                  method:"POST",
                  data:{"_token": "{{ csrf_token() }}",id:id},
                  success:function(data){
                    alert("Request Accepted");
                      $('#services_'+id).hide();
                                      }
              });
          }
  $('#loadmore').click(function() {
    var loaded = $(this).attr('num_loaded');
    loaded= parseInt(loaded) + 1;
     $.ajax({
        url:'/requests',
        type:'GET',
        data:{'from':loaded},
        success: function (data,st) {
          var data=JSON.parse(data);
           var myHtml='';
           var i=0;
              $.each(data, function(index, value) {
                var requested_time = value.requested_time.split(/[- :]/);
                var avail_start_time = value.avail_start_time.split(/[- :]/);
                var avail_end_time = value.avail_end_time.split(/[- :]/);
               requested_time=requested_time[2]+'-'+requested_time[1]+'-'+requested_time[0]+'-'+requested_time[3]+':'+requested_time[4]+':'+requested_time[5];
               avail_start_time=avail_start_time[2]+'-'+avail_start_time[1]+'-'+avail_start_time[0]+'-'+avail_start_time[3]+':'+avail_start_time[4]+':'+avail_start_time[5];
               avail_end_time=avail_end_time[2]+'-'+avail_end_time[1]+'-'+avail_end_time[0]+'-'+avail_end_time[3]+':'+avail_end_time[4]+':'+avail_end_time[5];
              
               var dataset='<div class="services" id="services_'+value.id+'"><div class="section"><div class="row" style="margin-bottom:2%">'+
  '<div class="col-sm-4 col-md-4"><span class="pending_pay_text pending_pay_mob_text"><strong>Pending Requests</strong></span>'+
  '<span style="margin-left:5%"> '+requested_time+'</span></div>'+
  '<div class="col-sm-8 col-md-6"><h1 class="col-md-5 col-sm-12 col-xs-12"></h1>'+
    '<div class="checkout-wrap col-md-7 col-sm-12 col-xs-12 pull-right">'+
        '<ul class="checkout-bar"><li class="active"><a href="#get-started" data-toggle="tab">Request</a>'+
            '</li><li class=""><a href="#about-you" data-toggle="tab">Service</a>'+
            '</li><li class=""><a href="#looking-for" data-toggle="tab">Payment</a>'+
            '</li></ul> </div></div></div>'+'<div class="row" style="margin-bottom:2%">'+
  '<div class="col-sm-5 col-xs-2"><span style="display: block;margin-left:8%;float:left">'+
  '<img src="/images/'+value.upic+'" class="rounded-circle" alt="Cinque Terre" style="width:80px;height:80px;">'+
  '</span><span class="text-info user_name_mob_text user_name_text"><strong>'+value.uname+'</strong></span>'+
  '<span style="margin-top:2%;margin-left:5%">'+value.ucity+'</span>'+
  '</div><div class="col-sm-7 col-xs-8">'+
  '<span class="deals_mob_icon deals_icon"><i class="far fa-handshake" style="font-size:36px"></i></span>'+
  '<span class="deals_text deals_mob_text"><strong> You had '+value.deals+' deals before</strong> </span></div>'+
'</div><div class="row"> <div class="col-sm-12 checkin-text services-head-mob_text" ><span>'+
'<strong>Customer is available at :</strong></div></div>'+
 '<div class="row" style="margin-bottom:2%"><div class="col-sm-8">'+
  '<span style="margin-left:5%;float:left"><i class="far fa-clock" style="font-size:24px"></i></span>'+
  '<span style="display:block"> '+avail_start_time+'</span>'+
  '<span>'+avail_end_time+'</span></div>'+
  '</div><div class="row" style="margin-bottom:2%"><div class="col-sm-8"><span style="margin-left:5%">'+
  '<i class="fas fa-map-marker-alt" style="font-size:24px"></i></span><span>'+value.uaddr+'</span>'+
  '</div></div><div class="row" style="margin-bottom:2%">'+
  '<div class="col-sm-8"  style="margin-left:5%">'+'<button type="button" class="btn btn-light">Reschedule</button>'+
  '<button type="button" class="btn btn-primary"  style="margin-left:5%" onClick="request_update('+value.id+')">Accept Request</button>'+
  '</div></div></div></div></div>';
  i++;
  
  if(dataset != '')  
                     {  
                          $('.section').empty();  
                          
                          myHtml += "<li style='list-style-type:none;'>" + dataset + "</li>";
 
                     }  
                     else  
                     {  
                      myHtml += "<li style='list-style-type:none;'>no more data</li>";
                     }    
                     if(i==<?php echo $totalcounts?>){
                       
                      // myHtml += "<li style='list-style-type:none;'>No more booking</li>";
                       $('#loadmore').text('No more booking');
                     }  
            });
            $( ".newsection" ).html( myHtml );
            $('#loadmore').attr('num_loaded',loaded);
    },
    error: function (data) {
        debugger;
        alert("Error");
    }
        
    
    });
    
});
</script>
</div>       
@stop




