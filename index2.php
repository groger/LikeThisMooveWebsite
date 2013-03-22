<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LikeThisMoove</title>
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">

<style>
html,body{
	height:100%;
	margin:0;
}
.thumbnail{
	background-color:#000;
	margin:0;
	padding:0;
	height:300px;
	text-overflow: ellipsis;
	transition:opacity 2s background-color 2s;
	-moz-transition:width opacity 2s background-color 2s; /* Firefox 4 */
	-webkit-transition:opacity 2s background-color 2s; /* Safari and Chrome */
	-o-transition:width opacity 2s background-color 2s; /* Opera */
}
.thumbnails .thumbnail:hover{
	opacity:0.5;
	filter:alpha(opacity=50);
	background-color:#B90000;
	
}
.thumbnails .thumbnail:hover .caption div.video_t h4{
	color:#FFF;
}
.thumbnails .thumbnail:hover div.description{
	color:#FFF;
}
.thumbnails .thumbnail:hover iframe{
	opacity:.5;
	filter:alpha(opacity=50);
	background-color:#B90000;
}
a:focus {
    outline: thin dotted rgb(51, 51, 51);
    outline-offset: 0px;
}
.navbar .navbar-inner {
  background-size:cover;
  background-image:url(img/texture_header2.jpg);
  background-repeat:no-repeat;
}

.navbar-inverse .navbar-inner {
    background-repeat: no-repeat;
}

.navbar .brand {
  padding: 8px 20px 12px;
  font-size: 20px;
  color: #e20f0f;
}

.navbar .divider-vertical {
  height: 41px;
  background-color: #d82424;
  border-right: 1px solid #e01f1f;
}

.navbar .nav > li > a {
  padding: 10px 10px 11px;
  font-size: 14px;
  color: #e81717;
}
.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
  /*color: #e82020;*/
  border-bottom-color:#F00;
}
	
.navbar .navbar-inner .container-fluid{
	min-height:220px;
}
.navbar .nav > li{
 float:none;
  display:inline-block;
}
.navbar ul.nav{
	margin-left:120px;
}
.navbar ul.nav.second{
	margin-left:120px;
	margin-top:-20px;
}
.navbar .nav > li.logo {
 padding: 30px 15px 20px;
}
.navbar .nav > li > a {
 padding: 30px 15px 20px;
 text-align:center;
 font-size:24px;
}
.navbar .navbar-inner .container-fluid .nav > li > a:hover {
	 border-bottom-color:#900;
     text-decoration:none
}
.thumbnails .thumbnail .caption div.video_t h4{
	max-height:70px;
	color:#A00;
	text-overflow: ellipsis;
	overflow: hidden;
    white-space: nowrap;
}
.thumbnails .thumbnail .caption div.description{
	max-height:50px;
	text-overflow: ellipsis;
	overflow: hidden;
    white-space: nowrap;
}
</style>
</head>

<body>
	<!--<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <ul class="nav pull-right">
          	  	<li><a href="inscription.php">Sign Up</a></li>
          		<li class="divider-vertical"></li>
          		<li class="dropdown">
           		 <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            	 <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">-->
              		<!--<?/*php
						include("db.php");
						if (isset($_POST['user_name']) && isset($_POST['password']))
						{    
							user_login($_POST['user_name'], $_POST['password']);
						}
						*/?>-->
						<!--<html></html>
						<form action="login.php" method="post">
						Username: <input name="user_name" type="text" />
						Password: <input type="password" name="password" />
						<input type="submit" value="Submit" />
						</form>
            	</div>
          		</li>
        	 </ul>
            <ul class="nav">
              <li class="home"><a href="index2.php">Home</a></li>
              <li class="events"><a href="#">Events</a></li>
              <li class="styles"><a href="#">Styles</a></li>
              <li class="people"><a href="#">People</a></li>
              <li class="video"><a href="#">Video</a></li>
              <li class="logo"><img src="img/logo.png" height="150px" width="150px"/></li>
              <li class="lifestyle"><a href="#">Lifestyle</a></li>
              <li class="search"><a href="#">Search</a></li>
              <li class="shop"><a href="#">Shop</a></li>
			  <li class="ajout"><a href="#">Ajouter video</a></li>
              
        </div>
      </div>
    </div>-->
    <?php include_once("menu.php");?>


<!--<div id="wrapper2" class="content"> -->
<div class="container-fluid" id="wrapper2">    
        <h1 class="title">
          Like This Moove <br>
          Dance social network for all people who like dancing<br>
          Made in CANADA.
        </h1>
        <br>
        <div class="row-fluid">
        	<inline class="span5 offset2"><img src="img/picture3.jpg" alt="" width="600"/></inline>
            <inline class="span3">
              <div id="this-carousel-id" class="carousel slide" style="width: 356px; margin: 0 auto"><!-- class of slide for animation -->
                <div class="carousel-inner">
                            <div class="item active"><!-- class of active since it's the first item -->
                              <img src="img/picture1.png" alt="" width="500"/>
                              <div class="carousel-caption">
                                <p>Caption text here</p>
                              </div>
           		  </div>
                            <div class="item">
                              <img src="img/picture3.jpg" alt="" width="356" />
                              <div class="carousel-caption">
                                <p>Caption text here</p>
                              </div>
                  </div>
                            <div class="item">
                              <img src="img/picture1.png" alt="" width="356" />
                              <div class="carousel-caption">
                                <p>Caption text here</p>
                              </div>
                            </div>
                            <div class="item">
                              <img src="img/picture3.jpg" alt="" width="356" />
                              <div class="carousel-caption">
                                <p>Caption text here</p>
                              </div>
                            </div>
                </div><!-- /.carousel-inner -->
                        <!--  Next and Previous controls below
                                href values must reference the id for this carousel -->
                         <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
                         <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
              </div><!-- /.carousel -->
          </inline>
        </div><!--end row-fluid-->
		
