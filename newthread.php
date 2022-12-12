<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='font.css'>
    <title>new thread</title>
</head>
<body>

    <?php 
$title = $_GET["title"];
$comment =  $_GET["comment"];
$stuff = "| ";

echo 
'<div class="content">
        <div id="threadtitle">'.$title.'</div>
        <div class="comment">'.$stuff .$comment.'</div><br>
        </div>'

// include 'connection_info.php';

// if (isset($_GET["save"])) {

//     //Opprette kobling
//     $connection = new mysqli($tjener, $brukernavn, $passord, $database);

//     //Sjekk om kobling virker
//     if ($connection->connect_error) {
//         die("Noe gikk galt: " . $connection->connect_error);
//     }

//     //Angi UTF-8 som tegnsett
//     $connection->set_charset("utf8");

//     //Lagrer feltene i variable
//     $title = $_GET["title"];
//     $comment = $_GET["comment"];

//     $sql = "INSERT INTO threads (title, comment) VALUES ('$title','$comment')";

//     if ($connection->query($sql)) {
//         header("Refresh:0"); // Oppdaterer siden så de nye resultatene blir vist
//     } else {
//         echo "Noe gikk galt med spørringen $sql ($connection->error).";
//     }

    
// }








?>


    <script type="text/javascript" src="script.js"></script>
</body>
</html>