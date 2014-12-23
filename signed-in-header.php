<!doctype html>
 <html>
 <head>
      	 <meta charset="utf-8">
      	 <meta name="viewport" content="width=device-weidth, initial-scale=1.0">
      	 <title>Front Apron</title>
      	 <link href="css/bootstrap.min.css" rel="stylesheet">
      	 <link href="css/custom.css" rel="stylesheet">
      	 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

 </head>
 <body>
   <header>
 	 <div class="container">
 		<a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
     <div class="btn-group user-log navbar-right" role="group"><button type="button" class="btn btn-default dropdown-toggle signed-in" id="signed-in-menu" data-toggle="dropdown" aria-expanded="true"><img class="user-thumb" src="images/user-thumb.png"><span class="caret"></span></button> <ul class="dropdown-menu user-drop-down" role="menu" aria-labelledby="signed-in-menu">
    <li><a role="menuitem"  href="#"><div class="icon"><img src="images/profile.png"></div>Profile</a></li>
    <li><a role="menuitem"  href="#"><div class="icon"><img src="images/friends.png"></div>Friends</a></li>
    <li><a role="menuitem"  href="#"><div class="icon"><img src="images/filter.png"></div>Filters</a></li>
    <li><a role="menuitem"  href="#"><div class="icon"><img src="images/give-back.png"></div>Give Back</a></li>
    <li><a role="menuitem"  href="#"><div class="icon"><img src="images/login.png"></div>Log Out</a></li>
  </ul>
 		 	</div>	
 	</div>
   </header>
 <!-- Start of Navigation Bar -->
   <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
    	 <div class="navbar-header">
    	 	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-FA-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    	
       </div>
    <div class="collapse navbar-collapse" id="bs-FA-navbar-collapse-1">
    	<ul class="nav navbar-nav">
    		<li><a href="index.html">HOME</a></li>
    		<li><a href="index.html">BOOKMARKS</a></li>
    		<li><a href="index.html">MY SPECIALS</a></li>
    		         
    	</ul>
    	<form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Coffee">
                  <input type="text" class="form-control" placeholder="San Jose">
                </div>
                <button type="submit" class="btn btn-default search"><img src="images/search-icon.png"></button>
        </form>
      </div>

    </div>
   </nav>
  <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
 </body>
 </html>