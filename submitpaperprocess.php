<?php

    //collects variables submitted by form
    $description = $_GET["description"];
    $title = $_GET["title"];
    $author = $_GET["authors"];
    $journal = $_GET["journal"];
    $year = $_GET["year"];
    $apaformat = $GET_["apaformat"];
    if($apaformat == "noapa"){
        $otherformat = $GET_["apa"];
    }
    $credibility = $_GET["credibility"];
    $apareason = $_GET["apareason"];
    $aparating = $_GET["aparating"];
    $researchlevel = $_GET["researchLevel"];
    $researchmethodology = $_GET["researchMethodology"];
    $benefitoutcome = $_GET["benifitOutcome"];
    $evidencedescription = $_GET["evidenceDescription"];
    $evidenceresult = $_GET["evidenceResult"];
?>