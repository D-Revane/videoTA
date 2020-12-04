<!doctype html>
<html lang="en">

    <!-- Basic HTML Template-->


            <head>

                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>videoTA | Sign In</title>

                <link rel="stylesheet" href="styles.css">

                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>
                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
                <script src="javaScript/firebase.js"></script>
               
            </head>

<!--***********************************************************
*
*                   UNIVERSAL ELEMENTS
*
*************************************************************-->

    <body id="signIn">
<div id="wrapper">
                <!-- End Universal Elements -->    

<!--**********************************************************
*
*                       HEADER
*
***********************************************************-->

            <header>
            
                <h1>videoTA <span>Interactive Video Player</span></h1>

               

            </header>

                <!-- End Header-->

<!--************************************************************
*
*                      MAIN
*
*************************************************************-->

        <main>

            <div id="container">

                <div id="inputs">

                <input id="email" type="text" placeholder="Enter email address..">
                <input id="password" type="text" placeholder="Enter password..">

                </div>

                <button  onclick="signIn()">Log In</button>
                <button onclick="user()">Sign Up</button>

            </div>

            <h1>The Video Teaching Assistant (<span>videoTA</span>)</h1>

                <p>The videoTA app allows you to add a level of interaction to previously recorded video footage.</p>
                  <p>  Use the control panel to add the URL to your desired video, then add interactions and timestamps, and save to our database.</p>
                    <p>Access saved presentations through our video player, for as long as the supplied URL is active.</p>
                    <p><span>Cloud storage functionality coming soon..</span></p>

                




          

        </main>

            <!-- End Main Content -->

<!--**************************************************************
*
*                   FOOTER
*
****************************************************************-->

            <footer>
<!--                <?php include "php-includes/footer" ;?> -->
            </footer>

            <!-- End Footer -->

        </div>
    </body>
</html>

