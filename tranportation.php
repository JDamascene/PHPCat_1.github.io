<!DOCTYPE html>
<html>
<head>
	<title>TRANSPORTATION</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Modes Of Tranportation</h1>
		<div class="jumbotron text-center">
			<p>
				Travel takes many form, wheather across the country or around the world.Here's a list of some common modes of transportation:
			</p>


			<?php					
			if (empty($_POST['AdditionText'])) {
				$ModeOf_T = ['Automobile','Jet','Train','Ferry'];
				$txt="<br/><span>Sorry if we left out anything, care to add?<br/>(Please put a comma after every mode of trnsport...): </span><br/>";
			}															
			else {														
				$defaultList=explode (',',$_POST['ModeOf_TArray']);	

				$AdedText=explode (',',$_POST['AdditionText']);	

				$ModeOf_T=array_merge ($defaultList,$AdedText);		

				$txt="<br/> Add more?<br/>";						

			}
			foreach ($ModeOf_T as $transportMode) 
				echo "<li>$transportMode</li>";		

				$defaultList=implode(',',$ModeOf_T);	
			?>	
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">		
				<?php echo"$txt"; ?>
				<input type="text" name="AdditionText" maxlength="500"/>
				<input type="hidden" name="ModeOf_TArray" value="<?php echo"$defaultList"; ?>" /> 
				<br>
				<br>
				<br>
				<input class="btn btn-info" type="submit" value="Add">
			</form>
		</div>
	</div>										


</body>
</html> 
