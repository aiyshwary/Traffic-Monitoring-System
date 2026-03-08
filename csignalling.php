<?php
session_start();
	include("aconnection.php");
	include("cfunctions.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signal Timings</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Traffic Management Sysytem</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<body>
	<!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="chome.php" class="logo">
                            TMS
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
							<li class="scroll-to-section"><a href="chome.php#top" >Home</a></li>
                            <li class="scroll-to-section"><a href="chome.php#about">About us</a></li>
                            <li class="scroll-to-section"><a href="chome.php#testimonials">team</a></li>
                            <li class="scroll-to-section"><a href="chome.php#contact-us">contact us</a></li>
                            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
                            
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100"><br><br><br>
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Road Name</th>
									<th class="cell100 column3">Time from</th>
									<th class="cell100 column4">Time to</th>
								</tr>
							</thead>
						</table>
					</div>	

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                            <?php
                            include("aconnection.php");                        
                            $sql = "SELECT * FROM signalling";
                            $res = mysqli_query($con,$sql);                       
                            $count = mysqli_num_rows($res);                        
                            $sn = 1;
                            if($count > 0)
                            {
                                
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    $name = $row['road_name'];
                                    $from = $row['time_from'];
                                    $to = $row['time_to'];
                                    ?>
                                        <tr class="alert" role="alert">
                                            <td class="cell100 column1"><?php echo $name; ?>.</td> 
                                            <td class="cell100 column3"><?php echo $from; ?></td>
                                            <td class="cell100 column4"><?php echo $to; ?></td>                  
                                        </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                
                                echo "<tr><td colspan='7' class='error'>Book Not Added Yet</td></tr>";
                                
                            }

                            ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>