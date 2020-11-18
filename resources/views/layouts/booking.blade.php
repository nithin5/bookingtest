<!doctype html>
<html class="no-js" lang="en">
  <head>
   
 

    <meta charset="utf-8">
    <title>Booking System | Welcome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  /* .carousel-inner img {
    width: 100%;
    height: 100%;
  } */
  .carousel-caption {
    position: absolute;
    top:10%;
    left: 25%;
    right: 0;
    bottom: 0;
    z-index: 10;
    padding-top: 0;
    padding-bottom: 0;
    color: #000;
    text-align: center;
    text-shadow: none;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    }
    .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-top: 2%;
    border: 1px solid;
}
.carousel-indicators {
    top: 100%;
} 
.carousel-indicators ul {
  margin-bottom:1%;
}  
.carousel-indicators li {
    top: 100%;
    background-color: #000;
}
.services{
  border:1px solid #d1d1d1;
  margin-top: 2%;
}
.payments{
  border:1px solid #d1d1d1;
  margin-top:20px;
}
.checkin-text{
  display: block;
  color:cadetblue;
  margin-left:5%;
  margin-right:5px;
  margin-bottom: 1%;
}
ul li{list-style-type:none;}
#loadmore{margin-left: 31%;
    color: cornflowerblue;
}
/**progress bar */
body {
    padding:20px;
    margin:20px;
}
.checkout-wrap {
    font-family:'PT Sans Caption', sans-serif;
    margin: 30px auto 100px;
    z-index: 0;
}
ul.checkout-bar li {
    color: #ccc;
    font-size: 16px;
    font-weight: 600;
    position: relative;
    display: inline-block;
    margin: 50px auto;
    padding: 0;
    text-align: center;
    width: 24.5%;
}
ul.checkout-bar li:before {
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    background: #ddd;
    border: 2px solid #FFF;
    border-radius: 50%;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    text-align: center;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
    height: 34px;
    left: 40%;
    line-height: 34px;
    position: absolute;
    top: -60px;
    width: 34px;
    z-index: 99999;
}
ul.checkout-bar li.active {
    color: #A6447A;
    font-weight: bold;
}
ul.checkout-bar li.active:before {
    background: #A6447A;
}
ul.checkout-bar li.visited {
    color: #036c99;
    z-index: 99999;
    background: none;
}
ul.checkout-bar li.visited:before {
    background: #036c99;
    z-index: 99999;
}
ul.checkout-bar li:nth-child(1):before {
    content:"1";
}
ul.checkout-bar li:nth-child(2):before {
    content:"2";
}
ul.checkout-bar li:nth-child(3):before {
    content:"3";
}
ul.checkout-bar li:nth-child(4):before {
    content:"4";
}
/* ul.checkout-bar li:nth-child(5):before {
    content:"5";
}
ul.checkout-bar li:nth-child(6):before {
    content:"6";
} */
ul.checkout-bar a {
    color: #ccc;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
}
ul.checkout-bar li.active a {
    color: #A6447A;
}
ul.checkout-bar li.visited a {
    color: #036c99;
}
.checkout-bar li.active:after {
    -webkit-animation: myanimation 3s 0;
    background-size: 35px 35px;
    background-color: #A6447A;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content:"";
    height: 15px;
    width: 100%;
    left: 50%;
    position: absolute;
    top: -50px;
    z-index: 0;
}
ul.checkout-bar {
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    background-size: 35px 35px;
    background-color: #EcEcEc;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    border-radius: 15px;
    height: 15px;
    margin: 0 -15px 0;
    padding: 0;
    position: absolute;
    width: 100%;
}
ul.checkout-bar:before {
    background-size: 35px 35px;
    background-color: #036c99;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    content:" ";
    height: 15px;
    left: 0;
    position: absolute;
    width: 14%;
}
ul.checkout-bar li.visited:after {
    background-size: 35px 35px;
    background-color: #036c99;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content:"";
    height: 15px;
    left: 50%;
    position: absolute;
    top: -50px;
    width: 100%;
    z-index: 99;
}
/**eof progress bar */
.pending_pay_text{
display: block;
color:#D2691E;
white-space: nowrap; 
margin-left: 5%;
margin-top: 8%;
}
.user_name_text{
display: block;margin-top:2%;margin-left:29%;
}
.deals_text{
margin-top:2%;margin-left:5%;
}
.deals_icon{
     display: block;
    margin-top: 0%;
    margin-left: 5%;
    float: left;
}
@media only screen and (max-width: 600px) {
.pending_pay_mob_text{
display: block;color:#D2691E;white-space: nowrap;margin-top: 17%;
}
.deals_mob_text{
margin-top:2%;margin-left:5%;
}
.deals_mob_icon{
     display: block;
    margin-top: 2%;
    margin-left: 5%;
    float: left;
}
.user_name_mob_text{
display: block;margin-top:2%;margin-left:58%;
}
.services-head-mob_text{
margin-bottom: 2%;
    margin-left: 1%;
    margin-right: 1%;
}
}
  </style>
  </head>
  <body>

  
@yield('content')  
        
<script>
$(document).ready(function () {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = $(e.target).attr('href');
        var $curr = $(".checkout-bar  a[href='" + href + "']").parent();

        $('.checkout-bar li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");


    });
});
</script>
  </body>
  
</html>



