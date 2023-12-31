<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['sno']) && isset($_SESSION['user_id'])) 

 ?>
<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="images\logo.jpg" type="image/icon type">
    <title>DRM - Member Dashboard</title>
<!-- Head Section -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles\member-assign-docs.css">
</head>
<!-- Body Section -->

<body>
    <script src="script\member-assign-docs.css.js"></script>

    <div class="main">
        <div class="section">
            <!-- Top Nav Bar Section -->
            <div class="navbar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="navbar-heading">List of Assigned Documents
                    <a href="logout.php"><button class="logout-btn" name="button" type="button">Logout</button></a>
                </h1>
            </div>
            <!-- Actual Body Container -->
            <div class="main-body-container">
                <!-- <a href="add-document.html"><button name="button" type="button">Add Document</button></a> -->
                <table class="table">
                    <tr>
                        <th>Sl No.</th>
                        <th>Document ID</th>
                        <th>Document Name</th>
                        <th>Project</th>
                        <th>Department</th>
                        <th>Download</th>
                        <th>Add Review Points</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>STR</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3412</td>
                        <td>STD</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2341</td>
                        <td>SRS</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2143</td>
                        <td>SDD</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>1324</td>
                        <td>STR</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4231</td>
                        <td>STD</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>4321</td>
                        <td>SRS</td>
                        <td>ABM</td>
                        <td>DSQA</td>
                        <td class="dwn-btn"><a href=""><button>Download</button></a></td>
                        <td class="assign-btn"><a href="add-review-pts.php?<?php echo time(); ?>"><button>Add Review Points</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
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
                <p>Member</p>
            </div>
            <ul>
                <li>
                    <a href="member-dashboard.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="member-assign-docs.php?<?php echo time(); ?>" class="active">
                        <span class="icon"><i class="fas fa-duotone fa-file-invoice"></i></span> 
                        <span class="item">Assigned Documents</span>
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