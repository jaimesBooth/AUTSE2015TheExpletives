<html>
    <head>
        <title>SERLER Evidence Repository - Submission</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script>
            function validateForm(){
                //Example JavaScript validation of text entered into "description" field
                //Access the value entered into description field of the submit paper form
                var description = document.forms["submitpaper"]["description"].value;
                
                if(description == null || description == ""){
                    //produces an alert dialog message
                    alert("The description cannot be null or Blank");
                    //returns false stopping the form from submitting
                    return false;
                    
                }else if(description.match(/[^-\sa-zA-Z0-9.,!?]+/g)){
                    //produces an alert dialog message                    
                    alert("The description contains invalid characters.");
                    //returns false stopping the form from submitting
                    return false;
                    
                }
            }
            
        </script>
    </head>
    <body>
        
        <h1>Paper Submission Form</h1>
        
        <form name="submitpaper" action="submitpaperprocess.php" onsubmit="return validateForm()" method="post">
            
            
            <!--Article Information Form-->
            <label>Description:
                <input type="text" name="description">
            </label><br>
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
                Standard APA <input type="radio" name="apa">
                Other <input type="radio" name="noapa"><br>
                (If Other Please Specify): <input type="text" name="apa">
            </label><br>
            <label>Credibility:
               &#9734; <input type="radio" name="1">
               &#9734;&#9734; <input type="radio" name="2">
               &#9734;&#9734;&#9734;<input type="radio" name="3">
               &#9734;&#9734;&#9734;&#9734;<input type="radio" name="4">
               &#9734;&#9734;&#9734;&#9734;&#9734;<input type="radio" name="5">
               <br>
               Reason: <input type="text" name="apareason">
               Who Rated This: <input type="text" name="aparating">
            </label><br>
            <label>Research Level:
                <select>
                  <option value="1">RL 1</option>
                  <option value="2">RL 2</option>
                  <option value="3">RL 3</option>
                  <option value="4">RL 4</option>
                </select>
            </label><br>
            <label>Research Methodology:
                <select>
                  <option value="1">RM 1 - description</option>
                  <option value="2">RM 2 - description</option>
                  <option value="3">RM 3 - description</option>
                  <option value="4">RM 4 - description</option>
                </select>
            </label><br>
            <!--End of Article Information-->
            
            <!--Start of Evidence Item Form-->
            
            
            <input type="submit" value="Submit"><br>
            <input type="reset" value="Reset">
        </form>
        
    </body>
</html>