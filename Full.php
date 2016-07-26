
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<title>
		ISTE-VITU | Indian Society for Technical Education
	</title>
</head>
<!--Initialising css folders-->
<link rel="stylesheet" href="static/materialize.min.css">
<link rel="stylesheet" href="static/b.css">
<link rel="stylesheet" href="static/navbar.css">
<link rel="stylesheet" href="static/sldier.css">
<link rel="stylesheet" type="text/css" href="static/default.css" />
<link rel="stylesheet" type="text/css" href="static/component.css" />

<!--Initialising javascript folders-->
<script src="static/jquery-2.1.1.min.js"></script>
<script src="static/jquery-2.1.1.min_2.js"></script>
<script type="text/javascript" src="static/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="static/jssor.slider.mini.js"></script>
<script type="text/javascript" src="static/slider.js"></script>
<script type="text/javascript" src="static/jquery-2.1.1.min.js"></script>
<script src="static/materialize.min.1.js"></script>
<script src="static/materialize.min.js"></script>
<script src="static/js/modernizr.custom.js"></script>
<script src="static/main.min.js"></script>

<!--Initialising icon font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Styling header tags-->
<style>
h1,h2,h3,h4,h5,h6{
color:black;
}
</style>
<!--Initialisations end-->

<body>
<!--Navbar begins-->
<div>
    <nav class="navbar-fixed" style="position:fixed ; margin-top:0 ; width:100% ; opacity:0" id="navi">
      <div class="black">
        <ul class="row">
          <a><li class="col s2 offset-s1 white-text"><div onclick="about()" id="q" style="font-size:20px"><center>About</center></div></li></a>
          <a><li class="col s2 white-text"><div onclick="history()" id="q" style="font-size:20px"><center>History</center></div></li></a>
		  <a><li class="col s2 white-text"><div onclick="events()" id ="q" style="font-size:20px"><center>Events</center></div></li></a>
		  <a><li class="col s2 white-text"><div onclick="team()" id="q" style="font-size:20px"><center>Team</center></div></li></a>
		  <a><li class="col s2 white-text"><div onclick="contact()" id="q" style="font-size:20px"><center>Contact</center></div></li></a>
        </ul>
      </div>
    </nav>
</div>
<!--Navbar end-->
<!--Footer starts-->
<div id="footer" class="navbar-fixed" style="height:0">
<div class="footer-outer col s12"  style="position:fixed;margin-bottom:0px">
    <span class="footer-arrow" ></span> 
	<img id="foot-logo" src="static/icons/ISTE-Logo.png" onclick="home()" style="position:fixed ; bottom:11% ; left:47.8% ; width:5%;z-index:2">
  </div>
</div>
<!--Footer ends-->
<!--Home Page begins-->
<div id="first">
<div id="small">

<!--Cards starts-->
	<div class="parallax-container">
		<div class="parallax">
			<img name="back" src="static/team/a.JPG" style="z-index:-1;width:100%;margin-top:0;position:absolute; background-repeat:no-repeat ; background-size:100%;">
		</div>
		<div class="row">
		<div class="col s4 m2 offset-m1">
          <div class="card">
            <div class="card-image">
              <img src="static/icons/au1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-action">
              <center><b><a href="#about" class="black-text" style="font-size:12px">About</a></b></center>
            </div>
          </div>
        </div>
		<div class="col s4 m2">
          <div class="card">
            <div class="card-image">
              <img src="static/icons/pe1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-action">
              <center><b><a href="#history" class="black-text" style="font-size:12px">History</a></b></center>
            </div>
          </div>
        </div>
		<div class="col s4 m2">
          <div class="card">
            <div class="card-image">
              <img src="static/icons/e1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-action">
              <center><b><a href="#events" class="black-text" style="font-size:12px">Events</a></b></center>
            </div>
          </div>
        </div>
		<div class="col s4 m2 offset-s2">
          <div class="card">
            <div class="card-image">
              <img src="static/icons/ot1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-action">
              <center><b><a href="#team" class="black-text" style="font-size:12px">Team</a></b></center>
            </div>
          </div>
        </div>
        <div class="col s4 m2">
          <div class="card">
            <div class="card-image">
              <img src="static/icons/cu1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-action">
              <center><b><a href="#contact" class="black-text" style="font-size:12px">Contact</a></b></center>
            </div>
          </div>
        </div>
		</div>
	</div>
        
      
      
<!--Cards ends-->

</div>
<div id="home" style="height:100%">
	<div class="parallax-container">
		<div class="parallax">
			<img name="back" src="static/team/a.JPG" style="z-index:-1;width:100%;margin-top:0;position:absolute; background-repeat:no-repeat ; background-size:100%;opacity:0.97">
		</div>
		<div class='circle-container'>
				<img style="width:20%;top:50%;left:50%;position:absolute;transform:translateY(-50%) translateX(-50%)"src="static/icons/ISTE-Logo.png"/>
			<a id="5" style="z-index:5" onclick="fifth()" class="deg30" ><img src="static/icons/cu.png"></a>
			<a id="4" style="z-index:5" onclick="fourth()" class="deg150" ><img src="static/icons/ot.png"></a>
			<a id="3" style="z-index:5" onclick="third()" class="deg210" ><img src="static/icons/e.png"></a>
			<a id="2" style="z-index:5" onclick="second()" class="deg270" ><img src="static/icons/pe.png"></a>
			<a id="1" style="z-index:5" onclick="first()" class="deg330" ><img src="static/icons/au.png"></a>
		</div>
	</div>
</div>
</div>
<!--Home Page ends-->

<!--About Us Page starts-->
<div id="about">

  <div class="section white">
    <div class="row container">
	<br>
    <h1 class="header black-text" align="center">About Us</h1>
    <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active black-text"><i class="material-icons">send</i>ISTE</div>
      <div class="collapsible-body black-text"><p>Indian Society for Technical Education  is  a  national,
			professional,  non-profit  making  Society  registered
			under the Societies  Registration  Act  of 1860. First
			started in 1941 as the  Association of Principals of
			Technical Institution(APTI), it was converted into
			 "Indian Society for Technical Education"  in 
			1968 with a view to enlarge its activities to
			advance  the  cause  of  technological 
			education in the country. The major objective of the ISTE is to assist and contribute
			in the production and development of top quality
			professional engineers and technicians needed
			by the industries and other organisations.</p>
	  </div>
    </li>
    <li>
      <div class="collapsible-header black-text"><i class="material-icons">send</i>ISTE VITU Student Chapter</div>
      <div class="collapsible-body black-text"><p>ISTE student chapter, VITU was formally inaugurated on 15th
			December, 2003, it has it's  headquaters in  New Delhi  and 
			has its branches in all the major institutes across India. We 
			conduct both technical and non  technical events and 
			thereby bridge the gap between faculty and students.
			Our  events  range from  guest lectures to  workshops,
			from  conferences to  mock tests  as well as various
			competitive events. All this provides  students with
			an opportunity to interact with eminent scholors,
			broaden their  knowledge base  as well as test
			their acquired skills.</p>
	  </div>
    </li>
    </ul>
	</div>
  </div>
  

	</div>
