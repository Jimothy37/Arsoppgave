console.log("Hello World");

flag = true;

function newThread(){
    var x = document.getElementById("thingy");
    if (flag && x.style.display == "none"){
        x.style.display = "block";
        document.getElementById("newthread").innerHTML = "Close";
        flag = false;
    }
    else {
        x.style.display = "none";
        document.getElementById("newthread").innerHTML = "Start a new thread";
        flag = true;
    }
}



function testPHP(){
    console.log("It works");
}