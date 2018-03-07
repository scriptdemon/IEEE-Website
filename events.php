<html>
	<head>
		<title>IEEE-VESIT</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="src/css/bootstrap.min.css" rel="stylesheet">
		<link href="src/css/scroll.css" rel="stylesheet">
		<link href="src/css/design.css" rel="stylesheet">
		<link href="src/css/footer.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="src/FA/css/font-awesome.min.css">
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
				width:100%;
				height:100%;
			}
			footer{
				background-color:#006699;
				color:white;
				text-align:center; 
				padding:5%;
			}
			.photo-grid img {
			    display: block;
			    height: 240px;
			    max-width: 100%;
			}
		</style>
	</head>
<body style="background-image:url('council_background.jpg');
background-attachment: fixed;
background-position: center;
background-size: cover;
">
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-nscroll" style="font-family: 'Ubuntu', sans-serif;">
		  <div class="container-fluid" style="10px;">
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
                                <li><a href="videos.php">Videos</a></li>
                                <li><a href="winners.php">Winners</a></li>
				<li><a href="contact.php">Contact us</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		
	<div class="container" style="margin-top:60px;">
	  <ul class="nav nav-pills nav-justified">
		<li class="active"><a data-toggle="pill" href="#all" onclick="putevents(this);">ALL</a></li>
		<li><a data-toggle="pill" href="#up" onclick="putevents(this);">Upcoming Events</a></li>
		<li><a data-toggle="pill" href="#online" onclick="putevents(this);">Online</a></li>
		<li><a data-toggle="pill" href="#work" onclick="putevents(this);">Workshop</a></li>
		<li><a data-toggle="pill" href="#mega" onclick="putevents(this);">Mega Event</a></li>
		<li><a data-toggle="pill" href="#fun" onclick="putevents(this);">Fun Event</a></li>
	  </ul>
	  
	  <div class="tab-content">
		<div id="all" class="tab-pane fade in active row">
		</div>
		<div id="up" class="tab-pane fade row">
		</div>
		<div id="online" class="tab-pane fade row">
		</div>
		<div id="work" class="tab-pane fade row">
		</div>
		<div id="mega" class="tab-pane fade row">
		</div>
		<div id="fun" class="tab-pane fade row">
		</div>
	  </div>
	</div>
		
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
		
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Sign Up or Sign In</h4>
			  </div>
			  <div class="modal-body">
				<div class="row">
						<div class="col-lg-6 col-xs-12">
							<button type="submit" style="background-color:#d34836;color:white;" class="btn btn-default center-block" ><a href="" style="color:white;text-decoration:none;"><i class="fa fa-google-plus" aria-hidden="true"></i>&nbsp;&nbsp;Sign Up with Google</a></button>
						</div>
						<div class="col-lg-6 col-xs-12">
							<form class="form-horizontal">
								<h4>Login</h4><br>
								<div class="form-group">
									<label class="control-label col-sm-3" for="email">Email:</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" id="email" placeholder="Enter email">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" for="pwd">Password:</label>
									<div class="col-sm-9"> 
										<input type="password" class="form-control" id="pwd" placeholder="Enter password">
									</div>
								 </div>
								<div class="form-group">        
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-success" >Login</button>
									</div>
								</div>
							</form>	
						</div>
						</div>
			  </div>
			</div>

		  </div>
		</div>

		
		<div id="eventModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		  	<div id="modaltext">
			</div>

			

		  </div>
		</div>
		
		<script id="event" type="text/x-handlebars-template">
		{{#each data}}
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-grid">
			<div id="{{event_id}}">
			<figure class="center-block" data-toggle="modal" data-target="#eventModal" onclick="puttextmodal(this);">
					<b>
						<img src="src/img/{{event_poster}}" height="100%" width="100%" class="img-responsive">
						<figcaption style="cursor:pointer;"><p>{{event_name}}</p></figcaption>
					</b>
				</figure>
			<br>
			</div>
			</div>
		{{/each}}
		</script>
		<script id="modaltextsrc" type="text/x-handlebars-template">
		
		<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center" style="font-family:'Orbitron',sans-serif;">{{event_name}}</h4>
			  </div>
			  <div class="modal-body">
			  	<div class="row">
			  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block">
			  			<p><img src="src/img/{{event_poster}}" height="240px" width="240px" class="center-block" style="1px solid black;"></p>
			  		</div>
			  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  			<h4 style="text-align:justify;font-family:'Ubuntu',sans-serif;"><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;{{description}}&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></h4>
			  		</div>
				</div>
			  </div>
			  <!--div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div-->
			</div>
			
			
		</script>
		<script src="src/js/handlebars-v4.0.5.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="src/js/bootstrap.min.js"></script>
		<script src="src/js/events.js"></script>
                <script type="text/javascript" src="src/js/scroll.js"></script>
	</body>
</html>