<!--About us ends-->

<!--History Starts-->
<div id="history" style="background-color:#ecf0f1;padding-top:1">
<div class="container">
			
				<h1 align="center" class="black-text">History</h1>
				
			<div class="main">
				<ul class="cbp_tmtimeline">
					<li>
						<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span style="position:absolute; left:-50%; top:-20px">2015-16</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<div class="white-text"><b>Gravitas'15</b></div><hr>
							<div class="white-text">During the Technical Fest of VIT, ISTE conducted 5 workshops and 9 events. This included one of the largest workshop of graVITas, "Robotix" and the premium event "Code-A-Thon" in which winners were given paid internship at CNSI.</div> 
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-11 12:04"><span style="position:absolute; left:-45px"></span></time>
						<div class="cbp_tmlabel">
							<div class="white-text"><b>Riviera'16</b></div><hr>
							<div class="white-text">During the Cultural Fest of VIT, Riviera, ISTE-VITU conducted 4 events including one of the biggest event of Riviera, Human Foosball.</div>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-13 05:36"><span style="position:absolute; left:-45px"></span></time>
						<div class="cbp_tmlabel">
							<div class="white-text"><b>Horizon'16</b></div><hr>
							<div class="white-text">In March 2016 , ISTE-VITU conducted a 3 day summit in which participants were given a chance to learn about different business strategies that could be implemented with a product idea and how to develop their own website from the scratch. It ended with a competitive implementation session in which the participants were given a problem statement and as a solution for the same they had to come up with a website. The winners were given a total cash prize of up to Rs. 10,000.</div> 
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-15 13:15"><span style="position:absolute; left:-45px"></span></time>
						<div class="cbp_tmlabel">
							<div class="white-text"><b>Other Activities</b></div><hr>
							<div class="white-text"> Iste has conducted several interesting events and workshops, varying from different branches which include workshops like Tech League- Photoshop and Tronix league- LED cube and a multibranch quiz event, Brain quest. ISTE also organised an Industrial Visit to Daimler , Chennai where ISTE members along with the whole ISTE team were shown how Diamler made trucks from the scratch. They were given a whole tour of the factory. ISTE also has an outreach programme, Teach for Vellore, wherein we aid underprivileged students by guiding them for future studies .</div>
						</div>
					</li>
					<!--
					<li>
						<time class="cbp_tmtime" datetime="2013-04-16 21:30"><span style="position:absolute; left:-45px">2011-12</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<h4 class="white-text">Riviera'12</h4>
							<h4 class="white-text">Gravitas'11</h4>
							<h4 class="white-text">Other Activities</h4>
							<p>Teach for vellore and industrial visit</p>
						</div>
					</li>
					-->
				</ul>
			</div>
		</div>
</div>
<!--History ends-->
<!--Events starts-->
<div id="events">

<div class="row " style="height:relative;padding:0.5%">
<h2 class="center black-text lighten-1" >Events</h2>
	<div class="col s12">
			<ul class="tabs row">
				<li class="tab col s3"><a href="#event_updates" class="black-text lighten-1">Upcoming Events</a></li>
				<li class="tab col s3"><a href="#premium" class="black-text lighten-1">Premium Events</a></li>
				<li class="tab col s3"><a href="#weekly" class="black-text lighten-1">Weekly Events</a></li>
				<li class="tab col s3"><a href="#gravitas" class="black-text lighten-1">Gravitas Events</a></li>
				<li class="tab col s3"><a href="#riveira" class="black-text lighten-1">Riviera Events</a></li>
			</ul>
	</div>
	<br>
	<div id="event_updates" class="" style="padding:0.5% ">
		<div class="container">
		<div class="row">
		<div class="col s12 ">
		<br>
		<div class="card medium z-depth-3">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="static/posters/dsa2.jpg"/>
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4"><strong>Data Structures and Algorithms Workshop</strong> <i class="material-icons right">list</i></span>
				  <p style="margin-top:0"><a class="modal-trigger black-text" href="#modal1">Link for Registration</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">
				  <div class="card-image">
				  <img class="activator" src="static/posters/dsa2.jpg">
				</div>
				  <strong>Data Structures and Algorithms Workshop</strong> <i class="material-icons right">close</i>
				  </span>
				  <p class="black-text">ISTE brings to you our special workshop on Data Structures and Algorithms. Brush up your concepts at the right time. Taught by our competent Tech team, we will provide comprehensive notes to aid the learning. Be there.</p>
				</div></div></div></div>
		</div>
		<div id="modal1" class="modal">
		<div class="modal-content">
		<h4><center>Register</h4><hr>
		<form class="col s12" href="#events" method="post" action="<?php echo $current_file;?>" autocomplete="off">
		<div class="row">
		<div class="input-field col s12 l12">
		<i class="large black-text prefix material-icons" style="top:10">person</i>
		<input type="text" id="n" name="n" class="validate black-text">
		<label for="n">Name</label>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12 l12">
		<i class="large black-text prefix material-icons" style="top:10">subtitles</i>
		<input type="text" id="reg" name="reg" class="validate black-text">
		<label for="reg">Registration Number</label>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12 l12">
		<i class="large black-text prefix material-icons" style="top:10">call</i>
		<input type="text" id="mob" name="mob" class="validate black-text">
		<label for="mob">Mobile Number</label>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12 l12">
		<i class="large black-text prefix material-icons" style="top:10">mail</i>
		<input type="text" id="mail" name="mail" class="validate black-text">
		<label for="mail">Email ID</label>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12 l12">
		<i class="large black-text prefix material-icons" style="top:10">group</i>
		<input type="text" id="mem" name="mem" class="validate black-text">
		<label for="mem">Are you an ISTE Member? (Yes/No)</label>
		</div>
		</div>
		<a href="#events"><button class="btn wave-effect wave-light black lighten-1" type="submit">Submit
		<i class="material-icons right">send</i>
		</button></a>
		</form>
		</div>
		</div>
	</div>
	
	  <?php
  include_once('data_connect.php');
  include_once('core.php');
