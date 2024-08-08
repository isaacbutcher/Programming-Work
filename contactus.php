<!-- Defining the document as an HTML document-->
<!DOCTYPE html>

<html>

    <!-- "Head" contains meta information about this web page. -->
    <head>

        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        
        <!-- This link allows me to use an external document to change the CSS on different elements on this web page-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style4.css">

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
                         <!-- Start of searching via food name -->
                         <li><form method="post" action="search.php" enctype="multipart/form-data">
                        <input class="search" type="text" name="food" size="40" value="" required placeholder="Search..." />
                        <input class="submit" type="submit" name="find_food" value="Search" />
                        </form></li>


                        <!-- End of searching via food name -->
                    </ul>
                    <button><a href="contactus.php">CONTACT US</a></button>
                </div>

                <?php include ("sidenav.php") ?>

                <!-- Creating a text box for the heading text -->
                <div class="text-box">
                    <h1>CONTACT US</h1>

                    <!-- Creating the get in touch text -->
                    <h2>Get in touch!</h2>
                    <p>In case something goes wrong on the website or you want a recipe added, get in touch with me via my contact!</p>
                    <br>
                    <h3>Email:</h3>
                    <p>butcheri@papanui.school.nz</p>
                    <h3>Phone Number:</h3>
                    <p>+64 0220683175</p>
                </div>
           </div>
        
        <?php include ("footer.php") ?>
    </body>
</html>