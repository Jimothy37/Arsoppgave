<?php
    include 'config.php';

    

    //Opprette kobling
    $conn = $dbc;

    //Sjekk om kobling virker
    if ($conn->connect_error) {
        die("Noe gikk galt: " . $conn->connect_error);
    }

    //Angi UTF-8 som tegnsett
    $conn->set_charset("utf8");

    $sql = 'SELECT * from threads';
    $resultat = $conn->query($sql);

  

    var_dump($resultat);

    if (!$resultat) {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    } else {

        while ($rad = $resultat->fetch_assoc()) {
        $title = $rad["title"];
        $comment = $rad["comment"];
       
    }
        $stuff = "| ";
        echo 
        '  
        <div class="content">
        <div id="threadtitle">'.$title.'</div>
        <div class="comment">'.$stuff .$comment.'</div><br>
        </div>';
    }

?>