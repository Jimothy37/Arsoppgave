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

?>


    <script type="text/javascript" src="script.js"></script>
</body>
</html>