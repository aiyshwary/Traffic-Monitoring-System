<?php 
session_start();
	include("aconnection.php");
	include("ofunctions.php");
    $id = $_GET['id'];

    $qry = mysqli_query($con,"select * from signalling where id='$id'");

    $data = mysqli_fetch_array($qry);   

    if(isset($_POST['update'])) 
    {
        $time_from = $_POST['time_from'];
        $time_to = $_POST['time_to'];
        
        $edit = mysqli_query($con,"update signalling set time_from ='$time_from', time_to='$time_to' where id='$id'");
        
        if($edit)
        {
            header("location:osignalling.php");
            exit;
        }  	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
	<title>Citizen Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
	<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    
    
	<!-- ***** signin starts ***** -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/traffic.svg" alt="IMG">
				</div>
                <form method="post">
                    <div class="login100-form validate-form">
                        <span class="login100-form-title">
                            CHANGE TIMINGS
                        </span>
                        <div class="form-group">
                            <div class="wrap-input100 validate-input" value="<?php echo $data['time_from'] ?>">
                                <input class="input100" type="text" name="time_from" placeholder="New Time From">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="wrap-input100 validate-input" value="<?php echo $data['time_to'] ?>">
                                <input class="input100" type="text" name="time_to" placeholder="New Time To">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" name="update" class="login100-form-btn">
                                Update
                            </button><br><br>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
	<!-- ***** signin Ends ***** -->
    <!--===============================================================================================-->	
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="js/main.js"></script>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
            $("."+selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    <!--===============================================================================================-->
</body>
</html>