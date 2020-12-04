// Dynamic clock javaScript

timeFun();                                              // call time and date function

function timeFun() {                                            // function to display dynamic time and date
    document.getElementById("ptime").innerHTML = new Date();
    window.setTimeout("timeFun()", 1000);
}