if(isset($_POST['n'])&&isset($_POST['reg'])&&isset($_POST['mob'])&&isset($_POST['mail'])&&isset($_POST['mem'])){
$name=$_POST['n'];
$mobile=$_POST['mob'];
$regno=$_POST['reg'];
$mail=$_POST['mail'];
$member=$_POST['mem'];

if(!empty($name)&&!empty($mobile)&&!empty($regno)&&!empty($mail)&&!empty($member)){
$querycheck="select Name from register where RegistrationNumber='$regno' and MobileNumber='$mobile' and Email='$mail' and Member='$member'";
if(!mysql_num_rows(mysql_query($querycheck))){
$query="insert into register(Name,RegistrationNumber,MobileNumber,Email,Member) values('$name','$regno','$mobile','$mail','$member')";
mysql_query($query);
}
}
}
?>
	
	<div id="premium">
		<div id="jssor_1" style=";position: relative; margin: 0 auto; top: 10px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color:#e0e0e0;">
			<!-- Loading Screen -->
			<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modalTFV"><img data-u="image" src="static/posters/TFV.jpg" /></a>
					<img data-u="thumb" src="static/posters/TFV.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal2"><img data-u="image" src="static/posters/Horizon'16.jpg" /></a>
					<img data-u="thumb" src="static/posters/Horizon'16.jpg" />
				</div>
			</div>
        <!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
				<!-- Thumbnail Item Skin Begin -->
				<div data-u="slides" style="cursor: default;">
					<div data-u="prototype" class="p">
						<div class="w">
							<div data-u="thumbnailtemplate" class="t"></div>
						</div>
						<div class="c"></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
			<!-- Arrow Navigator -->
			<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
			<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
		</div>
	</div>
	<div id="gravitas">
		<div id="jssor_2" style="position: relative; margin: 0 auto; top: 10px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #e0e0e0">
			<!-- Loading Screen -->
			<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal3"><img data-u="image" src="static/posters/Aquabot.jpg" /></a>
					<img data-u="thumb" src="static/posters/Aquabot.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal4"><img data-u="image" src="static/posters/Artificial.jpg" /></a>
					<img data-u="thumb" src="static/posters/Artificial.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal5"><img data-u="image" src="static/posters/Augmented.jpg" /></a>
					<img data-u="thumb" src="static/posters/Augmented.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal6"><img data-u="image" src="static/posters/CloudComputing.jpg" /></a>
					<img data-u="thumb" src="static/posters/CloudComputing.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal7"><img data-u="image" src="static/posters/Code-a-thon.jpg" /></a>
					<img data-u="thumb" src="static/posters/Code-a-thon.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal8"><img data-u="image" src="static/posters/Dimensions.jpg" /></a>
					<img data-u="thumb" src="static/posters/Dimensions.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal9"><img data-u="image" src="static/posters/HF.jpg" /></a>
					<img data-u="thumb" src="static/posters/HF.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal10"><img data-u="image" src="static/posters/Impedence.jpg" /></a>
					<img data-u="thumb" src="static/posters/Impedence.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal11"><img data-u="image" src="static/posters/Robotix.jpg" /></a>
					<img data-u="thumb" src="static/posters/Robotix.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal12"><img data-u="image" src="static/posters/RoboGP.jpg" /></a>
					<img data-u="thumb" src="static/posters/RoboGP.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal13"><img data-u="image" src="static/posters/Stockgyaam.jpg" /></a>
					<img data-u="thumb" src="static/posters/Stockgyaam.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal14"><img data-u="image" src="static/posters/TAR.jpg" /></a>
					<img data-u="thumb" src="static/posters/TAR.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal15"><img data-u="image" src="static/posters/TD.jpg" /></a>
					<img data-u="thumb" src="static/posters/TD.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal16"><img data-u="image" src="static/posters/UE.jpg" /></a>
					<img data-u="thumb" src="static/posters/UE.jpg" />
				</div>
				</div>
        <!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
				<!-- Thumbnail Item Skin Begin -->
				<div data-u="slides" style="cursor: default;">
					<div data-u="prototype" class="p">
						<div class="w">
							<div data-u="thumbnailtemplate" class="t"></div>
						</div>
						<div class="c"></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
			<!-- Arrow Navigator -->
			<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
			<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
		</div>
		</div>
	<div id="riveira">
		<div id="jssor_3" style="position: relative; margin: 0 auto; top: 10px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #e0e0e0">
			<!-- Loading Screen -->
			<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal17"><img data-u="image" src="static/posters/race.jpg" /></a>
					<img data-u="thumb" src="static/posters/race.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal18"><img data-u="image" src="static/posters/bird.jpg" /></a>
					<img data-u="thumb" src="static/posters/bird.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal19"><img data-u="image" src="static/posters/prison.jpg" /></a>
					<img data-u="thumb" src="static/posters/prison.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal20"><img data-u="image" src="static/posters/foosball.jpg" /></a>
					<img data-u="thumb" src="static/posters/foosball.jpg" />
				</div>
			</div>
        <!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
				<!-- Thumbnail Item Skin Begin -->
				<div data-u="slides" style="cursor: default;">
					<div data-u="prototype" class="p">
						<div class="w">
							<div data-u="thumbnailtemplate" class="t"></div>
						</div>
						<div class="c"></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
			<!-- Arrow Navigator -->
			<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
			<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
		</div>
		</div>
	<div id="weekly">
		<div id="jssor_4" style=";position: relative; margin: 0 auto; top: 10px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #e0e0e0;">
			<!-- Loading Screen -->
			<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal21"><img data-u="image" src="static/posters/TechLeagueSes1.jpg" /></a>
					<img data-u="thumb" src="static/posters/TechLeagueSes1.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal22"><img data-u="image" src="static/posters/TronixSes1.jpg" /></a>
					<img data-u="thumb" src="static/posters/TronixSes1.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modal23"><img data-u="image" src="static/posters/TronixSes2.jpg" /></a>
					<img data-u="thumb" src="static/posters/TronixSes2.jpg" />
				</div>
				<div data-p="144.50" style="display: none;">
					<a class="modal-trigger" href="#modalbq"><img data-u="image" src="static/posters/bq.jpg" /></a>
					<img data-u="thumb" src="static/posters/bq.jpg" />
				</div>
			</div>
        <!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
				<!-- Thumbnail Item Skin Begin -->
				<div data-u="slides" style="cursor: default;">
					<div data-u="prototype" class="p">
						<div class="w">
							<div data-u="thumbnailtemplate" class="t"></div>
						</div>
						<div class="c"></div>
					</div>
				</div>
				<!-- Thumbnail Item Skin End -->
			</div>
			<!-- Arrow Navigator -->
			<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
			<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
		</div>
	</div>
	<br><br><br><br><br>
