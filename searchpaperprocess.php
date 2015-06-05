<?php
	//Checks the search term is set and not null
	if(isset($_GET["searchTerm"]) && !empty($_GET["searchTerm"])){
		//Assigns the search term to a local variable
		$searchTerm = $_GET["searchTerm"];
		//Calls a function to query the database using the entered search term
		searchStatus($searchTerm);
	}else{
		//If the search term is not set or null, display an error message
		echo "Please enter a valid search term.<br>";
	}
	
	//A function that checks a provided search term against the database and returns information about any entry that has a matching statuscode or status
	function searchStatus($searchTerm){
		//Requires an external file containing the connection info for tha database
		require_once ("settings.php");
		//Creates a connection object using the information provided in settings.php
		$conn = new mysqli($host, $user, $pswd, $dbnm);
		
		//Checks if connection produced an error
		if ($conn->connect_error) {
			//If the connection produced and error display error message
			die("Connection failed: " . $conn->connect_error);
		}

		//Selects specific database from established connection
		$conn->select_db($dbnm);	
		
		//Creates a variable and stores an sql query to select all rows from the database where the status code or status match the user entered search term
		//Need to search for... practice, type of research, year greater and year less - then print to table
		$searchQuery =<<<SQLBLOCK
		SELECT * 
		FROM statusData
		WHERE status_code 
		LIKE '$searchterm' 
		OR status LIKE '%$searchterm%';;
		
SQLBLOCK;
		
		//Creates a variable and stores the result from the database search
		$result = $conn->query($searchQuery);
		
		//Checks that the database search returned any data
		if($result->num_rows > 0){
			//Iterates through all the rows returned by the database search
			while ($row = $result->fetch_array()) {		
				//Prints the information related to each status entry that matches the users search term
				// echo "<p class='status'>Status Code: " . $row['status_code'] . "<br>";
				// echo "Status: " . $row['status'] . "<br>";
				// echo "Date: " . $row['date'] . "<br>";
				// echo "Share: " . $row['share'] . "<br>";
				// echo "Permissions: ";
				// if(!empty($row["permission_like"])){
				// 	echo "" . $row["permission_like"] . " ";
				// }
				// if(!empty($row["permission_comment"])){
				// 	echo "" . $row["permission_comment"] . " ";
				// }
				// if(!empty($row["permission_share"])){
				// 	echo "" . $row["permission_share"] . " ";
				// }
				// echo "<br></p>";
			}	
		}else{
			//If the database search returns no rows matching the users search term, display an appropriate error message
			echo "<p>No results found. Please try again.<br></p>";	
		}
		//Closes the database connection
		$conn->close();
	}
?>