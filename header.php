<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

  <title>Wamy</title>
  <link rel="shortcut icon" href="./image/logo.png">
  <link rel="stylesheet" href="./css/style.css">



</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top bg-white shadow ">
    <div class="container">
      <!-- Logo aligned to the right with a gap -->
      <a class="navbar-brand " href="index.php">
        <img src="./image/logo.png" alt="" style="width: 160px; "> <!-- Add gap on the left -->
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-dark " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " href="about.php" tabindex="-1" aria-disabled="true">About Us</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
              aria-expanded="false">
              Television
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="androidtv.php">Android TV</a></li>
              <li><a class="dropdown-item" href="googletv.php">Google TV</a></li>
              <li><a class="dropdown-item" href="webostv.php">WebOs Hub TV</a></li>
             
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
              aria-expanded="false">
              Home Appliances
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="airconditionerpage.php">Air Conditioner</a></li>
              <li><a class="dropdown-item" href="refrigeratorpage.php">Refrigerator</a></li>
              <li><a class="dropdown-item" href="washing_machine.php">Washing Machine</a></li>
              <li><a class="dropdown-item" href="audio.php">Audio</a></li>
              <li><a class="dropdown-item" href="cooler.php">Cooler</a></li>
             
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
              aria-expanded="false">
              Small Appliances
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="air_fryer.php">Air Fryer</a></li>
              <li><a class="dropdown-item" href="induction.php">Induction</a></li>
            
             
            </ul>
          </li>
         


       
         
        
        </ul>

        <!-- Button aligned to the left with a gap -->
         <a href="contact.php"><button class="btn btn-primary me-3" type="submit" style="margin-right: 20px;">Contact Now</button></a>
        
      </div>
    </div>
  </nav>





</body>

</html>