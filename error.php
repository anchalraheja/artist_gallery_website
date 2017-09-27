

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



  <title>Project 3</title>
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
         <input type="text" name="top" id="top" class="form-control" placeholder="Search Paintings">
         <input  type="submit" name="submit" value="Search">
       </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--====================== nav bar over ===================-->
<!--=================================================================== nav bar over ===================-->
<!--=================================================================== MAIN BODY ======================-->

      <div class="container">
        <p>
          <h1>Wrong or invalid ID</h1>
        </p>

    </div>



      

    </div> <!-- /container -->

<!-- ============================LEAVE THIS OUT ====================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>