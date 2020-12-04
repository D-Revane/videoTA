// Firebase JavaScript

var firebaseConfig = {
    apiKey: "AIzaSyCEHMZdYzFHXS6mQlBF9HPPWhkq3ZOEuzE",
    authDomain: "web-104-application-bc953.firebaseapp.com",
    databaseURL: "https://web-104-application-bc953.firebaseio.com",
    projectId: "web-104-application-bc953",
    storageBucket: "web-104-application-bc953.appspot.com",
    messagingSenderId: "189506783558",
    appId: "1:189506783558:web:eb3c151bad386c96ecfd47"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();

 

  firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION)
  .then(function() {
   
    return firebase.auth().signInWithEmailAndPassword(email, password);

  })
  .catch(function(error) {
    var errorCode = error.code;
    var errorMessage = error.message;
  });



  function storeData(){

    let name = JSON.parse(localStorage.getItem("videoName"));
    let storeAlerts = {
        vid:"",
        msgs:""
    };
    
        storeAlerts.vid = JSON.parse(localStorage.getItem("videoPath"));
        storeAlerts.msgs = JSON.parse(localStorage.getItem("message"));

    db.collection("videos").doc(name).set(storeAlerts)

    .then(function(){
        console.log("Success!")
    })

    .catch(function(){
        console.error("Error writing document", error);
    });
    
  }


  function getData() {

    var name = document.getElementById("vidName").value;
    var vidRef =  db.collection("videos").doc(name).get();

    vidRef.then(function(doc) {

        if (doc.exists) {
           
            var vidPath = doc.data().vid;
            // var vidmsgs = doc.data().msgs;
            document.getElementById("show").innerHTML = '<video id="video" src="'+ vidPath+'" playsinline controls width="300"> </video>';
            startVideo = document.getElementById("video");
            video.addEventListener("timeupdate", tick);

            localStorage.setItem("loadedVideo", JSON.stringify(name));
        
        } else {
           
            console.log("No such document!");
        }
    }).catch(function(error) {
        console.log("Error getting document:", error);
    });

  }

  


  async function user(){
 email = document.getElementById("email").value;
 password = document.getElementById("password").value;
firebase.auth().createUserWithEmailAndPassword(email, password)
.then(console.log("successfully created new user"))
.then(alert("Welcome to your new account"))
.then(function(){
    setTimeout(signIn(), 1000);
})
.catch(function(error) {
 
alert("Failed to add user");
  
});
}


async function signIn() {
let email = document.getElementById("email").value;
let password = document.getElementById("password").value;
let promise = firebase.auth().signInWithEmailAndPassword(email, password)
.then(function(){
    setTimeout(verify(), 1000);
})
.catch(function(error) {
 
  alert("Sorry!  Try again!");

});

}

function verify() {
    var user = firebase.auth().currentUser;
if (user) {

    window.location.href = "appPlayer.php";
  // User is signed in.
} else {
    alert("Please sign in first");
  // No user is signed in.
}
}


function signout() {
    var user = firebase.auth().currentUser;

    if(user) {
    
    let promise = firebase.auth().signOut().then(function(){
//         alert("Sign out successful");
//         window.location.href = "index.php"
    })
    .catch(function(error) {
        alert("Oops")
    });
}
else {alert("No current user")}
}


function tick(){
 
  
    var name = document.getElementById("vidName").value
    alertsRef = db.collection("videos").doc(name).get();
    alertsRef.then(function(doc) {
        if (doc.exists) {

            
            var vidmsgs = doc.data().msgs;

            vidmsgs.forEach(myFunction);
           
            function myFunction(index){

                let t = startVideo.currentTime;

                x = Math.floor(t);
            
                    if(x == index.timeStamp) {
                    video.pause();
                    video.removeEventListener("timeupdate", tick);
                   
                    var modal = document.getElementById("myModal");
                    var alertText = document.getElementById("alertText");
                    var span = document.getElementsByClassName("close")[0];

                    modal.style.display = "block";
                  alertText.innerText = index.message;
                    // alert(index.message);
                
                    index.timeStamp = 0;

                    video.addEventListener("play", reset);
                    span.onclick = function() {
                          modal.style.display = "none";
                          video.play();
                        }
                    timetracker = startVideo.currentTime;
                   
                   
                    }
                   
               } 
               
        } 
        else {
         
            console.log("No such document!");
        }
    }).catch(function(error) {
        console.log("Error getting document:", error);
    });
}
    
 

 function reset(){
     video.addEventListener("timeupdate", check);
     console.log("reset function");
     function check(){
     if (startVideo.currentTime >= timetracker + 1) {
     video.addEventListener("timeupdate", tick);
     console.log("check finished");
 
        }
    }
}





