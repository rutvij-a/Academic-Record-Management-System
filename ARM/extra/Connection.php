<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$SSC_marks = $_POST['SSC_marks'];
		$HSC_marks = $_POST['HSC_marks'];
		$Sem1 = $_POST['Sem1'];
		$Sem2 = $_POST['Sem2'];
		$Sem3 = $_POST['Sem3'];
		$Sem4 = $_POST['Sem4'];
		$Sem5 = $_POST['Sem5'];
		$Sem6 = $_POST['Sem6'];
		$Sem7 = $_POST['Sem7'];
		$Sem8 = $_POST['Sem8'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `grade_table`(`SSC_marks`, `HSC_marks`, `Sem1`, `Sem2`, `Sem3`, `Sem4`, `Sem5`, `Sem6`, `Sem7`, `Sem8`) VALUES ('$SSC_marks','$HSC_marks','$Sem1','$Sem2','$Sem3','$Sem4','$Sem5','$Sem6','$Sem7','$Sem8')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully." . " Please browse your localhost php my admin" . " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