</div>
</div>
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>Data Structures and Algorithms</h4><hr>
		<p class="black-text">‘Teach For Vellore’ is an initiative taken by ISTE (Indian Society for Technical 
		Education) to spread practical, technical knowledge among the children of Vellore. It is a 
		platform for deserving students who do not have the amenities and resources but have a thirst 
		for knowledge and we would like to contribute towards this in every way we can. 
		The second session of Teach For Vellore was conducted at Don Bosco Higher Secondary 
		School looking at the overwhelming response of the previously conducted session. The target 
		audience for this session was grade 11 students as the session was based on CAREER 
		COUNSELLING. The session was interactive and received a good response from the 
		students. They were keen on knowing and learning more about the various opportunities that 
		lie ahead of them after completing their secondary education. They asked questions regarding 
		the various fields we spoke about and seemed satisfied at the end of the sessions, waiting for 
		more such sessions. To conclude we were delighted to see students willing to explore their career options and 
		making a small yet significant step towards their career.</p>
	</div>
	<div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">CLOSE</a>
    </div>
</div>
<div id="modalTFV" class="modal">
	<div class="modal-content">
		<h4><center>Teach for Vellore</center></h4><hr>
		<p class="black-text">‘Teach For Vellore’ is an initiative taken by ISTE (Indian Society for Technical 
		Education) to spread practical, technical knowledge among the children of Vellore. It is a 
		platform for deserving students who do not have the amenities and resources but have a thirst 
		for knowledge and we would like to contribute towards this in every way we can. 
		The second session of Teach For Vellore was conducted at Don Bosco Higher Secondary 
		School looking at the overwhelming response of the previously conducted session. The target 
		audience for this session was grade 11 students as the session was based on CAREER 
		COUNSELLING. The session was interactive and received a good response from the 
		students. They were keen on knowing and learning more about the various opportunities that 
		lie ahead of them after completing their secondary education. They asked questions regarding 
		the various fields we spoke about and seemed satisfied at the end of the sessions, waiting for 
		more such sessions. To conclude we were delighted to see students willing to explore their career options and 
		making a small yet significant step towards their career.</p>
	</div>
</div>
<div id="modal2" class="modal">
	<div class="modal-content">
		<h4><center>Horizon'16</center></h4><hr>
		<p class="black-text">Indian Society for Technical Education conducted a 3-day summit on the 18th,19th and 20th of March,2016. 
		On Day 1, a workshop on Webpreneurship was taken by the CEO and founder of Innovians Technologies, Mr. Prateek Gupta. Mr. Prateek is a young entrepreneur and technocrat and has guided many start-up companies to achieve their goals. 
		On Day 2, a workshop was conducted where we taught our participants the basics of front end and back end development using Materialise and Flask. 
		On Day-3, a competitive implementation session was held , wherein the participants were given a problem statement and they had to make a web based product and think of ideas to sell it. The winners were awarded with a price money of 5k, 3k and 2k respectively. 
		Refreshments and certificates were provided to all the participants.</p>
	</div>
</div>
<div id="modal3" class="modal">
	<div class="modal-content">
		<h4><center>Aquabot</h4><hr>
		<p class="black-text">Aquabot was an innovative and uniquely designed competition by ISTE. The competition comprised of 3 
		rounds spanning over 2 days. The event showcased robots maneuvering through the aquatic environment and scrounging for coins. The 
		team with the maximum coins in minimum time limit won the competition. 
		In the first round the participants had to present their bots in front of the judges and explain its features to 
		them. In the second round, bots were anchored to a bar magnet and iron coins of denominations were kept 
		hidden in a sand base, made underwater, in a transparent tank. The bot that collected the maximum coins in 
		the stipulated time went further to the final round. In the final round, the bots had to face different levels of 
		water and waves in a 50 meter race. The event was a success with an active participation from internal, as well as, external participants.
		</p>
	</div>
</div>
<div id="modal4" class="modal">
	<div class="modal-content">
		<h4><center>Artificial Intelligence</h4><hr>
		<p class="black-text">ISTE conducted a workshop which was an interactive session between participants and the speakers. 
		Artificial intelligence explores the boundary line of what humans have already reached and is hence a 
		vital component of future research and development of scientific technology. 
		Artificial Intelligence was a workshop conducted by one of VIT’s esteemed faculty member, Mr. 
		Raghuveer V R along with 4 students, Taranveer Singh and Raj Biswas (4th year students), and 
		Abhishek Mukherjee and UtkarshSrivastava (3rd year students). The team had an informative session 
		planned for the participants and shared with them all their knowledge about Artificial Intelligence and 
		the projects that they had been working on. 
		The second session was taken by Mr. Navneet Sharma, founder of SnapSnop R, AI based startup in 
		Bangalore and a VIT alumni. He talked about his startup and he not only shared his knowledge about 
		AI with the participants but also had a lot to share about his endeavor as an entrepreneur.
		The workshop aimed to learn statistical methods and computational intelligence with regard to artificial 
		intelligence. With the active participation of both the participants and speakers, this workshop was a 
		huge success with positive feedback from the participants.</p>
	</div>
</div>
<div id="modal5" class="modal">
	<div class="modal-content">
		<h4><center>Augmented Reality</h4><hr>
		<p class="black-text">Augmented Reality was brought up for the first time in graVITas. It aimed at merging ones real world with 
		the virtual world. Its cutting edge theme was used to enhance one’s perception of reality. Augmentation is 
		conventionally in real time and in semantic context with environmental elements. The workshop dealt with 
		the technology behind ‘Google Glass’ and its eye catching features. The list didn’t end here but pushed 
		beyond the limits up to converting laptop to touchscreen, controlling laptop projections with just a few 
		gestures not just this also voice controlled cursor. This workshop blurred the boundary between virtual and 
		the real world. The speaker of the seminar was HimanshuLohia, a corporate trainer at Infizeal technologies. He is an 
		eminent figure with extreme intellectual thinking and great understanding of the link between the real world 
		and the vast based applications of the virtual worlds and simulations we humans have been able to create.</p>
	</div>
</div>
<div id="modal6" class="modal">
	<div class="modal-content">
		<h4><center>Cloud Computing</h4><hr>
		<p class="black-text">Cloud computing was a new venture into the vast themes in workshop. The workshop majorly was based
		upon ‘on demand computing’ which was basically a kind of internet based computing, where shared 
		resources, data and information are provided to computers and other devices on demand. The major topic of 
		discussion was the capability of cloud competing to store and process their data in third party data centres.
		The speakers mainly talked about how cloud computing allows companies to avoid upfront infrastructure 
		costs, and focus on projects that differentiate their business. Also a major advantage that was showcased by 
		the workshop was how it pumped up the speed of applications and improved manageability with less 
		maintenance. It demonstrated an example of how cloud technology works as an efficient system to improve quality service 
		to reduce overhead costs, downtime and automate infrastructure deployment.</p>
	</div>
