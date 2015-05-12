<html>
    <head>
        <link rel="stylesheet" type="text/css" href="SE.css">
        <title>SERLER Evidence Repository - Submission</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script>
            function validateForm(){
            //     //Example JavaScript validation of text entered into "description" field
            //     //Access the value entered into description field of the submit paper form
            //   var description = document.forms["submitpaper"]["description"].value;
                
            //     if(description == null || description == ""){
            //         //produces an alert dialog message
            //         alert("The description cannot be null or Blank");
            //         //returns false stopping the form from submitting
            //         return false;
                    
            //     }else if(description.match(/[^-\sa-zA-Z0-9.,!?]+/g)){
            //         //produces an alert dialog message                    
            //         alert("The description contains invalid characters.");
            //         //returns false stopping the form from submitting
            //         return false;
                    
            //     }
            }
            
        </script>
    </head>
    <body>
        <header>
        <h1>Paper Submission Form</h1>
        </header>
        
        <section>
        <form name="submitpaper" action="submitpaperprocess.php"  method="post">
            
            <!--Article Information Form-->
            <h2>Article Information:</h2>
            
            <label>Title:</label><input type="text" name="title">
            <br>
            <label>Authors:</label><input type="text" name="authors">
            <br>
            <label>Journal:</label><input type="text" name="journal">
            <br>
            <label>Year:</label><input type="text" name="year" size="4" maxlength="4">
            <br>
            <label>Standard APA</label> <input type="radio" name="apaformat" value="apa" checked="true">
            <label>Other</label> <input type="radio" name="apaformat" value="noapa"><br>
            <label>(If Other Please Specify):</label><input type="text" name="apa">
            <br>
            <label>Credibility:</label>
               <radio><input type="radio" name="credibility" value="1" checked="true">&#9734;</radio>
               <radio><input type="radio" name="credibility" value="2">&#9734;&#9734;</radio>
               <radio><input type="radio" name="credibility" value="3">&#9734;&#9734;&#9734;</radio>
               <radio><input type="radio" name="credibility" value="4">&#9734;&#9734;&#9734;&#9734;</radio>
               <radio><input type="radio" name="credibility" value="5">&#9734;&#9734;&#9734;&#9734;&#9734;</radio>
               <label>Reason:</label><input type="text" name="apareason">
               <label>Who Rated This:</label><input type="text" name="aparating">
            <br>
            <label>Research Level:</label>
                <select name="researchLevel">
                  <option value="1">RL 1</option>
                  <option value="2">RL 2</option>
                  <option value="3">RL 3</option>
                  <option value="4">RL 4</option>
                </select>
            <br>
            <label>Research Methodology:</label>
                <select name="researchMethodology">
                  <option value="1">RM 1 - description</option>
                  <option value="2">RM 2 - description</option>
                  <option value="3">RM 3 - description</option>
                  <option value="4">RM 4 - description</option>
                </select>
            <!--End of Article Information-->
            
            <br>
            <br>
            <h2>Evidence Item:</h2>
            
            <!--Start of Evidence Item Form-->
            <label>Benifit/Outcome:</label><input type="text" name="benifitOutcome">
            <br>
            <label>Description:</label><input type="text" name="evidenceDescription">
            <br>
            <label>Result of Study:</label><input type="text" name="evidenceResult">
            <br>
            <label>Integritry of practice/method:</label><input type="text" name="practiceIntegrity">
            <br>
            <label>Confidence Rating:</label>
                <select name="confidence">
                  <option value="1">CR 1</option>
                  <option value="2">CR 2</option>
                  <option value="3">CR 3</option>
                  <option value="4">CR 4</option>
                  <option value="5">CR 5</option>
                </select>
            <br>
            <label>Reason:</label><input type="text" name="confidenceReason">
            <br>
            <label>Who Rated This:</label><input type="text" name="confidenceRater">
            <br>
            <!--End of Evidence Item Form-->
            
            <br>
            <br>
            <h2>Research Design:</h2>
            
            <!--Start of Research Design Form-->
            <label>Research Description:</label><input type="text" name="researchDescription">
            <br>
            <label>Research Method:</label>
                <select name="method">
                  <option value="1">RM 1 - description</option>
                  <option value="2">RM 2 - description</option>
                  <option value="3">RM 3 - description</option>
                  <option value="4">RM 4 - description</option>
                  <option value="5">RM 5 - description</option>
                </select>
            <br>
            <label>Research Metrics Used:</label><input type="text" name="researchMetrics">
            <br>
            <label>Participants Nature:</label>
                <select name="nature">
                  <option value="1">PN 1 - description</option>
                  <option value="2">PN 2 - description</option>
                  <option value="3">PN 3 - description</option>
                  <option value="4">PN 4 - description</option>
                  <option value="5">PN 5 - description</option>
                </select>
            <br>
            <!--End of Research Design Form-->
            <br>
            <input type="submit" value="Submit"><input type="reset" value="Reset">
            </section>
        </form>
    </body>
</html>