

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->



<style type="text/css">
  .reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
}
input[type="radio"]:checked ~ .reveal-if-active,
input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 100px; 
  overflow: visible;
}
span.highlight {
    background-color: yellow;
}
</style>
	<title>Part 4 Search</title>
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
      
     </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--=================================================================== nav bar over ===================-->
<h1>Search Results</h1>
<!-- ===========radio button ==============-->
<div class="jumbotron">
 
  
  <div class="row">
  <div class="col-sm-5">
    

    <form class="navbar-form navbar-left" method="get" action="Part04_Search.php" >  
      
      <div class="container">
      <input type="radio" name="search" value="rtitle" id="search">
        <label >Filter By Title:</label>
          <div class="reveal-if-active">
             <div class="form-group">
               <input type="text" name="rvar" id="term" class="form-control" >
             </div>  
          </div>
</div>


      <div class="container">
        <input type="radio" name="search" value="rdesc" id="search">
          <label >Filter By Description:</label>   
            <div class="reveal-if-active">
               <div class="form-group">
                <input type="text" name="r2var" id="term" class="form-control">
               </div>
            </div>
      </div>


          <div class="container">
          <input type="radio" name="search" value="none" id="search" >
            <label >No Filter(show all art works):</label><br>
              <button type="submit" class="btn btn-primary">FILTER</button>
          </div>
    </form>
  </div>
  </div>
  </div>
</div> 
<!-- ===========radio button end ==============-->




<?php
require('connection.php');
  if((!isset($_GET['htitle'])) && (!isset($_GET['search']))) 
    {
      echo "Use Search Bar or Filters";
    }


    elseif ( isset($_GET['htitle']))
      {
        $variabletitle = $_GET['htitle'];
        $querytitle="SELECT * from artworks WHERE `Title` LIKE '%".$variabletitle."%'";
        $resulttitle = mysqli_query($connection,$querytitle);
          while($rowtitle = mysqli_fetch_assoc($resulttitle)) 
            {
              echo ' 
                <div class="container-fluid">
                  <div class="row">
                   <div class="col-sm-2">
                     <a href="Part03_SingleWork.php?artid='.$rowtitle['ArtWorkID'].'"><img src="http://localhost:8888/art/works/square-medium/'.$rowtitle['ImageFileName'].'.jpg" alt="no image for this"><br></a><br>
                  </div>
                <div class="col-sm-10">
                  <h5> <a href="Part03_SingleWork.php?artid='.$rowtitle['ArtWorkID'].'">'.$rowtitle["Title"].'</a><br></h5>'.$rowtitle["Description"].'
                </div>
                  </div>
               </div>'; 
                   }

      }  

    elseif(isset($_GET['search']))
      {
        $radiotitle = $_GET['search']; 
          switch($radiotitle) 
            {
              case "rtitle":
                $varradtitle = $_GET['rvar'];
                $queryradiotitle="SELECT * from artworks WHERE `Title` LIKE '%".$varradtitle."%'";
                $resultradiotitle = mysqli_query($connection,$queryradiotitle);
                  while($radiorowtitle = mysqli_fetch_assoc($resultradiotitle)) 
                    {
                      echo '
                          <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2">
                                  <a href="Part03_SingleWork.php?artid='.$radiorowtitle['ArtWorkID'].'"><img src="http://localhost:8888/art/works/square-medium/'.$radiorowtitle['ImageFileName'].'.jpg" alt="no image for this"><br></a><br>
                                </div>
                                      <div class="col-sm-10">
                                        <h5> <a href="Part03_SingleWork.php?artid='.$radiorowtitle['ArtWorkID'].'">'.$radiorowtitle["Title"].'</a><br></h5>'.$radiorowtitle["Description"].'
                                      </div>
                            </div>
                          </div>';
          
                    }
              break;

              case "rdesc":
                $vardesc = $_GET['r2var'];
                $querydesc="SELECT * from artworks WHERE `Description` LIKE '%".$vardesc."%'";
                $resultdesc = mysqli_query($connection,$querydesc); 
                $span= '<span class="highlight">'.$vardesc.'</span>';
  



                while($rowdesc = mysqli_fetch_assoc($resultdesc)) 
                  {
                    $rep=str_ireplace($vardesc,$span,$rowdesc["Description"]);
                    echo '<div class="container-fluid">
                  <div class="row">
                   <div class="col-sm-2">
                     <a href="Part03_SingleWork.php?artid='.$rowdesc['ArtWorkID'].'"><img src="http://localhost:8888/art/works/square-medium/'.$rowdesc['ImageFileName'].'.jpg" alt="no image for this"><br></a><br>
                  </div>
                <div class="col-sm-10">
                  <h5> <a href="Part03_SingleWork.php?artid='.$rowdesc['ArtWorkID'].'">'.$rowdesc["Title"].'</a><br></h5>';
                

echo $rep;
                    echo '</div>
                  </div>
               </div>';
                  }

                break;

              case "none":
                $querynone="SELECT * from artworks";
                $resultnone = mysqli_query($connection,$querynone);
                 while($rownone = mysqli_fetch_assoc($resultnone)) 
                  {
                    echo '
                          <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2">
                                  <a href="Part03_SingleWork.php?artid='.$rownone['ArtWorkID'].'"><img src="http://localhost:8888/art/works/square-medium/'.$rownone['ImageFileName'].'.jpg" alt="no image for this"><br></a><br>
                                </div>
                                      <div class="col-sm-10">
                                        <h5> <a href="Part03_SingleWork.php?artid='.$rownone['ArtWorkID'].'">'.$rownone["Title"].'</a><br></h5>'.$rownone["Description"].'
                                      </div>
                            </div>
                          </div>'; 
                   }
                break;
              
              default:
               $def = "DOES NOT EXIST";
              echo $def;
                break;
             }
     
   
          
     }
?>







<!-- ============================LEAVE THIS OUT ====================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>