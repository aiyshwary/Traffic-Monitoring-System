<?php
session_start();
	include("aconnection.php");
	include("cfunctions.php");
	$user_data = check_login($con);

	$fine_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
	$fine_data = null;
	if($fine_id > 0) {
		$res = mysqli_query($con, "SELECT * FROM fine WHERE id='$fine_id' AND username='" . $user_data['username'] . "'");
		if($res && mysqli_num_rows($res) > 0) {
			$fine_data = mysqli_fetch_assoc($res);
		}
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pay'])) {
		$pay_id = intval($_POST['fine_id']);
		$sql = "UPDATE fine SET paid=1 WHERE id='$pay_id' AND username='" . $user_data['username'] . "'";
		if(mysqli_query($con, $sql)) {
			header("Location: cfine.php?payment=success");
			die;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 500px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 55%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 15px;
  border: 1px solid lightgrey;
  border-radius: 5px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 30px;
  margin: 30px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<?php if(isset($_GET['payment']) && $_GET['payment'] == 'success'): ?>
  <p style="color:green; text-align:center; padding:30px; font-size:20px;">
    &#10003; Payment successful! Your fine has been marked as paid.
    <a href="cfine.php">View Fines</a>
  </p>
<?php else: ?>

<div style="max-width:700px; margin:50px auto; padding:20px;">
  <?php if($fine_data): ?>
    <p style="text-align:center; font-size:18px;">
      <strong>Fine Amount Due: &#8377;<?php echo htmlspecialchars($fine_data['amount']); ?></strong>
    </p>
  <?php endif; ?>
  <form method="post" action="cpayment.php<?php echo $fine_id ? '?id='.$fine_id : ''; ?>">
    <input type="hidden" name="fine_id" value="<?php echo $fine_id; ?>">

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Month">
            <div class="row">
              <div class="col-30">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="20XX">
              </div>
              <div class="col-30">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="XXX">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Share payment receipt
        </label>
        <input type="submit" name="pay" value="Continue to checkout" class="btn">
      </form>
</div>
<?php endif; ?>

</body>
</html>
