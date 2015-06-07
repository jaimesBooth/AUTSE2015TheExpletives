<html>
    <head>
        <link rel="stylesheet" type="text/css" href="SE.css">
        <title>SERLER Evidence Repository - Submission</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <header>
        <h1>Paper Submission Form</h1>
        </header>
        
        <section>
        <form name="submitpaper" action="submitpaperprocess.php"  method="post">
            
            <!--Article Information Form-->
            <h2>Evidence Item:</h2>
            
            <label>Title:</label><input type="text" name="title">
            <br>
            <label>Authors:</label><input type="text" name="authors">
            <br>
            <label>Journal:</label><input type="text" name="journal">
            <br>
            <label>Year:</label><input type="text" name="year" size="4" maxlength="4">
            <br>
            
            <h2>Practice and Methodology Information</h2>
            <label>Research Methodology:</label>
                <select name="researchMethodology">
                  <option value="Descriptive-Qualitative">Descriptive-Qualitative</option>
                  <option value="Descriptive-Quantitative">Descriptive-Quantitative</option>
                  <option value="Regression Analyses">Regression Analyses</option>
                  <option value="Experimental">Experimental</option>
                </select>     
            <label>Practice:</label>
                <select name="researchMethod">
                  <option value="Waterfall Development">Waterfall Development</option>
                  <option value="Prototyping">Prototyping</option>
                  <option value="Incremental Development">Incremental Development</option>
                  <option value="Spiral Development">Spiral Development</option>
                  <option value="Rapid Application Development">Rapid Application Development</option>
                  <option value="Agile Development">Agile Development</option>
                </select>
            <br>
            <!--Should be h3, but its messing with position of header-->
            <label><br></label>
            <h3>Practice Context</h3>
            <label>What is the practice used for:</label><input type="text" name="contextWhat">
            <br>
            <label>Why was the practice used:</label><input type="text" name="contextWhy">
            <br>
            <label>Where was practice used:</label><input type="text" name="contextWhere">
            <br>
            <label>When was the practice used:</label><input type="text" name="contextWhen">
            <br>
            <label>Who used the practice:</label><input type="text" name="contextWho">
            <br>
            <label>How was the practice used:</label><input type="text" name="contextHow">    
            <br>
            <label>Benefit/Outcome:</label><input type="text" name="benifitOutcome">
            <br>
            <label>Result of Study:</label><input type="text" name="methodResult">
            <br>
            <label>Integritgy of practice/method:</label><input type="text" name="methodIntegrity">
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
            <!--Beginning of evidence source form -->
            <!--<br>-->
            <h2>Evidence Source Information</h2>
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
            <!--End of evidence source-->
            
            <!--Start of Research Design Form-->
            <label>Research Description:</label><input type="text" name="researchDescription">
            <br>
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
            <label><br></label>
            <input type="submit" value="Submit"><input type="reset" value="Reset">
        </form>
        </section> 
        
    </body>
</html>