<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['sno']) && isset($_SESSION['user_id'])) 

 ?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" href="icon_path" type="image/icon type">
<title>DRM</title>
<!-- Head Section -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles\doc-assign.css">
</head>
<!-- Body Section -->

<body>
    <script src="script\doc-assign.js"></script>

    <div class="main">
        <div class="section">
            <!-- Top Nav Bar Section -->
            <div class="navbar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="navbar-heading">Document Assign
                    <a href="logout.php"><button class="logout-btn" name="button" type="button">Logout</button></a>
                </h1>
            </div>
            <!-- Actual Body Container -->
            <div class="main-body-container">
                <table class="table">
                    <tr>
                        <th>Sl No.</th>
                        <th>Document ID</th>
                        <th>Document Name</th>
                        <th>Project</th>
                        <th>Department</th>
                        <th>Assign</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>STR</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3412</td>
                        <td>STD</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2341</td>
                        <td>SRS</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2143</td>
                        <td>SDD</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>1324</td>
                        <td>STR</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4231</td>
                        <td>STD</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>4321</td>
                        <td>SRS</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="assign-btn"><a href="assign.php?<?php echo time(); ?>"><button>Assign</button></a></td>
                    </tr>
                </table>
                <div class="pagination">
                    <a href="#" class="page-num">«</a>
                    <a href="#" class="page-num">1</a>
                    <a href="#" class="page-num">2</a>
                    <a href="#" class="page-num">3</a>
                    <a href="#" class="page-num">4</a>
                    <a href="#" class="page-num">»</a>
                </div>
            </div>
        </div>
        <!-- Side Bar Section -->
        <div class="sidebar">
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
                    <a href="doc-assign.php?<?php echo time(); ?>" class="active">
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
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>