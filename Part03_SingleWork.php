

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">





  <title>Part 3 Single Work </title>
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
<?php
  require('connection.php');
          $artid=$_GET['artid'];
          $sqlartid = "SELECT * FROM artists INNER JOIN artworks ON artists.ArtistID=artworks.ArtistID  WHERE ArtWorkID=$artid"; 
          $resultartid = mysqli_query($connection,$sqlartid);
          $sqlid="SELECT * FROM artworks WHERE ArtWorkID=$artid";
          $resid= mysqli_query($connection,$sqlid);
          while($rowid = mysqli_fetch_assoc($resid)) {
          $artistid=$rowid["ArtistID"];
        }
 if (mysqli_num_rows($resultartid) > 0)
       {
        
         while($roww = mysqli_fetch_assoc($resultartid)) 
         {
          echo 
          '<div class="container">
              <h1>'.$roww["Title"].'</h1>
                <br>
                    By <a href="Part02_SingleArtist.php?id='.$artistid.'">'.$roww["FirstName"] . $roww["LastName"].'</a>
                <br>
              <div class="row">
                <div class="col-sm-4">
                 <a href="" data-toggle="modal" data-target="#myModal"><img class="img-responsive" src="http://localhost:8888/art/works/medium/'.$roww['ImageFileName'].'.jpg" alt="NO IMAGE EXISTS">
                  </a>
                </div>
 
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">'.$roww["Title"]." "."(".$roww["YearOfWork"].")"." ".'By'." " .$roww["LastName"].'</h4>
                   </div>
                   <div class="modal-body">
                   <div class="center-block">
                     <p><img src="http://localhost:8888/art/works/medium/'.$roww['ImageFileName'].'.jpg" height="100%" width="100%" alt="NO IMAGE EXISTS"></p>
                   </div>
                                 </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
      
                  </div>
                </div>
                 <div class="col-sm-6">'
                   .$roww["Description"].'<br> <h3>$'.number_format($roww["MSRP"],2).'</h3>
                     <p>
                      <a class="btn btn-default" href="#" role="button">
                       <span class="glyphicon glyphicon-gift"></span>
                          Add to Wish List
                     </a>
                               <a class="btn btn-default" href="#" role="button">
                                 <span class="glyphicon glyphicon-shopping-cart"></span>
                                   Add to Shopping Cart
                       </a>
                     </p>
                    <div class="panel panel-primary ">            
              <div class="panel-heading">Product Details</div>
              <div class="row">
                      <div class="col-md-6"><b>Date:</b></div><div class="col-md-6">'.$roww["YearOfWork"].'</div>
              </div> 
                          <br>
                    <div class="row">
                             <div class="col-md-6"><b>Medium:</b></div><div class="col-md-6">'.$roww["Medium"].'</div>
                         </div> 
                     <br>
                 <div class="row">
                 <div class="col-md-6"><b>Dimensions:</b></div><div class="col-md-6">'.$roww["Width"].'cm x'.$roww["Height"]."cm".'</div>
                </div> 
                          <br>
                                  <div class="row">
                                  <div class="col-md-6"><b>Home:</b></div><div class="col-md-6">'.$roww["OriginalHome"].'</div>
                              </div>
                  <br> ';
//==========genre table===========
$sqlgenre = "SELECT * FROM `artworkgenres` WHERE ArtWorkID=$artid";
          $resultgenre= mysqli_query($connection,$sqlgenre);
         echo '
            <div class="row">
            <div class="col-md-6"><b>Genre:</b></div><div class="col-md-6">';
          if (mysqli_num_rows($resultgenre) > 0)
          {
            while($rowgenre= mysqli_fetch_assoc($resultgenre))
             {
              
              $genreid=$rowgenre["GenreID"];
              $sqlgenre1="SELECT * FROM `genres` WHERE GenreID=$genreid";
              $resultgenre1= mysqli_query($connection,$sqlgenre1);
              
               while($rowgenre1= mysqli_fetch_assoc($resultgenre1))
              {
                echo '<a href="">'.$rowgenre1["GenreName"].'</a><br>';
              }  
             }
          }
echo
'
</div>
</div>
<br>';

//==========genre table===========
//==========subject table===========
$ss = "SELECT * FROM `artworksubjects` WHERE ArtWorkID=$artid";
          $rs= mysqli_query($connection,$ss);
          echo '<div class="row">
            <div class="col-md-6"><b>Subjects:</b></div><div class="col-md-6">';
          if (mysqli_num_rows($rs) > 0)
          {
            while($row3s= mysqli_fetch_assoc($rs))
             {
              
              $sid=$row3s["SubjectID"];
              $s1s="SELECT * FROM `subjects` WHERE SubjectID=$sid";
              $r1s= mysqli_query($connection,$s1s);
              while($row4s= mysqli_fetch_assoc($r1s))
              {
                
                echo '<a href="">'.$row4s["SubjectName"].'</a>';
                echo '<br>';
                
              }
             }
          }
echo '</div></div> </div></div>';
//==========subject table===========
//================================order details==============================================
echo '<div class="col-sm-2">';
 $sqldetails = "SELECT * FROM `orderdetails` WHERE ArtWorkID=$artid";
          $resultdetails= mysqli_query($connection,$sqldetails);
          if (mysqli_num_rows($resultdetails) > 0)
          {echo '<div class="panel panel-primary">
                <div class="panel-heading">Sales</div>
                 <div class="panel-body">';
            while($rowdetails= mysqli_fetch_assoc($resultdetails))
             {
              
              $dorderid=$rowdetails["OrderID"];
              $sqlorder="SELECT * FROM `orders` WHERE OrderID=$dorderid";
              $roworder= mysqli_query($connection,$sqlorder);
              while($rowdate= mysqli_fetch_assoc($roworder))
              {
               
               $dateformat = date( 'm/d/y ', strtotime($rowdate["DateCreated"]));
               echo '<a href="">'.$dateformat.'</a>';
                echo "<br>";
              }
             }
          }
     echo '</div></div> </div></div></div>';     
       }
     }

       else{
          header( 'Location: http://localhost:8888/error.php' );
          exit;
          }

?>
 <!-- ================================order details==============================================   -->    
</div> <!-- /container -->
<!-- ============================LEAVE THIS OUT ====================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>