</div>
<div id="modal7" class="modal">
	<div class="modal-content">
		<h4><center>Code-a-thon</h4><hr>
		<p class="black-text">Code-a-thon was a 24-hour coding event where participants had to work in a team of two and apply their 
		logical and problem solving skills to solve questions using any coding language. It was a premier coding 
		challenge for students hailing from all walks of engineering who have a zeal for programming in a competitive environment.
		This event started at 8am on 12th of September and ended at 8am on 13th of September.Hacker Rank 
		provided a domain for ISTE to conduct Code-A-Thon during graVITas’15 and gave out certificates along 
		with attractive goodies and t-shirts to the participants.Hacker Rank is a platform that is used by 
		programmers to compare their skills across different competitors.The participants were supposed to log-in 
		to the Hacker Rank portal and received the list of questions. On submission of the codes, they were 
		marked out of 200 and the top three teams cash prizes along with paid internship by our sponsors, CNSI, Chennai worth Rs.10,000 each. 
		The event received an extensive turn out of participants with an overwhelming response which made it a big hit.</p>
	</div>
</div>
<div id="modal8" class="modal">
	<div class="modal-content">
		<h4><center>Dimensions</h4><hr>
		<p class="black-text">DIMENSIONS , a technical robotic event was conducted in Gravitas’15. It involved two 
		opponents protecting their city which consisted of certain number of walls. 
		Each team consisted of three participants. Both the teams were given the bots and they had to 
		destroy the opponents walls within seven minutes .In round 1,the bots had to attack 
		opponents city. For round 2, marbles were introduced as obstacles in the city. 
		The winner was the team whose city was least destroyed. 
		By the feedback received by the participants, the event was a successful and they enjoyed participating in it.</p>
	</div>
</div>
<div id="modal9" class="modal">
	<div class="modal-content">
		<h4><center>Human Foosball</h4><hr>
		<p class="black-text">Human Foosball was an exciting informal event that was conducted by ISTE in 
		graVITas’15. The event attracted the masses and was a huge success.
		In this event, instead of playing foosball on a table, participants had to compete in an arena 
		and score as many goals as possible. They had to play in teams of five and every match was 
		5-minute long. The main aim was to score as many goals as possible and for the winning 
		team to have as high a score difference as possible. 
		The event attracted the masses and was a huge success. A large number of students, internal 
		as well as external, participated in the event.</p>
	</div>
</div>
<div id="modal10" class="modal">
	<div class="modal-content">
		<h4><center>Impedence</h4><hr>
		<p class="black-text">The event, Impedance, which was conducted by ISTE focused on the basics of electronics, its knowledge 
		and implementation. The whole event was revolving around the electrical concepts that the participants have learnt overall.
		The event consisted of three rounds where participants took part as a team of two. The first round was the 
		quiz round in which questions were based on basic electrical concepts and its applications. In the following 
		rounds, the teams were given circuit diagramsandwere required to construct the circuit on the breadboard 
		and get the required value of potential. The participants gave a positive response and found the event interesting and challenging.</p>
	</div>
</div>
<div id="modal11" class="modal">
	<div class="modal-content">
		<h4><center>Robotix</h4><hr>
		<p class="black-text">Robotix, the biggest pre-gravitas workshop and the most awaited event was conducted on 20th September. 
		In the session, advanced electronic principles are used to design complex and elaborate robots which have 
		diverse range of applications. Participants are provided with a kit which enabled them to make five bots 
		along with a special handbook which served as their guide throughout their workshop. It is a 24 hour 
		workshop where the participants are taught to make the following five different types of robots.
		The Obstacle Avoider: This Bot is completely automatic and can even find its way through a maze. Using 
		IR sensors, which catch the frequency of black colour thereby detecting the presence of an obstacle in its 
		path and it smoothly turns in order to avoid it. 
		The Mobile Controlled DTMF Bot: This Bot can be controlled using mobile networks .So this makes it 
		possible for people to control their bot in Vellore from their houses in Bangalore. 
		The Laptop Controlled Bot: This Bot can be controlled using a laptop which is connected to the Bot 
		through a USB cable. The arrow keys provide the required navigation for the Bot.
		The Joystick Controlled Bot: This bot can be controlled using a joystick which is also called the 
		accelerometer. The joystick can be programmed to control the speed and the extent to which the joystick 
		can be pushed to accelerate.
		The Gesture Controlled Bot:This bot can be controlled using human gestures. It uses an accelerometer to 
		get different signals based upon its orientation.</p>
	</div>
</div>
<div id="modal12" class="modal">
	<div class="modal-content">
		<h4><center>RoboGP</h4><hr>
		<p class="black-text">ROBO-GP was a robotics event conducted by ISTE which primarily included racing of a bot along with 
		rigorous testing of its speed and control. It focused on improving the driving ability of the robots and 
		simultaneously gave participants a paramount racing experience which left them completely satisfied with 
		thrilling obstacles and a race track which challenged them. 
		Round 1: A set of tests were put forth for the bots which included traction control test ,bridge the gap ,suspension Test 
		,hill Test, manoeuvrability test and drift Test. 
		Round 2: The qualifiers from Round 1 were put on a one on one race on a challenging track with different obstacles 
		such as pendulum, bridges, curves, etc. 
		This event was immensely appreciated by all those who participated and was overall a huge success. This 
		gave them an insight into the world of robotics and was well received by the participants.</p>
	</div>
</div>
<div id="modal13" class="modal">
	<div class="modal-content">
		<h4><center>Stockgyaan</h4><hr>
		<p class="black-text">Stock Gyaan was a workshop conducted on the basics of the Indian Financial Markets and their working.
		This workshop was specifically for all those who were interested in stock market and its analysis, a career in 
		investment and finance, a game of maths and luck to make a career out of it and who want to have an extra 
		earning source. The workshop’s prime objective was to make students aware of the various Market 
		Indicators and limiting factors that helps one predict the possible price movements and momentum of the 
		stocks, thus, maximizing one’s knowledge and profitability and gain for his own. Participants were also 
		given a live demonstration of how to buy and sell shares of a company online and an example of how to do the same offline. 
		The speaker for the seminar was Mr. Vivek Karwa, an NDTV Panelist and a Practicing Certified Personal 
		Financial Planner. He is an eminent figure in the Fundamental Analysis and Investment Strategy industry, 
		with an experience of over 12 years. He also provides advisory services to all kinds of investors like HNIs, 
		NRIs, Retail, Corporates, and Trusts.</p>
	</div>
