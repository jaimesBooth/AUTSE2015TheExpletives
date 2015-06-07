<html>
    <head>
        <link rel="stylesheet" type="text/css" href="SE.css">
        <title>SERLER Evidence Repository - Search</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <header>
        <h1>Paper Search Form</h1>
        </header>
        <section>
        <form name="searchpaperr" action="searchpaperprocess.php"  method="post">
        	<label>Practice:</label><input type="text" name="searchPractice">
        	<label>Research Methodology:</label><input type="text" name="searchResearchMethodology">
        	<label>From:</label><input type="text" name="dateFrom" value="YYYY" size="4" maxlength="4"> 
        	<label>To:</label><input type="text" name="dateTo" value="YYYY" size="4" maxlength="4">
        	<label><br></label>
            <input type="submit" value="Submit"><input type="reset" value="Reset">
        </form>
        </section> 
    </body>
</html>