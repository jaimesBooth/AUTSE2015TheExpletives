<?php
    
    //Checks all information entered into the SERLER submission form is set then stores the input to local variables.
    if(checkInputSet() && checkInputNotEmpty()){
        $title = $_POST["title"];
        $author = $_POST["authors"];
        $journal = $_POST["journal"];
        $year = $_POST["year"];
        $apaformat = $POST_["apaformat"];
        if($apaformat == "noapa"){
            if(isset($_POST["apa"]) && !empty($_POST["apa"])){
            $otherformat = $_POST["apa"];
            }
        }else{
            $otherformat = null;
        }
        $credibility = $_POST["credibility"];
        $apareason = $_POST["apareason"];
        $aparating = $_POST["aparating"];
        $researchLevel = $_POST["researchLevel"];
        $researchMethodology = $_POST["researchMethodology"];
        $benefitOutcome = $_POST["benifitOutcome"];
        $evidenceDescription = $_POST["evidenceDescription"];
        $evidenceResult = $_POST["evidenceResult"];
        $practiceIntegrity = $_POST["practiceIntegrity"];
        $confidence = $_POST["confidence"];
        $confidenceReason = $_POST["confidenceReason"];
        $confidenceRater = $_POST["confidenceRater"];
        $researchDescription = $_POST["researchDescription"];
        $method = $_POST["method"];
        $researchMetrics = $_POST["researchMetrics"];
        $nature = $_POST["nature"];
        //Statement to test input successful
        echo "Input received";
        submitPaperToDatabase($title, $author, $journal, $year, $apaformat, $otherformat, $credibility, $apareason, $aparating, $researchLevel, $researchMethodology, $benefitOutcome, $evidenceDescription, $evidenceResult, $practiceIntegrity, $confidence, $confidenceReason, $confidenceRater, $researchDescription, $method, $researchMetrics, $nature );
    }else{
        echo "<p>Please complete all fields in the form<br>";
        echo '<a href="submitpaperform.php">Please try again.</a></p>';
    }
    
    
    /**
     * A function to check all the variables passed from the form are set.
     * Is used as a check before assigning the information from the form to local variables.
     * returns true if all fields from the form are set, else returns false.
     * */
    function checkInputSet(){
        if(isset($_POST["title"], $_POST["authors"], $_POST["journal"], $_POST["year"], $_POST["apaformat"], $_POST["credibility"], $_POST["apareason"], $_POST["aparating"], $_POST["researchLevel"], $_POST["researchMethodology"], $_POST["benifitOutcome"], $_POST["evidenceDescription"], $_POST["evidenceResult"], $_POST["practiceIntegrity"], $_POST["confidence"], $_POST["confidenceReason"], $_POST["confidenceRater"], $_POST["researchDescription"], $_POST["method"], $_POST["researchMetrics"], $_POST["nature"])){
            return true;
        }else{
            return false;
        }
    }
    
    
    /**
     * A function to check all variables passed from the form are not empty.
     * Is used as a check before assigning the information from the form to local variables.
     * returns true if all fields are not empty, else returns false. 
     */
    function checkInputNotEmpty(){
        if(!empty($_POST["title"]) && !empty($_POST["authors"]) && !empty($_POST["journal"]) && !empty($_POST["year"]) && !empty($_POST["apaformat"]) && !empty($_POST["credibility"]) && !empty($_POST["apareason"]) && !empty($_POST["aparating"]) && !empty($_POST["researchLevel"]) && !empty($_POST["researchMethodology"]) && !empty($_POST["benifitOutcome"]) && !empty($_POST["evidenceDescription"]) && !empty($_POST["evidenceResult"]) && !empty($_POST["practiceIntegrity"]) && !empty($_POST["confidence"]) && !empty($_POST["confidenceReason"]) && !empty($_POST["confidenceRater"]) && !empty($_POST["researchDescription"]) && !empty($_POST["method"]) && !empty($_POST["researchMetrics"]) && !empty($_POST["nature"])){
            return true;
        }else{
            return false;
        }
    }
    
    
    function submitPaperToDatabase($title, $author, $journal, $year, $apaformat, $otherformat, $credibility, $apareason, $aparating, $researchLevel, $researchMethodology, $benefitOutcome, $evidenceDescription, $evidenceResult, $practiceIntegrity, $confidence, $confidenceReason, $confidenceRater, $researchDescription, $method, $researchMetrics, $nature ){
        
        //Require an external file containing the host, username, password and database name of the mysql database
        require_once("settings.php");
        
        //Create a new connection object using the information in settings.php
        $conn = new mysqli($host,$user,$pswd,$dbnm,$dbport);
        
        //Check if an error occurs when creating the connection object, and print any error
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        //Not sure if this line is needed still when {$dbnm} is used when creating new mysqli object
        $conn->select_db($dbnm);

        //Need to decide data types for table 
        $sqlCreateTable =<<<SQLBLOCK
CREATE TABLE IF NOT EXISTS submittedPapers(
    paper_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(40) NOT NULL,
    author VARCHAR(40) NOT NULL,
    journal VARCHAR(40) NOT NULL,
    year INT(4) NOT NULL,
    apaformat VARCHAR(5) NOT NULL,
    otherformat VARCHAR(10),
    credibility INT(1),
    apareason VARCHAR(40),
    aparating VARCHAR(40),
    researchLevel INT(1),
    researchMethodology VARCHAR(40),
    benefitOutcome VARCHAR(20),
    evidenceDescription VARCHAR(60),
    evidenceResult VARCHAR(40),
    practiceIntegrity VARCHAR(40),
    confidence INT(1),
    confidenceReason VARCHAR(60),
    confidenceRater VARCHAR(20),
    researchDescription VARCHAR(100),
    method VARCHAR(20),
    researchMetrics INT(1),
    nature INT(1));
SQLBLOCK;
        //Attempts to submit the table creation SQL query to the database, condition based on query success
        if($conn->query($sqlCreateTable)){
            echo "<p>Table created<br></p>";
            
            //Need to determine table creation
            $sqlInsertPaper =<<<SQLBLOCK
INSERT INTO submittedPapers(
    title, 
    author, 
    journal, 
    year, 
    apaformat, 
    otherformat, 
    credibility, 
    apareason,
    aparating,
    researchLevel,
    researchMethodology,
    benefitOutcome, 
    evidenceDescription,
    evidenceResult,
    practiceIntegrity,
    confidence,
    confidenceReason, 
    confidenceRater,
    researchDescription,
    method,
    researchMetrics,
    nature) 
VALUES(
    '$title', 
    '$author', 
    '$journal', 
    '$year', 
    '$apaformat', 
    '$otherformat', 
    '$credibility', 
    '$apareason',
    '$aparating',
    '$researchLevel',
    '$researchMethodology',
    '$benefitOutcome', 
    '$evidenceDescription',
    '$evidenceResult',
    '$practiceIntegrity',
    '$confidence',
    '$confidenceReason', 
    '$confidenceRater',
    '$researchDescription',
    '$method',
    '$researchMetrics',
    '$nature');
SQLBLOCK;
           
            //Attempts to submit the paper insertion SQL query to the database, condition based on query success
            if($conn->query($sqlInsertPaper)){
                //Displays a confirmation message if the paper is successfully inserted into the database
                echo "<p>The paper has been saved into the database.<br></p>";
            }else{
                //Displays an error message if the paper is not successful inserted into the database, provides a link to return to the paper submission form
                echo "<p>The paper could not be submitted into the database<br>";
                echo '<a href="submitpaperform.php">Please try again.</a><br></p>';
            }
        }else{
            //Displays an error message if the table creation query fails {does not trigger if the table doesn't create because a table with the same name already exists}
            echo "<p>The table could not be created<br></p>";
        }
        //Closes the database connection
        $conn->close();
    }
    
?>