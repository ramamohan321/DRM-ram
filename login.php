<!DOCTYPE html>
<html>
<link rel="icon" href="images\logo.jpg" type="image/icon type">
<title>DRM - Login</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles\login.css?<?php echo time(); ?>">
    <script src="script/login.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img class="logo" src="images\logo.jpg" alt="Page Logo" />
        </div>
        <div class="navbar-links">
            <a class="btn" href="home.html">Home</a>
            <a class="btn" href="team.html">Team</a>
            <a class="btn" href="about.html">About</a>
            <a class="btn" href="contact.html">Contact</a>
        </div>
    </div>

    <div class="main">
        <h2>Welcome to DRM</h2>
        <div class="loginBox">
            <form action="login.php" method="post">
                <h1>Login</h1>

                <?php
                if (isset($_GET['error'])) {
                    echo '<div class="error-message">' . htmlspecialchars($_GET['error']) . '</div>';
                }
                ?>

                <label>User ID:</label><br>
                <input type=text name="user_id" placeholder="Enter user id here..."><br><br>
                <label><b></b>Password:</label><br>
                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Enter password here...">
                    <i class="fas fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
                </div><br>
                <button href="login.php" type="submit">Login</button>
                <div class="forgot-psw">
                    <a href="forgot-psw.html">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php
session_start();
include "db_conn.php";

// Define the validate function first
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['user_id']) && isset($_POST['password'])) {
    $uid = validate($_POST['user_id']);
    $pass = validate($_POST['password']);

    if (empty($uid) && $pass) {
        header("location: login.php?error=User ID is required");
        exit();
    } else if ($uid && empty($pass)) {
        header("location: login.php?error=Password is required");
        exit();
    } else if (empty($uid) && empty($pass)) {
        header("location: login.php?error=User ID and Password required");
        exit();
    }

    $sql = "SELECT * FROM users where user_id='$uid' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        /*$row = mysqli_fetch_assoc($result); // Change 'rows' to 'row' here
        if($row['user_id'] === $uid && $row['password'] === $pass) {
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['sno'] = $row['sno'];
            exit();
        }*/

        // Check the user's role here
        $row = $result->fetch_assoc();
        $userRole = $row['role'];

        if ($userRole === 'Technology Director') {
            header("location: dashboard.php");
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            exit();
        } elseif ($userRole === 'Member') {
            header("location: member-dashboard.php");
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            exit();
        }
    } else {
        header("location: login.php?error=Incorrect User ID or Password");
        exit();
    }
}
?>