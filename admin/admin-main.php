<?php
	session_start();
	if($_SESSION['session_id'] != session_id())
		header("location:index.php");
?>

<?php
	$server_name = "sql313.epizy.com";
	$user_name = "epiz_20458709";
	$password = "adminitsa123";
	$db_name = "epiz_20458709_itsa";
	
	$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
	
	if($conn)
		echo "<span style='background:#5FCF80;color:white;padding:10px'>Connected to the database</span>";
	else
		echo "<span style='background:#D50000;color:white;padding:10px'>Not connected to the database</span>";
?>
<!DOCTYPE html>
<head>
<title>Admin | ITSA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="admin-main.php" class="logo">
        ITSA
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/boy.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="admin-main.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Feedback Table</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Feedback table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th width="8" data-breakpoints="xs">ID</th>
            <th width="18%">Name</th>
            <th width="22%">Email</th>
            <th width="15%" data-breakpoints="xs">Phone</th>
            <th width="37%" data-breakpoints="xs sm md" data-title="DOB">Message</th>
          </tr>
        </thead>
        <tbody>
		  <?php
			$sql = "SELECT * FROM feedback_table";
			$result = mysqli_query($conn, $sql);
			
			while($row = mysqli_fetch_assoc($result)){
				$id = $row['id'];
				$name = $row['name'];
				$phone = $row['phone'];
				$email = $row['email'];
				$message = $row['message'];
				
				echo "<tr>
						<td>".$id."</td>
						<td>".$name."</td>
						<td>".$email."</td>
						<td>".$phone."</td>
						<td>".$message."</td>
					  </tr>";
			}
		  ?>
		  
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div>
			  <p>&copy; 2017 ITSA. All rights reserved | Design by Nishat Sayyed | VIT - INFT C</p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>