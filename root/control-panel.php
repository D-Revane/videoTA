<!doctype html>
<html lang="en">

    <!-- Basic HTML Template-->


            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>videoTA | Control Panel</title>

                <link rel="stylesheet" href="styles.css">

                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
                <!-- <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-storage.js"></script> -->
                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>
                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
                <script src="javaScript/firebase.js"></script>
                <script src="javaScript/appPlayer.js"></script>
            </head>

<!--***********************************************************
*
*                   UNIVERSAL ELEMENTS
*
*************************************************************-->

    <body>

        <div id="wrapper">
                <!-- End Universal Elements -->    

<!--**********************************************************
*
*                       HEADER
*
***********************************************************-->

<header>
            
   
    <?php include "php-includes/header.php" ;?>

</header>

    <!-- End Header-->

<!--************************************************************
*
*                      MAIN
*
*************************************************************-->

<main>


<h1>videoTA Control Panel</h1>

<div id="container">

    <div id="inputs">
<input type="text" id="vidName" placeholder="Enter video name.."/>
<input type="text" id="path" placeholder="Enter video path.."/>
    </div>

<button  onclick="videoURL()">Load Video</button><br>

<div id="show">
    <video id="video" controls>
</div>
    
    <button onclick="storeData()">Save Settings</button><br>
    <button onclick="setAlert()">Add Alert</button>
    <button onclick="clearData()">Reset</button>

</div>

<h2>Using the control panel</h2>

    <ul id="instructions">
        <li><label>Step 1</label><br>
            <p>Enter a name, and the URL for the desired video then press &quot;Load Video&quot;.</p>
                <p><span>Seperate server/network access required at this time. Cloud storage functionality coming soon</span></p>
        </li>

        <li><label>Step 2</label><br>
            <p>You can now watch through the video on the control panels video player. Press the &quot;Add Alert&quot; button each time you'd like to add an alert.
                The video will pause, and the desired message(s) and timestamp can be added to the prompts.</p>
        </li>

        <li><label>Step 3</label><br>
            <p>You may verify your messages and timestamps by simply starting the video from it's beginning in the control panels video player.</p>
        </li>

        <li><label>Step 4</label><br>
            <p>To add your video URL and settings to the database, simply press the &quot;Save Settings&quot; button to add to <span>Firebase</span> storage.</p>
        </li>
    </ul>
        </main>

            <!-- End Main Content -->

<!--**************************************************************
*
*                   FOOTER
*
****************************************************************-->

            <footer>
         
                <?php include "php-includes/footer.php" ;?>
            </footer> 

            <!-- End Footer -->

        </div>
      
    </body>

</html>

