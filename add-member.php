<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['sno']) && isset($_SESSION['user_id'])) 

 ?>
<!DOCTYPE html>
<html>
  <link rel="icon" href="images\logo.jpg" type="image/icon type">
  <title>DRM - Add Member</title>
<!-- Head Section -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles\add-member.css">
</head>
<!-- Body Section -->

<body>
    <script src="script\add-member.js"></script>

    <div class="main">
        <div class="section">
            <!-- Top Nav Bar Section -->
            <div class="navbar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="navbar-heading">Add Member
                    <a href="logout.php" id="logoutButton"><button class="logout-btn" id="logoutButton" name="button"
                            type="button">Logout</button></a>
                </h1>
            </div>
            <!-- Actual Body Container -->
            <div class="main-body-container">
                <!-- <h1 style="text-align: center;">Dashboard Page</h1>
                <p style="text-align: center;">This is a Sample "Dashboard" Page.</p> -->
                <form action="/action_page.php">
                    <div class="row">
                        <div class="label">
                          <label for="id">Member ID</label>
                        </div>
                        <div class="input">
                          <input type="text" id="memid" name="member-id" placeholder="Your member id...">
                        </div>
                      </div>
                    <div class="row">
                      <div class="label">
                        <label for="fname">First Name</label>
                      </div>
                      <div class="input">
                        <input type="text" id="fname" name="firstname" placeholder="Your first name...">
                      </div>
                    </div>
                    <div class="row">
                      <div class="label">
                        <label for="lname">Last Name</label>
                      </div>
                      <div class="input">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name...">
                      </div>
                    </div>
                    <div class="row">
                        <div class="label">
                          <label for="lname">Password</label>
                        </div>
                        <div class="input">
                          <input type="text" id="pwd" name="password" placeholder="Your password...">
                        </div>
                      </div>
                      <div class="row">
                        <div class="label">
                          <label for="lname">Designation</label>
                        </div>
                        <div class="input">
                          <input type="text" id="designation" name="designation" placeholder="Your designation...">
                        </div>
                      </div>
                      <div class="row">
                        <div class="label">
                          <label for="lname">Department</label>
                        </div>
                        <div class="input">
                          <input type="text" id="dept" name="department" placeholder="Your department...">
                        </div>
                      </div>
                    <div class="row">
                      <div class="label">
                        <label for="skill">Review Skill Set</label>
                      </div>
                      <div class="input">
                        <textarea id="skillSet" name="skills" placeholder="Write your document review skill set..."></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <input type="submit" value="Submit">
                    </div>
                  </form>
            </div>
        </div>
        <!-- Side Bar Section -->
        <div class="sidebar" id="sideNav">
            <div class="profile">
                <img src="images\dpp.jpg" alt="profile_picture">
                <h3><?php $emptySpace = " "; echo $_SESSION['fname'] . $emptySpace . $_SESSION['lname']; ?></h3>
                <p>Technology Head</p>
            </div>
            <ul>
                <li>
                    <a href="dashboard.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="list-members.php?<?php echo time(); ?>" class="active">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="item">List of Members</span>
                    </a>
                </li>
                <li>
                    <a href="list-documents.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-list-ol"></i></span>
                        <span class="item">List of Documents</span>
                    </a>
                </li>
                <li>
                    <a href="doc-assign.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-file-signature"></i></span>
                        <span class="item">Assign to members</span>
                    </a>
                </li>
                <li>
                  <a href="view-review-pts.php?<?php echo time(); ?>">
                      <span class="icon"><i class="fas fa-solid fa-file-lines"></i></span> 
                      <span class="item">View Review Points</span>
                  </a>
              </li>
              <li>
                <a href="report-gen.php?<?php echo time(); ?>">
                    <span class="icon"><i class="fas fa-duotone fa-chart-simple"></i></span> 
                    <span class="item">Report Generation</span>
                </a>
            </li>
            </ul>
        </div>

    </div>

    <script>
        /* var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        }) */
        ////
        var hamburger = document.querySelector(".hamburger");
        var logoutButton = document.getElementById("logoutButton");
        var sideNav = document.getElementById("sideNav");

        // When the side navigation bar is collapsed, set the logout button position to fixed.
        sideNav.addEventListener("collapsed", () => {
            logoutButton.style.position = "fixed";
            logoutButton.style.top = "0";
            
        });

        // When the side navigation bar is expanded, set the logout button position to relative.
        sideNav.addEventListener("expanded", () => {
            logoutButton.style.position = "relative";
            logoutButton.style.left = "70";
        });

        // Toggle the hamburger menu when clicked.
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        });

    </script>
</body>

</html>