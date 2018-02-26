<?php  
$months = [
	"January" => "31",
	"February (Leap Year)" => "29",
	"February (Non Leap Year)" => "28",
	"March" => "31",
	"April" => "30",
	"May" => "31",
	"June" => "30",
	"July" => "31",
	"August" => "31",
	"September" => "30",
	"October" => "31",
	"November" => "30",
	"December" => "31"
];
function monthcall(){
	foreach ($GLOBALS['months'] as $key => $value){
		echo "<option value=\"$key\">" . strtoupper($key) . "</option>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MONTHS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<h3 class="text-center">The Month Calculator</h3>
	<div class="jumbotron text-center">
	<h3>Please Chose A Month</h3>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<select name="month">
			<option>--Please Pick A Month--</option>
			<?php monthcall(); ?>
		</select>
		<br>
		<br>
		<br>
		<input class="btn btn-warning" type="submit" name="Submit" value="submit">
	</form>
	</div>
	<div class="jumbotron text-center">
	<?php  
	if (isset($_POST['month'])) {
		foreach ($GLOBALS['months'] as $key => $value) {
			if ($key == $_POST['month']) {
				echo "The month of $key.Has $value days.";
				echo "<br>";
			}
		}
	}
	?>
	</div>
</div>

</body>
</html> 
