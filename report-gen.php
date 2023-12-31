<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['sno']) && isset($_SESSION['user_id'])) 

 ?>
<!DOCTYPE html>
<html>
<link rel="icon" href="icon_path" type="image/icon type">
<title>DRM</title>
<!-- Head Section -->

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="styles\report-gen.css">
</head>
<!-- Body Section -->

<body>
  <script src="script\report-gen.js"></script>

  <div class="main">
    <div class="section">
      <!-- Top Nav Bar Section -->
      <div class="navbar">
        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
        <h1 class="navbar-heading">Report Generation
          <a href="logout.php" id="logoutButton"><button class="logout-btn" id="logoutButton" name="button"
              type="button">Logout</button></a>
        </h1>
      </div>
      <!-- Actual Body Container -->
      <div class="main-body-container">
        <form action="/action_page.php">
          <div class="row">
            <div class="label">
              <label for="id">Document Ref. No.</label>
            </div>
            <div class="input">
              <select id="docId" name="doc-id">
                <option value="" disabled selected>Select your option</option>
                <option value="1234">1234</option>
                <option value="2143">2143</option>
                <option value="3412">3412</option>
                <option value="4231">4231</option>
                <option value="2341">2341</option>
                <option value="1324">1324</option>
                <option value="4321">4321</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="label">
              <label for="id">Date</label>
            </div>
            <div class="input">
              <input type="date" type="date">
            </div>
          </div>
          <div class="row">
            <div class="label">
              <label for="docname">Assigned By</label>
            </div>
            <div class="input">
              <label for="assignBy">Technology Head Name</label>
            </div>
          </div>
          <div class="row">
            <div class="label">
              <label for="docname">Assigned To</label>
            </div>
            <div class="input">
              <select id="memid" name="member-id">
                <option value="" disabled selected>Select your option</option>
                <option value="1234">1234</option>
                <option value="2143">2143</option>
                <option value="3412">3412</option>
                <option value="4231">4231</option>
                <option value="2341">2341</option>
                <option value="1324">1324</option>
                <option value="4321">4321</option>
              </select>
              <a href="">To Know RCI ID</a>
            </div>
          </div>
          <div class="row">
            <div class="label">
              <label for="project">Project</label>
            </div>
            <div class="input">
              <select id="project" name="project">
                <option value="" disabled selected>Select your option</option>
                <option value="abm">ABM</option>
                <option value="saab">SAAB</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="label">
              <label for="docname">Document Name</label>
            </div>
            <div class="input">
              <select id="docname" name="docname">
                <option value="" disabled selected>Select your option</option>
                <option value="str">QR_STR</option>
                <option value="std">QR_STD</option>
                <option value="srs">QR_SRS</option>
                <option value="str">QR_SDD</option>
                <option value="srs">QR_STR</option>
                <option value="std">QR_STD</option>
                <option value="str">QR_SRS</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="label">
              <label for="docname">Review Points</label>
            </div>
            <div class="input">
              <textarea id="skillSet" name="skills" placeholder="Write your document review points..."></textarea>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Generate">
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
          <a href="list-members.php?<?php echo time(); ?>">
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
        <a href="report-gen.php?<?php echo time(); ?>" class="active">
            <span class="icon"><i class="fas fa-duotone fa-chart-simple"></i></span> 
            <span class="item">Report Generation</span>
        </a>
    </li>
      </ul>
    </div>

  </div>

  <script>
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