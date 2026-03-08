<?php
session_start();
	include("aconnection.php");
	include("ofunctions.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fine Allotment</title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Sl.no</th>
									<th class="cell100 column3">Name</th>
									<th class="cell100 column3">VID</th>
									<th class="cell100 column3">Amount</th>
									<th class="cell100 column3"><a href="ohome.php">GO TO HOME PAGE</a></th>
								</tr>
							</thead>
						</table>
					</div>	

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                            <?php
                            include("aconnection.php");                        
                            $records = mysqli_query($con,"select * from fine"); // fetch data from database

							while($data = mysqli_fetch_array($records))
							{
							?>
                                        <tr class="alert" role="alert">
											<td class="cell100 column1"><?php echo $data['id']; ?></td>
                                            <td class="cell100 column3"><?php echo $data['username']; ?>.</td> 
                                            <td class="cell100 column3"><?php echo $data['VID']; ?></td>
                                            <td class="cell100 column3"><?php echo $data['amount']; ?></td>
											<td class="cell100 column3"><a href="ozfupdate.php?id=<?php echo $data['id']; ?>">Edit</a></td>                  
                                        </tr>
                                    <?php
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