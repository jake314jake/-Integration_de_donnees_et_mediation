<!DOCTYPE html>
<html>
<head >
    <link rel="stylesheet" href="./style.css">
</head>
<body>
	<form action="http://localhost/GUI/includes/test.php" method="post">
		<h1>Search in Employee</h1>
		<p>Please fill in this form.</p>
		<hr>
		
        
		<label for="salaryMin"><b> Employee Salaire</b></label>
		<input class="salaryMin" type="text" placeholder="Enter Employee min salary" name="salaryMin" ><br>
		<input class="salaryMax" type="text" placeholder="Enter Employee max salary" name="salaryMax" ><br>
		
		<label for="Departement"><b>Departement Name</b></label> 
		<input type="text" placeholder="Enter Your Departement" name="Departement" ><br>

		
		<hr>
		<button type="submit" class="registerbutton">Search</button>
		
      
		
	
		
	</form>


</body>
</html>