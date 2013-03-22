<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <ul class="nav pull-right">
          	  	<li><a href="inscription.php">Sign Up</a></li>
          		<li class="divider-vertical" style="vertical-align:middle"></li>
          		<li class="dropdown">
           		 <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            	 <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
              			<?php
						include_once("db.php");
						if (isset($_POST['user_name']) && isset($_POST['password']))
						{    
							user_login($_POST['user_name'], $_POST['password']);
						}
						?>
						<form id="login" action="login.php" method="post">
						Username: <input name="user_name" type="text" />
						Password: <input type="password" name="password" />
						<input type="submit" value="Submit" />
						</form>
            	</div>
          		</li>
        	 </ul>
            <ul class="nav second">
              <li class="home"><a class="navItem" href="index2.php">Home</a></li>
              <li class="events"><a href="#">Events</a></li>
              <li class="styles"><a href="#">Styles</a></li>
              <li class="people"><a href="#">People</a></li>
              <li class="video"><a href="#">Video</a></li>
              <li class="logo"><img src="img/logo.png" height="150px" width="150px"/></li>
              <li class="lifestyle"><a href="#">Lifestyle</a></li>
              <li class="search"><a href="#">Search</a></li>
              <li class="shop"><a href="#">Shop</a></li>
			  <li class="ajout"><a href="#">Ajouter video</a></li>
            </ul>
          
        </div>
      </div>
    </div>