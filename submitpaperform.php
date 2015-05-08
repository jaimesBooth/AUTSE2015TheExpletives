<html>
    <head>
        <title>SERLER Evidence Repository - Submission</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script>
            function validateForm(){
                //Example JavaScript validation of text entered into "description" field
                var description = document.forms["submitpaper"]["description"].value;
                
                if(description == null || description == ""){
                    alert("The description cannot be null");
                    return false;
                    
                }else if(description.match(/[^-\sa-zA-Z0-9.,!?]+/g)){
                    alert("The description contains invalid characters.");
                    return false;
                    
                }
            }
            
        </script>
    </head>
    <body>
        <form name="submitpaper" action="submitpaperprocess.php" onsubmit="return validateForm()" method="post">
            
            
            <!--Example field for testing purposes-->
            <label>Description:
                <input type="text" name="description">
            </label><br>
            <input type="submit" value="Submit">
        </form>
        
    </body>
</html>