</div>
<div id="modal14" class="modal">
	<div class="modal-content">
		<h4><center>The Amazing Race</h4><hr>
		<p class="black-text">Amazing Race was a two day event, conducted by ISTE which was based on the American Television Show 
		but with a technical touch including technical clues and tasks.Teams of two were made to run around the 
		entire campus and the team that arrived at the final destination won the race. 
		Participants were made to complete a series of challenges spanning over two days and reach the final 
		destination by solving the riddles and performing the tasks. The first round required the participants to solve 
		a couple of riddles and picture-clues which led them to certain destinations around the campus.The next 
		round was an accuracy round where they were supposed to count the occurrences of certain alphabets in 
		names of trees planted by known personalities.The rounds that followed had a series of interesting tasks 
		involving running backwards, three-legged race,overcoming obstacles inside a maze, scoring a basket 
		through a hoola hoop etc. The winning teams as well as other finalists appreciated all rounds and the 
		organization of the event.TheAmazing Race turned out to be a very successful event with a very active 
		participation from all participants.</p>
	</div>
</div>
<div id="modal15" class="modal">
	<div class="modal-content">
		<h4><center>True Detective</h4><hr>
		<p class="black-text">One of the most anticipated events of graVITas’15, True Detective was an informal event based on forensic 
		sciences and narcotics. The event was held on the first day of graVITas ’15 for duration of six hours. The participants arrived in 
		teams of two to solve a murder mystery and they were given clues, which led them to certain locations within 
		the campus. The event included three major tasks,‘DNA Fingerprinting’, ‘Blood Grouping’ and ‘Cipher Decrypting’.
		In the first round, blood grouping was done using chemicals and the qualifying teams were given 
		DNA fingerprints of suspects. The participants had to match the fragment with the eight fingerprints. In the third 
		round, they had to decrypt the ciphers using a cipher manual in order to find the killer. 
		The event turned out to be a huge success with positive feedback from all the participants.</p>
	</div>
</div>
<div id="modal16" class="modal">
	<div class="modal-content">
		<h4><center>Ultimate Engineer</h4><hr>
		<p class="black-text">ULTIMATE ENGINEER, a premium event organised in Gravitas’15 ,tested the participants on their 
		knowledge, skills and management. 
		The first round was a computer based round and teams qualified according to their scores. In the next round 
		questions related to their branch when decoded led them to different locations. Third round was an online 
		maze and the fastest to complete the maze from each branch qualified for last round. The final round was a 
		buzzer round where questions from current affairs were asked.
		Every participant who came for the event appreciated the event and found it to be well-organised. 
		Participants liked the concept of online maze and buzzer round and felt that race against time added to excitement.
		Overall this was a successful event as reflected from the feedback received from the participants.</p>
	</div>
</div>
<div id="modal17" class="modal">
	<div class="modal-content">
		<h4><center>The Amazing Race</h4><hr>
		<p class="black-text">Bringing the famous American Reality Game Show to VIT, this event is a thrilling and exciting race around 
		the campus.The race comprised of several challenges spanning over 2 days. Teams of two were made to 
		travel through the entire campus to find clues and perform interesting tasks.
		Participants were made to complete a series of challenges and reach the final destination by solving the 
		riddles and performing the tasks. The teams got eliminated at different rounds as the race progressed and the 
		team that arrived first at the final destination won the race.In the first round the participants were given 
		riddles and pictogram which led them to their next destination. In the next round the participants were 
		supposed to count the exact number of footpath poles and wall-speaks, etc.The rounds that followed had a 
		series of interesting tasks involving walking on bricks, crossing the maze, three-legged race etc. The event 
		turned out to be a huge success with a very active participation and received appreciation from all the participants.</p>
	</div>
</div>
<div id="modal18" class="modal">
	<div class="modal-content">
		<h4><center>Live Angry Birds</h4><hr>
		<p class="black-text">Live Angry Birds was a fun, new and enthralling event conducted for the first time by ISTE in Riviera’16. 
		This event was an attempt to bring the famous mobile game, ‘Angry Birds’ to life. In this event, two huge 
		catapults were made for the event, which amplified the feel of playing the Angry Birds live. This event 
		involved providing the participants with various goods like boxes and balloons having different points with 
		which they were supposed to build their own little arena in a confined area. The boxes were painted in 
		different colors and there were certain points for each color. Participants played in teams of two and showed 
		their skills and strength in the real world of gaming by destroying the arena set up by the opponent team with 
		the help of catapults. The team that scored the maximum points won. The event received a good response from the masses.</p>
	</div>
</div>
<div id="modal19" class="modal">
	<div class="modal-content">
		<h4><center>Prison Break</h4><hr>
		<p class="black-text">Prison Break was a 2 day event conducted by ISTE that is inspired by various detective series and 
		movies.The event consisted of 10 rounds where participants were challenged to think on their feet and solve 
		intricate ciphers. The event basically involved a team of two, one person being inside the prison and the 
		other, working outside to prove him innocent.
		The plot opened up after every round.The event had two major parts, solving ciphersand performing tasks 
		within the campus. In every round, one person stayed inside the prison and solved ciphers to reveal the next 
		part of the story and the other person performed tasks like solving clues to get to a location in order to get 
		the next cipher. After every round, the person inside the prison went outside and vice versa.</p>
	</div>
</div>
<div id="modal20" class="modal">
	<div class="modal-content">
		<h4><center>Human Foosball</h4><hr>
		<p class="black-text">Human Foosball was the most popular, enthralling and exciting informal event that was conducted by ISTE. 
		It was conducted on all four days of Riviera every year. In this event, instead of playing foosball on a table, 
		participants had to physically compete in an arena replacing the tiny plastic players, as the name suggests. 
		The arena was built exactly like in the game ‘foosball’ but, of course larger in size and compatible for 10 
		people entering the arena. Participants played in teams of 5 and the main aim was to score as many goals as possible and for the 
		winning team to have as high a score difference as possible.p</p>
	</div>
</div>
<div id="modal21" class="modal">
	<div class="modal-content">
		<h4><center>Tech League Session 1</h4><hr>
		<p class="black-text">The first session of the Tech League was Photoshop which helped the students to master photo editing on Adobe CS6 from scratch. 
		The event was conducted by the technical head, Ashay Shah, who made the session interesting by briefly 
		explaining the different features of the software by using photos as examples and editing them, giving the 
		students a hands on experience. He dealt with the various tools available in the software and taught them the 
		basics in a very comprehensive manner.</p>
	</div>
