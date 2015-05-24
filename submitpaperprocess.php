<?php
    
    //Checks all information entered into the SERLER submission form is set then stores the input to local variables.
    if(true){
        $title = $_POST["title"];
        $author = $_POST["authors"];
        $journal = $_POST["journal"];
        $year = $_POST["year"];
        $apaformat = $_POST["apaformat"];
        if($apaformat == "noapa"){
            if(isset($_POST["apa"]) && !empty($_POST["apa"])){
                $otherformat = $_POST["apa"];
            }
        }else{
            $otherformat = null;
        }
        $researchMethodology = $_POST["researchMethodology"];
        if($researchMethodology == '0'){
            if(isset($_POST["otherMethodology"]) && !empty($_POST["otherMethodology"])){
                $otherMethodology = $_POST["otherMethodology"];
            }
        }else{
            $otherMethodology = null;
        }      
        $researchMethod = $_POST["researchMethod"];        
        if($researchMethod == '0'){            
            if(isset($_POST["otherMethod"]) && !empty($_POST["otherMethod"])){
                $otherMethod = $_POST["otherMethod"];
            }
        }else{
            $otherMethod = null;
        }         
        $contextWhat = $_POST["contextWhat"];
        $contextWhy = $_POST["contextWhy"];        
        $contextWhere = $_POST["contextWhere"];        
        $contextWhen = $_POST["contextWhen"];        
        $contextWho = $_POST["contextWho"];
        $contextHow = $_POST["contextHow"];
        $benefitOutcome = $_POST["benifitOutcome"];
        $methodResult = $_POST["methodResult"];        
        $methodIntegrity = $_POST["methodIntegrity"];
        $confidence = $_POST["confidence"];        
        $confidenceReason = $_POST["confidenceReason"];
        $confidenceRater = $_POST["confidenceRater"];
        
        
        // $credibility = $_POST["credibility"];
        // $apareason = $_POST["apareason"];
        // $aparating = $_POST["aparating"];
        // $researchLevel = $_POST["researchLevel"];
        // $evidenceDescription = $_POST["evidenceDescription"];
        // $researchDescription = $_POST["researchDescription"];
        // $researchMetrics = $_POST["researchMetrics"];
        // $nature = $_POST["nature"];
        //Statement to test input successful
        echo "Input received";
        submitPaperToDatabase($title,$author,$journal,$year,$apaformat,$otherformat,$researchMethodology,$otherMethodology,$researchMethod,$otherMethod,$contextWhat,$contextWhy,$contextWhere,$contextWhen,$contextWho,$contextHow,$benefitOutcome,$methodResult,$methodIntegrity,$confidence,$confidenceReason,$confidenceRater);
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
        if(isset($_POST["title"], $_POST["authors"], $_POST["journal"], $_POST["year"], $_POST["apaformat"], $_POST["researchMethodology"], $_POST["researchMethod"], $_POST["contextWhat"], $_POST["contextWhy"], $_POST["contextWhere"], $_POST["contextWhen"], $_POST["contextWho"], $_POST["contextHow"], $_POST["benifitOutcome"], $_POST["methodResult"], $_POST["methodIntegrity"], $_POST["confidence"], $_POST["confidenceReason"], $_POST["confidenceRater"])){
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
        if(!empty($_POST["title"]) && !empty($_POST["authors"]) && !empty($_POST["journal"]) && !empty($_POST["year"]) && !empty($_POST["apaformat"]) && !empty($_POST["researchMethodology"]) && !empty($_POST["researchMethod"]) && !empty($_POST["contextWhat"]) && !empty($_POST["contextWhy"]) && !empty($_POST["contextWhere"]) && !empty($_POST["contextWhen"]) && !empty($_POST["contextWho"]) && !empty($_POST["contextHow"]) && !empty($_POST["benifitOutcome"]) && !empty($_POST["methodResult"]) && !empty($_POST["methodIntegrity"]) && !empty($_POST["confidence"]) && !empty($_POST["confidenceReason"]) && !empty($_POST["confidenceRater"])){
            return true;
        }else{
            return false;
        }
    }
    
    
    function submitPaperToDatabase($title,$author,$journal,$year,$apaformat,$otherformat,$researchMethodology,$otherMethodology,$researchMethod,$otherMethod,$contextWhat,$contextWhy,$contextWhere,$contextWhen,$contextWho,$contextHow,$benefitOutcome,$methodResult,$methodIntegrity,$confidence,$confidenceReason,$confidenceRater){
        
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
    apaFormat VARCHAR(5) NOT NULL,
    otherFormat VARCHAR(10),
    researchMethodology VARCHAR(1) NOT NULL,
    otherMethodology VARCHAR(40),    
    researchMethod VARCHAR(1) NOT NULL,
    otherMethod VARCHAR(40),
    contextWhat VARCHAR(200),
    contextWhy VARCHAR(200),
    contextWhere VARCHAR(200),
    contextWhen VARCHAR(200),    
    contextWho VARCHAR(200),    
    contextHow VARCHAR(200),
    benefitOutcome VARCHAR(20),    
    methodResult VARCHAR(40),    
    methodIntegrity VARCHAR(40),
    confidence INT(1),
    confidenceReason VARCHAR(60),
    confidenceRater VARCHAR(20));
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
    apaFormat,
    otherFormat,
    researchMethodology,
    otherMethodology,    
    researchMethod,
    otherMethod,
    contextWhat,
    contextWhy,
    contextWhere,
    contextWhen,    
    contextWho,    
    contextHow,
    benefitOutcome,    
    methodResult, 
    methodIntegrity,
    confidence,
    confidenceReason,
    confidenceRater)
VALUES(
    '$title',
    '$author',
    '$journal',
    '$year',
    '$apaformat',
    '$otherformat',
    '$researchMethodology',
    '$otherMethodology',    
    '$researchMethod',
    '$otherMethod',
    '$contextWhat',
    '$contextWhy',
    '$contextWhere',
    '$contextWhen',    
    '$contextWho',    
    '$contextHow',
    '$benefitOutcome',    
    '$methodResult',    
    '$methodIntegrity',
    '$confidence',
    '$confidenceReason',
    '$confidenceRater');
SQLBLOCK;
           
            //Attempts to submit the paper insertion SQL query to the database, condition based on query success
            if($conn->query($sqlInsertPaper)){
                //Displays a confirmation message if the paper is successfully inserted into the database
                echo "<p>The paper has been saved into the database.<br>";
                echo '<a href="index.php:>Return home<a><br></p>';
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