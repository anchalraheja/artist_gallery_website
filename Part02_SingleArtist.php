

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<style type="text/css">
  .thumbnails > li {
  float: right;
  margin-bottom: 18px;
  margin-left: 20px;
}
.caption
{
  text-align: center;
}
</style>


  <title>Part 2 Single Artist</title>
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
        <li ><a href="http://localhost:8888/default.php">HOME</a></li>
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
<!--=================================================================== nav bar over ===================-->
<!--=================================================================== MAIN BODY ======================-->

<!--=================================================================== Upper Part ======================-->
<div class="container">

        <?php
        require('connection.php');
        $id=$_GET['id'];
        $sqlq = "SELECT * FROM artists WHERE ArtistID=$id";
        $result = mysqli_query($connection,$sqlq);
        if (mysqli_num_rows($result) > 0)
        {
         while($row = mysqli_fetch_assoc($result)) 
          {
           echo '
           <h2>'.$row["FirstName"]. $row["LastName"].'</h2>
          
           <div class="row">
           <div class="col-sm-4">
           <img class="img-responsive" src="http://localhost:8888/art/artists/medium/'.$row['ArtistID'].'.jpg" alt="Chania" width="250" height="400">
           </div>
           <div class="col-sm-6">'.$row["Details"].'
               <p>
                 <a class="btn btn-default" href="#" role="button">
                   <span class="glyphicon glyphicon-heart"></span>
                   Add to Favourites List
                </a>
              </p>
      

            <div class="panel panel-default ">
             <div class="panel-heading">Artist Details</div>
            <div class="row">
             <div class="col-md-6"><b> Date:</b></div><div class="col-md-6">'. $row["YearOfBirth"]. "-".$row["YearOfDeath"].'</div>
            </div> 
            <br>
             <div class="row">
            <div class="col-md-6"><b> Nationality:</b></div><div class="col-md-6">'.$row["Nationality"].'</div>
            </div> 
            <br>
            <div class="row">
            <div class="col-md-6"><b> More Info:</b></div><div class="col-md-6"><a href="'.$row["ArtistLink"].'">'.$row["ArtistLink"].'</a></div>
            </div> <br>

            </div></div>
            </div>

           <div class="container">

          <h2>Art By '.$row["FirstName"].' '. $row["LastName"].' </h2> ';
          }
//<!--=================================================================== LOWER PART ARTWORKS ========================================================================-->


          

      


     $sqlq1= "SELECT * FROM artworks WHERE ArtistID=$id";
     $result1 = mysqli_query($connection,$sqlq1);
       while($row1 = mysqli_fetch_assoc($result1)) 
        {
          $artid = $row1["ArtWorkID"];
          echo'
          <div class="col">
          <div class="col-md-3">
          <div class="thumbnail">
          <a href="Part03_SingleWork.php?artid='.$artid.'"><img src="http://localhost:8888/art/works/square-medium/'.$row1['ImageFileName'].'.jpg" alt="NO IMAGE EXISTS"></a>
          <div class="caption">

           <a href="Part03_SingleWork.php?artid='.$artid.'">'.$row1["Title"]. $row1["YearOfWork"].'</a>
            <p><a href="Part03_SingleWork.php?artid='.$artid.'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-info-sign">View</a> <a href="#"class="btn btn-success" role="button"><span class="glyphicon glyphicon-gift">Wish</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-shopping-cart">Cart</a>
            </p>
            </div> </div>
         </div>
       
          </div>';
        }
    }

       else{
          header( 'Location: http://localhost:8888/error.php' ); exit;
        
            }


//<!--=================================================================== Lower Part over  ==================================================================================-->

?>
</div>


<!-- ============================LEAVE THIS OUT ====================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>