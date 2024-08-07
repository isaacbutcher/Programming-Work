<!-- Defining the document as an HTML document-->
<!DOCTYPE html>

<html>

    <!-- "Head" contains meta information about this web page. -->
    <head>

        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        
        <!-- This link allows me to use an external document to change the CSS on different elements on this web page-->
        <link rel="stylesheet" href="style.css">

        <!-- Creating a title for the web page (the name that will be displayed as the browsers tab) -->
        <title>Kiwi Cuisine Website</title>
    </head>

    
    <body style="background-color:#000942">
            <!-- Creating a div for the header-->
            <div class="header">
                <div class="top-nav">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="browse.php">BROWSE</a></li>
                        <li><a href="suggest.php">SUGGEST</a></li>
                        <li><a href="">SEARCH</a></li>
                    </ul>
                    <button><a href="contactus.php">CONTACT US</a></button>
                </div>

                <?php include ("sidenav.php") ?>

                <!-- Creating a text box for the heading text -->
                <div class="text-box">
                    <h1>SUGGEST</h1>

                </div>
           </div>

        <?php include ("footer.php") ?>
    </body>
</html>