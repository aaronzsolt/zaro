<?php
$currentURL = $_SERVER["REQUEST_URI"];
$indexPosition = strpos($currentURL, 'index.php');
$pathAfterIndex = substr($currentURL, $indexPosition );
$currentPage = $pathAfterIndex;
echo "<script>console.log('" . $currentPage . "');</script>";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="getData.js"></script>
  <title>Złoty</title>
  <style>
    body{
      padding-top: 100px;
      background-image: url(images/stage.jpg);
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .navbar{
      background-color: #DC143C;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    button{
      height: 88px;
    }

    #oldalcim{
      text-decoration: none;
      color: black;
    }
    
    #oldalcim:hover{
      text-decoration: none;
      color: white;
    }

    .active{
      color: white !important;
    }

    .kartya{
      width: fit-content;
      align-self: center;
    }

    .kartya + h2{
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      width: 300px;
      margin: auto;
      padding: 5px;
    }

    .kartya:hover + h2{
      color: #DC143C;
    }
  </style>
</head>

<body>
  <div class="bg-none text-light p-0">

    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarNav" aria-controls="navbarToggleExternalContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav"> 
          <li class="nav-item p-0 m-3">
            <a id="oldalcim" <?php 
            if($currentPage == 'index.php')
            echo 'class="active"'; ?>  
            href="index.php"><h1>Rólam</h1></a>
          </li>
          <li class="nav-item p-0 m-3">
            <a id="oldalcim" <?php 
            if(strpos($currentPage, 'index.php?prog=kiadott.php') === 0)
            echo 'class="active"'; ?>
             href="index.php?prog=kiadott.php"><h1>Kiadott zenék</h1></a>
          </li>
          <li class="nav-item p-0 m-3">
            <a id="oldalcim" <?php 
            if(strpos($currentPage, 'index.php?prog=hallgato.php') === 0)
            echo 'class="active"'; ?>
             href="index.php?prog=hallgato.php"><h1>Hallgató</h1></a>
          </li>
          <li class="nav-item p-0 m-3">
            <a id="oldalcim" <?php 
            if(strpos($currentPage, 'index.php?prog=elerhetosegek.php') === 0)
            echo 'class="active"'; ?> 
            href="index.php?prog=elerhetosegek.php"><h1>Elérhetőségek</h1>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="p-3 m-0">
      <!--az URL-ben kapott program betöltése-->
      <?php
        if(isset($_GET['prog']))
          include $_GET['prog'];
        else
          include 'rolam.php';
      ?>  
    </div>
  </div>

<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.js"></script>
</body>
</html>