</div>
<div id="modal22" class="modal">
	<div class="modal-content">
		<h4><center>Tronix League Session 1</h4><hr>
		<p class="black-text">The first session of Tronix League conducted by ISTE helped the students to learn the basics of LED 
		circuitry and Arduino Language to make a 3x3x3 LED cube. 
		The event was conducted by the technical head, Poroma Banerjee, wherein she explained basic commands of 
		Arduino language and assembly of components of circuitry. It was a hands-on session which helped 
		participants to assemble and solder the components on their own to achieve better understanding and 
		knowledge of the LED cube designing.
		The workshop was appreciated by all which was reflected on the feedback forms. Overall the workshop was a huge success.</p>
	</div>
</div>
<div id="modal23" class="modal">
	<div class="modal-content">
		<h4><center>Diving into MSP430 (Tronix League Session 2) </h4><hr>
		<p class="black-text">ISTE in collaboration with a group of students supported by Texas Instruments organised a one day 
		workshop on MSP430. The workshop was conducted by Mohammad Saad Rashid, Kartikeya Bhargava and Parin Jhaveri.
		They made the workshop very interesting by teaching the participants about the Microprocessor MSP430
		and its working. Kits and softwares were provided to make it an interactive hands on session. The event
		received a good response and it was overall a huge success.</p>
	</div>
</div>
<div id="modalbq" class="modal">
	<div class="modal-content">
		<h4><center>Brain Quest</h4><hr>
		<p class="black-text">ISTE brings back the ultimate quiz conducted for the fourth consecutive year, 'BRAIN QUEST'
		a fiercely contested between the different schools of VIT for the top spot. 
		It will be conducted in collaboration with DBQC(quiz club of VIT). It will have two rounds. The first round will 
		be conducted school-wise where top two participants will be teamed up. Second and the final round will be 
		a contest between the respective teams of different schools.</p>
	</div>
</div>
<!--Events end-->

<!--Our team starts-->
<div id="team" class="" style="height:relative;padding:0.5%;background-color:#ecf0f1">
<h2 class="center black-text lighten-1" >Team ISTE</span></h2>
	<div id="navbar" class="col s12">
			<ul class="tabs row" style="z-index:0">
				<li class="tab col s4"><a class="black-text"href="#faculty">Faculty Coordinator</a></li>
				<li class="tab col s4"><a href="#board" class="black-text">Board Members</a></li>
				<li class="tab col s4"><a href="#core" class="black-text">Core Members</a></li>
			</ul>
	</div>
	<div id="faculty">
	<div class="row">
			<div class="col l3 s6 offset-l2">
				<div class="card large" style="margin-top:100px" style="margin-top:100px">
					<div class="card-image" >
						<img src="static/team/Amit.jpg" style="height:100%">
					</div>
					<div class="card-content">
						<center><p style="font-family:verdana"><h5>Mr. A Mahindrakar</h5></p></center>
						<center><h6>Faculty Coordinator</h6></center>
					</div>
				</div>
			</div>
			<div class="col l3 s6 offset-l2">
				<div class="card large" style="margin-top:100px" style="margin-top:100px">
					<div class="card-image" >
						<img src="static/team/sasi.jpeg" style="height:100%">
					</div>
					<div class="card-content">
						<center><h5>Mr. S Sasikumar</h5></center>
						<center><h6>Faculty Coordinator</h6></center>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="board">
	<div class="row">
		<div class="col l3 s6">
			<div class="card large" style="margin-top:100px">
				<a href="https://www.facebook.com/krishnateja.reddy2?fref=ts">
				<div class="card-image" >
					<img src="static/team/teja.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Krishna Teja Reddy</h5></center>
					<center><h6>Student Head</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/anujay.tiwari.3?fref=ts">
				<div class="card-image" >
					<img src="static/team/anujay.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Anujay Tiwari</h5></center>
					<center><h6>Student Coordinator</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/ankic29?fref=ts">
				<div class="card-image" >
					<img src="static/team/ankita.JPG" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Ankita Choudhary</h5></center>
					<center><h6>Student Coordinator</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/KanyaSinha?fref=ts">
				<div class="card-image" >
					<img src="static/team/kinnri.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Kinnri Sinha</h5></center>
					<center><h6>Manager of Events and Finance</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/HariKrishnaKrish361?fref=ts">
				<div class="card-image" >
					<img src="static/team/hari.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Hari Krishna</h5></center>
					<center><h6>Manager of Events and Finance</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/poroma.banerjee.5?fref=ts">
				<div class="card-image" >
					<img src="static/team/poroma.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Poroma Banerjee</h5></center>
					<center><h6>Technical Head</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/ashay.shah.566?fref=ts">
				<div class="card-image" >
					<img src="static/team/ashay.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Ashay Shah</h5></center>
					<center><h6>Technical Head</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/gargi.vyas.7?fref=ts">
				<div class="card-image" >
					<img src="static/team/gargi.JPG" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Gargi Vyas</h5></center>
					<center><h6>Manager of Documentation</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6 offset-l3">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/goyalrishi?fref=ts">
				<div class="card-image" >
					<img src="static/team/rishabh.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Rishabh Goyal</h5></center>
					<center><h6>Manager of Public Relations</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/siddhant.sorann?fref=ts">
				<div class="card-image" >
					<img src="static/team/sid.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Siddhant Sorann</h5></center>
					<center><h6>Manager of Public Relations</h6></center>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
<div id="core">
	<div class="row">
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/adityan.elangovan?fref=ts">
				<div class="card-image" >
					<img src="static/team/adityan.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Adityan Elangovan</h5></center>
					<center><h6>Technical Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/smart.aryanraj?fref=ts">
				<div class="card-image" >
					<img src="static/team/aryan.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Aryan Raj Singh</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/guneet.bhatia.77?fref=ts">
				<div class="card-image" >
					<img src="static/team/guneet.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Guneet Bhatia</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/profile.php?id=100007944244409&fref=ts">
				<div class="card-image" >
					<img src="static/team/mayank.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Mayank Bharadwaj</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/pranav.sethi.7?fref=ts">
				<div class="card-image" >
					<img src="static/team/pranav.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Pranav Sethi</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/sagargoel6?fref=ts">
				<div class="card-image" >
					<img src="static/team/sagar.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Sagar Goel</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/sarguru.sg?fref=ts">
				<div class="card-image" >
					<img src="static/team/sarguru.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Sarguru</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/profile.php?id=100009450449405&fref=ts">
				<div class="card-image" >
					<img src="static/team/snehil.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Snehil</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/somya.agarwal.397?fref=ts">
				<div class="card-image" >
					<img src="static/team/somya.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Somya Agarwal</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/ria.arora.1310?fref=ts">
				<div class="card-image" >
					<img src="static/team/ria.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Ria Arora</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/profile.php?id=100004564656982&fref=ts">
				<div class="card-image" >
					<img src="static/team/ritika.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Ritika Ghosh</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/uddipta.goswami?fref=ts">
				<div class="card-image" >
					<img src="static/team/ud.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Uddipta Goswami</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/vaibhav.satpathy?fref=ts">
				<div class="card-image" >
					<img src="static/team/vaibhav.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Vaibhav Satpathy</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/vaishnavisakshi.shahsingh?fref=ts">
				<div class="card-image" >
					<img src="static/team/vaishnavi.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Vaishnavi Shah</h5></center>
					<center><h6>Management Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6">
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/killervishu?fref=ts">
				<div class="card-image" >
					<img src="static/team/vishu.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Vishu Aggarwal</h5></center>
					<center><h6>Technical Core</h6></center>
				</div>
				</a>
			</div>
		</div>
		<div class="col l3 s6" >
			<div class="card large" style=";margin-top:100px">
				<a href="https://www.facebook.com/yashg1997">
				<div class="card-image" >
					<img src="static/team/yash.jpg" style="height:100%">
				</div>
				<div class="card-content">
					<center><h5>Yash Gupta</h5></center>
					<center><h6>Technical Core</h6></center>
				</div>
				</a>
			</div>
		</div>


		
	</div>
