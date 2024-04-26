
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="home2.css">
</head>


<body class="vh-100 overflow-hidden ">
    <!--navbar section -->
    <nav class="navbar  navbar-expand-md bg-dark sticky-top  ">
      <div class="container-fluid">
        <a class="navbar-brand navbar-right m-0 fs-4" href="#"><img src="Free_Sample_By_Wix.jpg" alt=""
            style="height: 55px; width: 55px; border-radius: 5px; "></a>
        <button class="navbar-toggler shadow-none border-0 " type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> <!-- hamburger icon -->
        </button>
        <!-- navbar elements  -->
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link p  "   aria-current="page" href="../landing_page/home.php"> Home  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../system/user.php">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cars_window/cars.html">Cars</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <!-- login and signup button segments  -->
          <ul class="navbar-nav mb-2 ms-auto mb-lg-0 ">
            <li class="nav-but">
              <a class="btn btn-outline-warning" href="../system/Index.php">Login</a>
            </li>
            <li class="nav-but">
              <a class="btn btn-outline-warning" href="../sign_in/SIGN_IN.php">Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    
    <div class="hero">
       <video class="video" autoplay muted plays-inline >
        <source src="../img/Untitled - Sequence 01.mp4" type="video/mp4">
       </video>

       <div class="text">
        <h4>Where passion</h4>
        <h1>meets <br> <span>Desire</span></h1>
        <p>Feel the Bold, Feel the Power</p>
        <?php
      session_start();
      if (isset($_POST["book_test_drive"]) && isset($_SESSION["id"])) {
        header("Location: ../cars_window/cars.html");
        exit();
      } elseif (isset($_POST["book_test_drive"])) {
        header("Location: ../system/Index.php");
        exit();
      }
      ?>
        <form method="post">
        <button type="submit" name="book_test_drive" class="btn">Book a test drive</button>
    </form>

        <footer>

        <div class="footerContainer">
          <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
          </div> 
          <div class="footerNav">
            <ul>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Our Team</a></li>
            </ul>
          </div>
          
        </footer>
        
        </div>
      </div>

    </div>

    
   
</body>

</html>