<?php
// session_start();

include("db_conn.php");
if(!empty($_SESSION["id"])){
  header("Location: ../system/user.php");
  exit;
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
  $username=$_POST['uname'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $confpassword=$_POST['confpassword'];
  $city_name=$_POST['city'];
  $state_name=$_POST['state'];
  $pin=$_POST['zip'];
  $duplicate = mysqli_query($conn,"SELECT * FROM users WHERE uname ='$username' OR email='$email'");

  if(mysqli_num_rows($duplicate)>0){
    echo "<script> alert('Username or Email already exists')</script>";
  }
  else{
    if($pass == $confpassword){
      $approval_status = 0;
      $query = "INSERT INTO users VALUES('','$username','$email','$pass','$city_name','$state_name','$pin','0','$approval_status')";
     if( mysqli_query($conn, $query)){
      echo "<script> alert('Successfully signedin. Your request is pending approval')</script>";
      header("Location: ../system/index.php");
       }else{
          echo "<script> alert('Signup failed. Please try again.');</script>";
       }
      }
    else{
      echo "<script> alert('Password does not match')</script>";
    }
  }


 /* if(!empty($email)&& !empty($pass) && !is_numeric($email))
  {
    $query = "insert into users (uname,email,password,city,state,zip) values ('$username', '$email', '$pass', '$city_name', '$state_name', '$pin')";

    mysqli_query($conn, $query);

    $_SESSION['username']=$username;
    $ran=$_SESSION['username'];
    echo "<script type='text/javascript'> alert('Successfully signedin $ran')</script>";
  }
  else
  {
    echo "<script type='text/javascript'> alert('Please enter valid credentials')</script>";
  }*/
  
}
?>




<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>SIGNUP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="heading_part">
          
        <h2 class="heading" >SIGN UP</h2>
        <p class="vertical_line" ></p>
        </div>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Email </label>
        <input type="email" name="email" placeholder="@gmail.com"><br>
        
        <!-- <div class="col-md-6">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col">
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col">
                <span id="passwordHelpInline" class="form-text">
                  Must be 8-20 characters long.
                </span>
            </div>
          </div>
          <div class="col">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                  Conform the Password
                </span>
            </div>
          </div>

          <div class="col-md-5">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div> -->

        <div class="row g-3">
            <div class="col">
                <label for="">Password</label>
              <input type="password" name="password" class="" placeholder="Password" aria-label="password">
              <span id="passwordHelpInline" class="form-text">
                Enter password
              </span>
            </div>
            <div class="col">
                <label for="">Password</label>
              <input type="password" name="confpassword" class="" placeholder="Conform" aria-label="Conform">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>

          <div class="row g-3 pt-3 ">
            <div class="col-sm-7  ">
              <input type="text" name="city" class="" placeholder="City" aria-label="City">
            </div>
            <div class="col-sm ">
              <input type="text" name="state" class="" placeholder="State" aria-label="State">
            </div>
            <div class="col-sm">
              <input type="text" name="zip" class="" placeholder="Zip" aria-label="Zip">
            </div>
          </div>



          <!-- <div class="row g-3">
            <div class="col">
                <label for="">Password</label>
              <input type="password" class="" placeholder="Password" aria-label="password">
            </div>
            <div class="col">
                <label for="">Password</label>
              <input type="password" class="" placeholder="Conform" aria-label="Conform">
            </div>
          </div> -->

          <div class="form-check pt-2">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>


        <!-- <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> -->

        <!-- <button type="submit">Signin</button> -->
        <span class=""><button type="submit" class="btn btn-outline-warning fs-6  ">Signin</button></span>
    </form>
</body>
</html>