<!DOCTYPE html>
<html>
<head>
		<title>IEEE - The world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="src/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="src/Slick/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="src/Slick/slick/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="src/FA/css/font-awesome.min.css">
		<link href="src/css/scroll.css" rel="stylesheet">
		<link href="src/css/design.css" rel="stylesheet">
		<link href="src/css/footer.css" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<style>
			.row{
				padding:0.5%;
			}
			.ieee_slogun{
				color:#066999;
			}
			.stretch{
				width:500%;
				height:500%;
			}
			footer{
				background-color:#006699;
				color:white;
				text-align:center; 
				padding:5%;
			}
		</style>
		
	</head>
<body style="background-image:url('winners_background.jpg'); background-attachment: fixed;
    background-position: center;
    background-size: cover;">
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-nscroll" style="font-family: 'Ubuntu', sans-serif;">
		  <div class="container-fluid">
			<div class="navbar-header" style="font-family:'Orbitron', sans-serif;">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand logo-name-nscroll" href="index.php">I E E E - V E S I T</a>
			</div>
			<div class="collapse navbar-collapse collapse-nscroll" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown active event-drop-nscroll">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Council <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="council.php#section1">Staff Incharge</a></li>
						<li><a href="council.php#section2">Senior Council</a></li>
						<li><a href="council.php#section3">Junior Council</a></li>
						<li><a href="council.php#section4">Co-ordinator's</a></li>
					</ul>
				</li>
				<li><a href="events.php">Events</a></li>
				<li><a href="#">Contact us</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	<!--WINNERS CRAOUSEL STARTS-->
	<div class="row" style="margin-top:70px;">
	<div class="col-lg-4"></div>
	<div class="col-lg-4" id="winners_display" style="margin:0 auto;">

	</div>
	</div>
	<div class="container">
	<div id="winners_carousel">

	</div>
	</div>
	</div>
	<!--CAROUSEL ENDS-->
	<div class="nav navbar-inverse foot" id="bottom-nav">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
            <h4>Contact Us:</h4>
            <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Tamanna Rupani(Chairperson): +919594403000</p>
            			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Aditya Wakade(Vice chairperson): +9198976394985</p>
            			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Harshal Talele(Jr.MPO): +919920870087</p>
            			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Harini Iyer(Jr.MPO): +919820204601</p>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
            <h4>College Address:</h4>
            <p>Vivekanand Education Society's Institute of Technology, Collector's Colony, Chembur, Mumbai-74</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(College phone): 022-61532532</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
            <h4>Follow Us:</h4>
            <a href="#" class="sm_button" id="fb_button" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="#" class="sm_button" id="twitter_button"><i class="fa fa-twitter-square fa-2x"></i></a>
            <a href="#" class="sm_button" id="youtube_button" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
            <a href="#" class="sm_button" id="instagram_button"><i class="fa fa-instagram fa-2x"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Membership</a></li>
            </ol>
          </div>
        </div>
        <div class="row" style="margin-top:20px;">
          <div class="col-lg-12"><p style="color:#b3b3b3;font-size:11px;">&copy;2016 IEEE-VESIT ALL RIGHTS RESERVED</p></div>
        </div>
      </div>
 </div>
 	
	<script src="src/js/handlebars-v4.0.5.js"></script>
	
	<script src="src/js/handlebars-v4.0.5.js"></script>
	<script src="src/js/jquery.js"></script>
	<script src="src/js/bootstrap.min.js"></script>
	
	<script>
		$.getJSON('winners.json',function(data){
			console.log(data);
			putjsondata(data,'winners_display_src','winners_display');
			putjsondata(data,'winners_carousel_src','winners_carousel');
		});
		function putjsondata(data,src,dst)
		{
			var rawTemplate= document.getElementById(src).innerHTML;
			var compliedTemplate = Handlebars.compile(rawTemplate);
			var ourGeneratedHTML = compliedTemplate(data);
			var menuContainer = document.getElementById(dst);
			menuContainer.innerHTML=ourGeneratedHTML;
		}
	</script>
	<script type="text/javascript" src="src/js/scroll.js"></script>
		<script src="src/Slick/slick/slick.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				 $('#winners_display').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  arrows: false,
				  fade: true,
				  asNavFor: '#winners_carousel',
				  centerMode:'true'
				});
				$('#winners_carousel').slick({
				  slidesToShow: 3,
				  slidesToScroll: 1,
				  asNavFor: '#winners_display',
				  dots: true,
				  centerMode: true,
				  focusOnSelect: true
				});
			});
		</script>
	<script id="winners_display_src" type="text/x-handlebars-template">
 		{{#each winners}}
 		<div><img src="src/img/Winner/{{img}}poster.jpg" width="100%" height="100%"></div>
 		{{/each}}
 	</script>
 	<script id="winners_carousel_src" type="text/x-handlebars-template">
 		{{#each winners}}
 		<div><img src="src/img/Winner/{{img}}poster.jpg" width="100px" height="100px"></div>
 		{{/each}}
 	</script>
	
</body>
</html>