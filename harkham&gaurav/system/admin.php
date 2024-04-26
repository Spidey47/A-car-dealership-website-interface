<?php
include("../sign_in/db_conn.php");

if ($_SESSION['is_admin'] == 1) {

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(isset($_GET['id']))
        {
        $row_id=$_GET['id'];
        $status=$_GET['status'];
        $sql='';
        if($status=='approve')
        {
            $sql = "UPDATE users SET approval_status = '1' WHERE id = $row_id";
        }
        else
        {
            $sql = "DELETE from users WHERE id = $row_id";
        }
        if (mysqli_query($conn, $sql) === TRUE) {
        } else {
            echo "Error updating record: " . $conn->error;
        }
        }
        else
        {
        }
    }
    $pending_requests = mysqli_query($conn, "SELECT * FROM users WHERE approval_status = '0'");
    if (mysqli_num_rows($pending_requests) > 0) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Admin Dashboard</title>
            <link rel="stylesheet" type="text/css" href="../system/admin.css">
            
        </head>
        <body>
            <div class="container">
            <h1>Admin</h1>
            <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($pending_requests)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['uname']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>";
                        echo "<a href='admin.php?status=approve&id=".$row['id']."'>Approve</a>";
                        echo "&nbsp;|&nbsp;";
                        echo "<a href='admin.php?status=decline&id=".$row['id']."'>Decline</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "No pending requests.";
    }
} else {
    echo "You are not authorized to access this page.";
}
?>