<!-------------Last videos thumbnails-------------->

         <div class="row-fluid" id="videos">
         	<h3  class="offset2">Last Videos</h3>
            <ul class="thumbnails">
              <li class="span2  offset2">
                <div class="thumbnail">
                  <iframe width="215" height="191" src="http://www.youtube.com/embed/HlK_A5pOyhw?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                  <div class="caption">
                     <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                 <iframe width="215" height="191" src="http://www.youtube.com/embed/HEli4WIptA0" frameborder="0" allowfullscreen></iframe>
                 <div class="caption">
                     <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                   <iframe width="215" height="191" src="http://www.youtube.com/embed/r9ChaIFTXMY" frameborder="0" allowfullscreen></iframe>
                   <div class="caption">
                    <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a>  <!--<a href="#" class="btn">Action</a></p>-->
                  </div>
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                   <iframe width="215" height="191" src="http://www.youtube.com/embed/r9ChaIFTXMY" frameborder="0" allowfullscreen></iframe>
                 <div class="caption">
                     <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
		
<!-------------Videos les plus vues thumbnails-------------->	

	<div class="row-fluid" id="videos">
         	<h3 class="offset2">Videos les plus vues</h3>
            <ul class="thumbnails">
              <li class="span2  offset2">
                <div class="thumbnail">
                  <iframe width="215" height="191" src="http://www.youtube.com/embed/r9ChaIFTXMY" frameborder="0" allowfullscreen></iframe>
                  <div class="caption">
                     <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                    <iframe width="215" height="191" src="http://www.youtube.com/embed/r9ChaIFTXMY" frameborder="0" allowfullscreen></iframe>
                   <div class="caption">
                     <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                 <iframe width="215" height="191" src="http://www.youtube.com/embed/r9ChaIFTXMY" frameborder="0" allowfullscreen></iframe>
                 <div class="caption">
                    <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
              <li class="span2">
                <div class="thumbnail">
                  <iframe width="215" height="191" src="http://www.youtube.com/embed/r9ChaIFTXMY" frameborder="0" allowfullscreen></iframe>
                   <div class="caption">
                     <?php
							include_once("youtube.php");
							$youtubeVideoLink ="https://www.youtube.com/watch?v=HEli4WIptA0"; 
							printYoutubeInfo($youtubeVideoLink);
						?> 
                    <p><a href="#" class="btn">Like</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
</div><!--container-fluid-->
<script>
 $(window).load(function(){
		$(window).on('resize', function() {
    		$(".footer").css("margin-top", function() { return $(".wrapper2").outerHeight() });
		}).trigger('resize');
	});
</script>		  
<footer class="footer">
      <img id="footer-logo" src="img/logo.png" alt="Est. 2011. Super Sonic" width="200" height="200" left="300px"/>

      <ul class="sharing">
        <li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-no-routing="true">Facebook</a></li>
        <li class="youtube"><a href="http://www.youtube.com/" target="_blank" data-no-routing="true">YouTube</a></li>
        <li class="twitter"><a href="http://twitter.com/" target="_blank" data-no-routing="true">Twitter</a></li>
      </ul>

      <div class="info">
        <div>
          <nav>
            <ul>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="/license">Licensing</a></li>
            </ul>
          </nav>
          
          <address>
            <div class="tel">1 111 111 1111</div>
            <a href="mailto:info@likethismoove.com" data-no-routing="true">info@likethismoove.com</a><br>
          </address>

          <div class="copyright">
            All Rights Reserved<br>
            &copy;2013 LikeThisMoove, LTM
          </div>
        </div>
      </div>
<!--</footer>-->


  <!-- Le javascript
    ================================================== -->
    <script src="js/resize_youtube.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script>
		$(function() {
		
			// Find all YouTube videos
			var $allVideos = $("iframe[src^='http://www.youtube.com']"),
		
				// The element that is fluid width
				$fluidEl = $("body");
				$test = $(".thumbnail");
		
			// Figure out and save aspect ratio for each video
			$allVideos.each(function() {
		
				$(this)
					.data('aspectRatio', this.height / this.width)
					
					// and remove the hard coded width/height
					.removeAttr('height')
					.removeAttr('width');
		
			});
		
			// When the window is resized
			$(window).resize(function() {
		
				//var newWidth = $fluidEl.width();
				var newWidth = $test.width();
				var newheight = $test.height();
				// Resize all videos according to their own aspect ratio
				$allVideos.each(function() {
		
					var $el = $(this);
					$el
						.width(newWidth*0.96)
						.height(newheight/2.1);
						//.height(newWidth * $el.data('aspectRatio'));
		
				});
		
			// Kick off one resize to fix all videos on page load
			}).resize();

		});
	</script>
    <script src="js/holder/holder.js"></script>
</body>
</html>

