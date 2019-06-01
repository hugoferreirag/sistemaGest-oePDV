// Just to simulates loading delay.
var i = setInterval(function() {
    

    // The desired code is only this:
    document.getElementById("loading").style.display = "none";
    document.getElementById("content").style.display = "block";
   
}, 2000);

