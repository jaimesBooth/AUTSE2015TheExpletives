/* Creates appropriate Database table */
$sqlCreate = "CREATE TABLE IF NOT EXISTS article
(
art_ID INT NOT NULL PRIMARY KEY,
art_Title VARCHAR(30) NOT NULL,
art_Authors VARCHAR(30) NOT NULL,
art_Journal VARCHAR(30) NOT NULL,
art_Year DATE NOT NULL,
art_APA BIT,
art_notAPA VARCHAR(30),
art_Credibility INT,
art_Reason VARCHAR(30),
art_Moderator VARCHAR(30) NOT NULL,
art_ResearchLevel_FK INT NOT NULL,
art_Method_FK INT NOT NULL
)";

$sqlCreate = "CREATE TABLE IF NOT EXISTS evidence
(
evi_ID INT NOT NULL PRIMARY KEY,
evi_Benefit VARCHAR(30) NOT NULL,
evi_Description VARCHAR(30) NOT NULL,
evi_Result VARCHAR(30) NOT NULL,
evi_Integrity VARCHAR(30) NOT NULL,
evi_Integrity INT,
evi_Reason VARCHAR(30),
evi_Moderator VARCHAR(30) NOT NULL
)";