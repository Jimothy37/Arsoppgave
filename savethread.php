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

    //Lagrer feltene i variable     $title = $_GET["title"];
    $title = $_POST["title"];
    $comment =  $_POST["comment"];
    $sql = "INSERT INTO threads (title,comment) VALUES ('$title', '$comment')";


    if ($conn->query($sql)) {
        header('Location: newthread.php');
        
    } else {
        echo "Noe gikk galt med spørringen $sql ($conn->error).";
    }


?>