</div>
</div>
<!--Our team ends-->


<!--Contact us starts-->
<div id="contact" class="row" style="">
<h2 class="center black-text lighten-1" >Contact Us</h2>
<div class="col s12">
	<form autocomplete="off" method="post" action="<?php echo $current_file;?>">
	<div class="modal-content center black-text" style="position:relative;;">
		<div class="row">
				<div class="input-field col s8 offset-s2">
					<input type="text" id="title" name="title" class="validate black-text" >
					<label for="title">Name</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<input type="text" id="mail" name="mail" class="validate black-text" >
					<label for="mail">Email</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<textarea id="blog" name="content" class="materialize-textarea black-text"></textarea>
					<label for="blog">Message</label>
				</div>
		</div>
		<div class="row">
			<button class="btn waves-effect waves-light col l1 s2 white-text black lighten-1" type="submit" name="action" style="margin-left:46%">Submit</button>
		</div>
	</div>
	</form>
</div>	

	  <?php
  include_once('data_connect.php');
  include_once('core.php');
if(isset($_POST['title'])&&isset($_POST['mail'])&&isset($_POST['content'])){
$name=$_POST['title'];
$mail=$_POST['mail'];
$message=$_POST['content'];

if(!empty($name)&&!empty($mail)&&!empty($message)){
$query="insert into contact(Name,Email,Message) values('$name','$mail','$message')";
mysql_query($query);
}
}
?>


<div id="images" class="col s12" style="margin-top:120">
	<div class="col s1">
		<a href="https://www.facebook.com/ISTE.VIT/">
		<img src="static/icons/fb1.png" onmouseover="this.src='static/icons/fb2.png';" onmouseout="this.src='static/icons/fb1.png'" STYLE="position:absolute; LEFT:35%; WIDTH:130px; HEIGHT:130px">
		</a>
    </div>
	<div class="col s1">
		<a>
		<div class="modal-trigger" href="#y">
		<img src="static/icons/dev.png" STYLE="position:absolute; LEFT:74%; WIDTH:130px; HEIGHT:130px">
		</div>
		</a>
    </div>
	<div class="col s1">
		<a href="http://www.twitter.com">
		<img src="static/icons/twitter1.png" onmouseover="this.src='static/icons/twitter2.png';" onmouseout="this.src='static/icons/twitter1.png'" STYLE="position:absolute; LEFT:55%; WIDTH:130px; HEIGHT:130px">
		</a>
    </div>
	<div class="col s1">
		<a>
		<div class="modal-trigger" href="#v">
		<img src="static/icons/mailc.png" STYLE="position:absolute; LEFT:16%; WIDTH:130px; HEIGHT:130px">
		</div>
		</a>
    </div>	
	<br><br><br><br><br><br>
</div>
  <div id="y" class="modal">
    <div class="modal-content">
      <a style="position:absolute; top:30px; margin-left:35%;" class="black-text"><h4>Developers</h4></a>
	  <br><br>
	  <hr>
	  <div class="row">
	  <a href="https://www.facebook.com/krishnateja.reddy2?fref=ts">
      <div class="col s6 offset-s3">
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">Krishna Teja Reddy</h5>
          </span>
		  <span style="text-align:center"><h6 class="white-text">Project Lead</h6>
          </span>
        </div>
      </div>
	  </a>
	  </div>
	  <div class="row">
	  <a href="https://www.facebook.com/yashg1997">
	  <div class="col s6 m6 " >
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">Yash Gupta</h5>
          </span>
		  <span style="text-align:center"><h6 class="white-text">Front-End Developer</h6>
          </span>
        </div>
      </div>
	  </a>
	  <a href="https://www.facebook.com/sagargoel6?fref=ts">
	  <div class="col s6 " style="height:30%">
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">Sagar Goel</h5>
          </span>
		  <span style="text-align:center"><h6 class="white-text">Front-End Developer</h6>
          </span>
        </div>
      </div>
	  </a>
	  </div>
	  <div class="row">
	  <a href="https://www.facebook.com/killervishu?fref=ts">
	  <div class="col s6 " style="height:30%">
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">Vishu Aggarwal</h5>
          </span>
		  <span style="text-align:center"><h6 class="white-text">Front-End Developer</h6>
          </span>
        </div>
      </div>
	  </a>
	  <a href="https://www.facebook.com/vaibhav.satpathy?fref=ts">
	  <div class="col s6 " >
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">Vaibhav Satpathy</h5>
          </span>
		  <span style="text-align:center"><h6 class="white-text">Front-End Developer</h6>
          </span>
        </div>
      </div>
	  </a>
    </div>
    </div>
  </div>
  <div id="v" class="modal">
    <div class="modal-content">
      <span style="position:absolute; top:30px; margin-left:38%" class="black-text"><h4>Mail us</h4></span>
	  <br><br>
	  <hr>
      <div class="col s12 " >
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">pr.istevitu@vit.ac.in</h5>
          </span>
        </div>
      </div>
	  <div class="col s12 " >
        <div class="card-panel grey darken-4">
          <span style="text-align:center"><h5 class="white-text">iste@vit.ac.in</h5>
          </span>
        </div>
      </div>
	  <br>
	</div>
  </div>


</div>
<div id="copyright" class="black white-text">
<div class="footer-copyright black">
            <div class="center" style="position:relative ; z-index:999; top:60px">Indian Society for Technical Education (VITU) &copy; 2016 Copyright</div>
          </div>
<br><br><br>
</div>
<!--Contact Us ends-->

</body>
<script>
$('.slider').slider('start');
</script>
</html>