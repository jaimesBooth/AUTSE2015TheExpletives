<html>
    <head>
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
        
        <h1>Paper Submission Form</h1>
        
        <form name="submitpaper" action="submitpaperprocess.php"  method="post">
            
            
            <!--Article Information Form-->
            <h2>Article Information:</h2>
            <label>Title:
                <input type="text" name="title">
            </label><br>
            <label>Authors:
                <input type="text" name="authors">
            </label><br>
            <label>Journal:
                <input type="text" name="journal">
            </label><br>
            <label>Year: 
                <input type="text" name="year" size="4" maxlength="4">
            </label><br>
            <label>
                Standard APA <input type="radio" name="apaformat" value="apa" checked="true">
                Other <input type="radio" name="apaformat" value="noapa"><br>
                (If Other Please Specify): <input type="text" name="apa">
            </label><br>
            <label>Credibility:
               &#9734; <input type="radio" name="credibility" value="1" checked="true">
               &#9734;&#9734; <input type="radio" name="credibility" value="2">
               &#9734;&#9734;&#9734;<input type="radio" name="credibility" value="3">
               &#9734;&#9734;&#9734;&#9734;<input type="radio" name="credibility" value="4">
               &#9734;&#9734;&#9734;&#9734;&#9734;<input type="radio" name="credibility" value="5">
               <br>
               Reason: <input type="text" name="apareason">
               Who Rated This: <input type="text" name="aparating">
            </label><br>
            <label>Research Level:
                <select name="researchLevel">
                  <option value="1">RL 1</option>
                  <option value="2">RL 2</option>
                  <option value="3">RL 3</option>
                  <option value="4">RL 4</option>
                </select>
            </label><br>
            <label>Research Methodology:
                <select name="researchMethodology">
                  <option value="1">RM 1 - description</option>
                  <option value="2">RM 2 - description</option>
                  <option value="3">RM 3 - description</option>
                  <option value="4">RM 4 - description</option>
                </select>
            </label><br>
            <!--End of Article Information-->
            
            <br>
            <br>
            <h2>Evidence Item:</h2>
            
            <!--Start of Evidence Item Form-->
            <label>Benifit/Outcome:
                <input type="text" name="benifitOutcome">
            </label><br>
            <label>Description:
                <input type="text" name="evidenceDescription">
            </label><br>
            <label>Result of Study:
                <input type="text" name="evidenceResult">
            </label><br>
            <label>Integritry of practice/method:
                <input type="text" name="practiceIntegrity">
            </label><br>
            <label>Confidence Rating:
                <select name="confidence">
                  <option value="1">CR 1</option>
                  <option value="2">CR 2</option>
                  <option value="3">CR 3</option>
                  <option value="4">CR 4</option>
                  <option value="5">CR 5</option>
                </select>
            </label><br>
            <label>Reason:
                <input type="text" name="confidenceReason">
            </label><br>
            <label>Who Rated This:
                <input type="text" name="confidenceRater">
            </label><br>
            <!--End of Evidence Item Form-->
            
            <br>
            <br>
            <h2>Research Design:</h2>
            
            <!--Start of Research Design Form-->
            <label>Research Discription:
                <input type="text" name="researchDescription">
            </label><br>
            <label>Research Method:
                <select name="method">
                  <option value="1">RM 1 - description</option>
                  <option value="2">RM 2 - description</option>
                  <option value="3">RM 3 - description</option>
                  <option value="4">RM 4 - description</option>
                  <option value="5">RM 5 - description</option>
                </select>
            </label><br>
            <label>Research Metrics Used:
                <input type="text" name="researchMetrics">
            </label><br>
            <label>Participants Nature:
                <select name="nature">
                  <option value="1">PN 1 - description</option>
                  <option value="2">PN 2 - description</option>
                  <option value="3">PN 3 - description</option>
                  <option value="4">PN 4 - description</option>
                  <option value="5">PN 5 - description</option>
                </select>
            </label><br>
            <!--End of Research Design Form-->
            <br>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        
    </body>
</html>