<!doctype html>
<html lang="en">

    <!-- Basic HTML Template-->


            <head>

                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>videoTA | App Player</title>

                <link rel="stylesheet" href="styles.css">

                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
                <!-- <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-storage.js"></script> -->
                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>
                <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
                <script src="javaScript/firebase.js"></script>
                <!-- <script src="appPlayer.js"></script> -->
            </head>

<!--***********************************************************
*
*                   UNIVERSAL ELEMENTS
*
*************************************************************-->

    <body id="appPlayer">
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
          
           <h1>videoTA Video Player</h1>
           
            <div id="container">
               
          
            <div id="show">
                <video id="video" controls>
            </div>
            <input type="text" id="vidName" placeholder="Enter video name.."/>
            <button onclick="getData()">Load Player</button>
             

            </div>

            <p>Enter the name of your desired saved video, then load player and enjoy!</p>

         

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p id="alertText">Some text in the Modal..</p>
                </div>
              
             

              
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

