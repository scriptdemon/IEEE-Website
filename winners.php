<!DOCTYPE html>
<html>
<head>
		<title>IEEE-VESIT</title>
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
                        #winners_carousel div img{
                                cursor:pointer !important;
                        }
		</style>
		<script src="src/js/jquery.js"></script>
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
				  slidesToShow: 2,
				  slidesToScroll: 1,
				  asNavFor: '#winners_display',
				  dots: true,
				  centerMode: true,
				  focusOnSelect: true
				});
				$('#winners_carousel_1').slick({
				  slidesToShow: 7,
				  slidesToScroll: 1,
				  asNavFor: '#winners_display',
				  dots: true,
				  centerMode: true,
				  focusOnSelect: true
				});
			});
		</script>
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
				<li class="dropdown event-drop-nscroll">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Council <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="council.php#section1">Staff Incharge</a></li>
						<li><a href="council.php#section2">Senior Council</a></li>
						<li><a href="council.php#section3">Junior Council</a></li>
						<li><a href="council.php#section4">Co-ordinator's</a></li>
					</ul>
				</li>
				<li><a href="events.php">Events</a></li>
                                <li><a href="winners.php">Winners</a></li>
                                <li><a href="videos.php">Videos</a></li>
				<li><a href="contact.php">Contact us</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	<!--WINNERS CRAOUSEL STARTS-->
	<div class="row" style="margin-top:70px;">
        <h1 class='text-center'style='font-family:"Orbitron",sans-serif;margin-bottom:30px;color:white;'><i class="fa fa-trophy" aria-hidden="true" style="color:#ffcc00;"></i>&nbsp;&nbsp;WINNERS&nbsp;&nbsp;<i class="fa fa-trophy" aria-hidden="true" style="color:#ffcc00"></i></h1>
	<div class="col-lg-4"></div>
	<div class="col-lg-4 center-block" id="winners_display" style="margin:0 auto;">
	        <div><img class="center-block" src="src/img/Winner/Quizzardposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/OTH2k16poster.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/OTH2k17poster.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/COCposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/Robocupposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/THposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/TPPposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/TROTAposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/Bewitchposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/Articalwritingposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/COCBEposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/FCLposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/FPLposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/Smileokposter.jpg" width="300px" height="300px"></div>
		<div><img class="center-block" src="src/img/Winner/Bluffmasterposter.jpg" width="300px" height="300px"></div>
	</div>
	</div>
	<br>
	<div class="container hidden-md hidden-lg">
	<div id="winners_carousel">
		<div><img src="src/img/Winner/Quizzardposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/OTH2k16poster.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/OTH2k17poster.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/COCposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Robocupposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/THposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/TPPposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/TROTAposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Bewitchposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Articalwritingposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/COCBEposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/FCLposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/FPLposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Smileokposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Bluffmasterposter.jpg" width="100px" height="100px"></div>
	</div>
	</div>
	</div>
	<div class="container hidden-xs hidden-sm">
	<div id="winners_carousel_1">
		<div><img src="src/img/Winner/Quizzardposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/OTH2k16poster.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/OTH2k17poster.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/COCposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Robocupposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/THposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/TPPposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/TROTAposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Bewitchposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Articalwritingposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/COCBEposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/FCLposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/FPLposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Smileokposter.jpg" width="100px" height="100px"></div>
		<div><img src="src/img/Winner/Bluffmasterposter.jpg" width="100px" height="100px"></div>
	</div>
	</div>
	</div>
	<!--CAROUSEL ENDS-->
	<div class="nav navbar-inverse foot" id="bottom-nav">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
            <h4><b>Contact Us</b></h4>
            <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Narayan Mundhara(Chairperson): +917303520662</p>
            			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Mihir Joshi(Vice Chairperson): +919167711441</p>
            			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Dhawal Potdar(MPO): +919167020741</p>
            			<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Shazmeen Shaikh(MPO): +917506292623</p>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
            <h4><b>College Address</b></h4>
            <p>Vivekanand Education Society's Institute of Technology, Collector's Colony, Chembur, Mumbai-74</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(College phone): 022-61532532</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 foot-content">
            <h4><b>Follow Us</b></h4>
            <a href="https://www.facebook.com/groups/202373699777405/" class="sm_button" id="fb_button" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="https://www.youtube.com/channel/UCOOep7LpQg3g5GnKtDO_EGA" class="sm_button" id="youtube_button" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
            <a href="https://www.instagram.com/ieee_vesit/" class="sm_button" id="instagram_button"><i class="fa fa-instagram fa-2x"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#abt_ieee">About Us</a></li>
            </ol>
          </div>
        </div>
        <div class="row" style="margin-top:20px;">
          <div class="col-lg-12"><p style="color:#b3b3b3;font-size:11px;">&copy;2017 IEEE-VESIT ALL RIGHTS RESERVED</p></div>
        </div>
      </div>
 </div>

	<script src="src/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="src/js/scroll.js"></script>
</body>
</html>