<?php
/*require '../sign_in/db_conn.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: Index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<body>
    <h1>welcome <?php echo $row["uname"];?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>*/
require '../sign_in/db_conn.php';


if(!isset($_SESSION["id"])){
    header("Location: index.php");
    exit;
}


$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="user.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="form">
        <div class="avatar"></div>
        <h2>Welcome, <?php echo $row["uname"]; ?></h2>
        <label>Email: <?php echo $row["email"]; ?></label>
        <label>City: <?php echo $row["city"]; ?></label>
        <label>State: <?php echo $row["state"]; ?></label>
        <label>Zip: <?php echo $row["zip"]; ?></label>

        <a href="logout.php" class="button">Logout</a>
        <a href="../landing_page/home.php" class="button">Home</a>
    </div>
</body>
</html>