

<!DOCTYPE >
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->




	<title>HOME</title>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Assignment 3</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost:8888/default.php">HOME</a></li>
        <li><a href="http://localhost:8888/about.php">About Us<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost:8888/Part01_ArtistsDataList.php">Artist Data List (Part 1)</a></li>
            <li><a href="http://localhost:8888/Part02_SingleArtist.php?id=19">Single Artist (Part 2)</a></li>
            <li><a href="http://localhost:8888/Part03_SingleWork.php?artid=394">Single Work (Part 3)</a></li>
            <li><a href="http://localhost:8888/Part04_Search.php">Search (Part 4)</a></li>
           </ul>
        </li>
      </ul>


<!--======================================= SEARCH Part =========================================================-->
      <form class="navbar-form navbar-right" method="get" action="Part04_Search.php" id="searchform">
            <span style="color: white">Anchal Raheja </span>
       <div class="form-group">
         <input type="text" name="htitle" id="htitle" class="form-control" placeholder="Search Paintings">
         <input  type="submit" name="submit" value="Search">
       </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--====================== nav bar over ===================-->

<div class="container-fluid">
 <div class="page-header">
  <div class="jumbotron">
  <h1>Welcome to Assignment #3</h1>
  <p>This site is an assignment for CSE 5335, <strong>Anchal Raheja</strong>, on 20-Nov-2016</p>
</div>
</div>
</div>
<!--=============================MIddle over==============-->
<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-info-sign"></span>About us</h3>
          <p>What is this all about and other stuff. </p>
          <p><a class="btn btn-default" href="about.php" role="button"><span class="glyphicon glyphicon-link"></span>visit page</a></p>
        </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-th-list"></span>Artist List</h3>
          <p>Displays a list of artist names and links. </p>
          <p><a class="btn btn-default" href="Part01_ArtistsDataList.php" role="button"><span class="glyphicon glyphicon-link"></span>visit page</a></p>
       </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-user"></span>Single Artist</h3>
          <p>Displays information for a single artist.</p>
          <p><a class="btn btn-default" href="http://localhost:8888/Part02_SingleArtist.php?id=19" role="button"><span class="glyphicon glyphicon-link"></span>visit page</a></p>
        </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-picture"></span>Single Work</h3>
          <p>Displays information for a single work.</p>
          <p><a class="btn btn-default" href="http://localhost:8888/Part03_SingleWork.php?artid=394" role="button"><span class="glyphicon glyphicon-link"></span>visit page</a></p>
        </div>
        <div class="col-md-2">

          <h3><span class="glyphicon glyphicon-search"></span>Search</h3>
          <p>Performs search on artworks table.</p>
          <p><a class="btn btn-default" href="http://localhost:8888/Part04_Search.php" role="button"><span class="glyphicon glyphicon-link"></span>visit page</a></p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->












<!-- =========================== LEAVE FOR PHP ===================== -->










<!-- ============================LEAVE THIS OUT ====================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>