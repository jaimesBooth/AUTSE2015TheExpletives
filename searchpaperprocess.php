<?php
	//Checks the search term is set and not null
	if(checkset() && checkNotEmpty()){
		//Assigns the search term to a local variable
		$searchPractice = $_POST["searchPractice"];
		$searchResearchMethodology = $_POST["searchResearchMethodology"];
		$dateFrom = $_POST["dateFrom"];
		$dateTo = $_POST["dateTo"];
		//Calls a function to query the database using the entered search term
		searchStatus($searchPractice,$searchResearchMethodology,$dateTo,$dateFrom);
	}else{
		//If the search term is not set or null, display an error message
		echo "Please enter valid search criteria<br>";
	}
	
	
	
	function checkSet(){
		if(isset($_POST["searchPractice"],$_POST["searchResearchMethodology"],$_POST["dateFrom"],$_POST["dateTo"])){
			return true;
		}else{
			return false;
		}
	}
	
	function checkNotEmpty(){
		if(!empty($_POST["searchPractice"]) && !empty($_POST["searchResearchMethodology"]) && !empty($_POST["dateFrom"]) && !empty($_POST["dateTo"])){
			return true;
		}else{
			return false;
		}
	}
	
	//A function that checks a provided search term against the database and returns information about any entry that has a matching statuscode or status
	function searchStatus($searchPractice,$searchResearchMethodology,$dateTo,$dateFrom){
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
		FROM submittedPapersDemo
		WHERE year >= '$dateFrom'
		AND year <= '$dateTo'
		AND researchMethod LIKE '$searchPractice%';
		
SQLBLOCK;
		
		//Creates a variable and stores the result from the database search
		$result = $conn->query($searchQuery);
		
		//Checks that the database search returned any data
		if($result->num_rows > 0){
			//Iterates through all the rows returned by the database search
			while ($row = $result->fetch_array()) {		
	
				echo "<p class='paper'>Title: " . $row['title'] . "<br>";
				echo "Authors: " . $row['author'] . "<br>";
				echo "Journal: " . $row['date'] . "<br>";
				echo "Year: " . $row['year'] . "<br>";
				echo "Research Methodology: " . $row['researchMethodology'] . "<br>";
				echo "Practice: " . $row['researchMethod'] . "<br>";
				echo "<br></p>";
			}	
			echo '<a href="index.php">Return home<a><br></p>';
		}else{
			//If the database search returns no rows matching the users search term, display an appropriate error message
			echo "<p>No results found. Please try again.<br></p>";	
			echo '<a href="searchpaperform.php">Try again?</a>';
		}
		//Closes the database connection
		$conn->close();
	}
?>

