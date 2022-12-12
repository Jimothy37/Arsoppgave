<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='font.css'>
    <title>/a/ - TEST</title>
</head>
<body>
    <div class="list"> 

        Actual pages:  
        <a href = "index.html">Index</a>
        [
        <a href = "a.html"> A </a>
        /
        <a href = "b.html">B</a>
        /
        <a href = "c.html">C</a>
        ]

        Php version:  

        [
            <a href = "a.php">A</a>
        ]

        Test pages:

        [
            <a href = "r.php">Landing?</a> 

            /

            <a href = "newthread.php">New thread testing</a> 

            /

            <a href = "example.html"  target="_blank">Example page</a> 

        ]
    </div>
    <hr>
    <div class="content">
        <div class="boardname">/a/ - A</div>
        <div id="newthread" onclick="newThread()" >Start a new thread</div>
        <div id="aligncenter">
            <div style = "display: none;"id="thingy">
                <form id = "form"  action="newthread.php" method = "get" target="_blank"> 
                    <div id="text">Title</div>
                    <input type = "text"  autocomplete="off  id = "title" name = "title" placeholder="Title">
                    <div id="text">Comment</div> 
                    <textarea  autocomplete="off style = "height: 135px"  id = "comment" name = "comment"></textarea>
                    <div class="minicontainer">
                        <input id = "postButton"  onclick="testPHP()"  class = "button" name ="submit" type="submit" value="Post"> 
                    </div>
                </form>   
            </div>
        </div>
        <hr>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>