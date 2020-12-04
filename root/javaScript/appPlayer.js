// App Player JavaScript

let allAlerts = [];




function videoURL(){

    let name = document.getElementById("vidName").value;
  let url = document.getElementById("path").value;
  document.getElementById("show").innerHTML = '<video id="video" src="'+url+'" playsinline muted controls width="300"> </video>';

  startVideo = document.getElementById("video");
  startVideo.load();


localStorage.setItem("videoName", JSON.stringify(name));
localStorage.setItem("videoPath", JSON.stringify(url));
let clearField = document.getElementById("path");
clearField.value = "";
}



function setAlert(){

video.pause();
let alerts = {message:"", timeStamp:""};
alerts.message = prompt("What do you want to alert the viewer?");
alerts.timeStamp = prompt("Enter time lapse before pause (in seconds)");
allAlerts.push(alerts);
localStorage.setItem("message", JSON.stringify(allAlerts));

}

function clearData() {
    localStorage.clear();
    allAlerts = [];
}




