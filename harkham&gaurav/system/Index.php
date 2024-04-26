<?php
require '../sign_in/db_conn.php';
if(!empty($_SESSION["id"])){
    header("Location: user.php");
  }

if(isset($_POST["uname"])){
    $username=$_POST['uname'];
    $pass=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM users WHERE uname = '$username'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
       if($pass == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        
        if($row['is_admin']==1){
            $_SESSION["is_admin"] = 1;
            header("Location: ../system/admin.php");
        } else{
            $_SESSION["is_admin"] = 0;
            header("Location: ../system/user.php");
        }
       }
       else{
        echo "<script> alert('Wrong password')</script>";
       }
    }
    else{
        echo "<script> alert('Username does not exist')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet"  href="style_2.css">
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2>Login</h2>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <!-- <button type="submit">Login</button> -->
        <span class=""><button type="submit" class="btn btn-outline-warning fs-6  ">Login</button></span>

        <div class="acc">
            <p>Don't have an account?</p>
            <a href="../sign_in/SIGN_IN.php" class="btn btn-primary signup-btn ">Sign Up</a>
        </div>
    </form>
   
</body>
</html>