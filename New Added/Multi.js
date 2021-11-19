var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var form3 = document.getElementById("form3");
var form4 = document.getElementById("form4");

var next1 = document.getElementById("next1");
var prev1 = document.getElementById("prev1");
var next2 = document.getElementById("next2");
var prev2 = document.getElementById("prev2");
var next3 = document.getElementById("next3");
var prev3 = document.getElementById("prev3");

var progress = document.getElementById("progress");

next1.onclick = function(){
    form1.style.left = "-450px";
    form2.style.left = "40px";
    progress.style.width="185px";
}
prev1.onclick = function(){
    form1.style.left = "40px";
    form2.style.left = "450px";
    progress.style.width="95px";
}
next2.onclick = function(){
    form2.style.left = "-450px";
    form3.style.left = "40px";
    progress.style.width="275px";
}
prev2.onclick = function(){
    form2.style.left = "40px";
    form3.style.left = "450px";
    progress.style.width="185px";
}
next3.onclick = function(){
    form3.style.left = "-450px";
    form4.style.left = "40px";
    progress.style.width="380px";
}
prev3.onclick = function(){
    form3.style.left = "40px";
    form4.style.left = "450px";
    progress.style.width="275px";
}

