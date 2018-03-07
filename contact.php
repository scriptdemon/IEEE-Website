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
			
			
			
			
			
			
		</style>
	</head>
	<body>
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
				<li class="dropdown  event-drop-nscroll">
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
		<br><br><br><br>
		<div class="container-fluid">
		<div class="col-lg-12 text-center center-block">
						<div id='logo'><img src="src/img/logo.gif" width="120px" height="120px"></div>
						<h1 class="text-center" style="font-family:'Orbitron',sans-serif;">IEEE-VESIT</h1>
						<p class="text-center" style="font-family:'Orbitron',sans-serif;">Excellence through innovation</p>
					</div>
		<div class="row">
			<div class="col-lg-6 text-center">
				<h2>Feedback</h2>
				<form class="form-horizontal">
			  <div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="name" placeholder="Enter name">
				</div>
			  </div>	
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="mail" placeholder="Enter email">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="phone">Phone No:</label>
				<div class="col-sm-10">
				  <input type="number" class="form-control" id="phone" placeholder="Enter Phone number">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="comment">Comments:</label>
				<div class="col-sm-10">
				  <textarea class="form-control" rows="5" id="description"></textarea>
				</div>
			  </div>
			  <div class="form-group">
				    <label class="control-label col-sm-2" for="class">Class:</label>
				    <div class="col-sm-10">
				    <select class="form-control" id="Class">
					    	<option>Select</option>
				    		<option>D6A</option>
							<option>D6B</option>
							<option>D7A</option>
							<option>D7B</option>
							<option>D7C</option>
				          <option>D8</option>
				          <option>D9A</option>
				          <option>D9B</option>
				          <option>D9C</option>
				          <option>D10</option>
				          <option>D11A</option>
				          <option>D11B</option>
				          <option>D12A</option>
				          <option>D12B</option>
				          <option>D12C</option>
				          <option>D13</option>
				          <option>D14A</option>
				          <option>D14B</option>
				          <option>D14C</option>
				          <option>D15</option>
				          <option>D16A</option>
				          <option>D16B</option>
				          <option>D17A</option>
				          <option>D17B</option>
				          <option>D17C</option>
				          <option>D18</option>
				          <option>D19A</option>
				          <option>D19B</option>
				          <option>D19C</option>
				          <option>D20</option>
				    </select>
				    </div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default" id="sub">Submit</button>
				</div>
			  </div>
			  <div id="status">
			  </div>
			</form>
			</div>
			<div class="col-lg-1">
			</div>

			<div class="col-lg-5">
				<div class="row">
					<div class=="col-lg-12 text-center">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.416686732617!2d72.8866320148019!3d19.045408657882756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8addc79943b%3A0x9844a97325ad7a4f!2sVESIT!5e0!3m2!1sen!2sin!4v1490994303808" width="100%" height="60%" frameborder="1" style="border:1" allowfullscreen frameborder="1"></iframe>
					
				</div>
			</div>
			
		</div>
		 </div>
	
<div class="nav navbar-inverse foot" id="bottom-nav" style="padding-left:20px;padding:right:20px;">
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
			<div class="modal-content" style="color:black;">
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
		
		<script src="src/js/handlebars-v4.0.5.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="src/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="src/js/scroll.js"></script>
		<script src="savedetails.js"></script>
	</body>
</html>