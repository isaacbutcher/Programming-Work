<!-- Defining the document as an HTML document-->
<!DOCTYPE html>

<html>

<?php 
        // Transfers variables between pages
        session_start();
        include("config.php");

        // Connecting to the database
        $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (mysqli_connect_errno())

            {
                echo "Connecting failed:".mysqli_connect_error();
                exit;
            }
        
    ?>

    <!-- "Head" contains meta information about this web page. -->
    <head>

        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        
        <!-- This link allows me to use an external document to change the CSS on different elements on this web page-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style3.css">
    
        <!-- Creating a title for the web page (the name that will be displayed as the browsers tab) -->
        <title>Kiwi Cuisine Website</title>
    </head>
    
    <?php
    $browse_sql="SELECT * FROM `recipes` ORDER BY `recipes`.`Food Name` ASC";
    $browse_query=mysqli_query( $dbconnect, $browse_sql );

    // Organising the information
    $browse_rs=mysqli_fetch_assoc( $browse_query );

    // Counting the number of results
    $count=mysqli_num_rows( $browse_query );
    ?>

    
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
                    <h1 style="font-family: verdana">KIWI CUISINE - FOOD AND HISTORY</h1>

                </div>

                <!-- Creating another text box to describe what the website is about and how significant it is-->
                <div class="text-box2">
                    <p>This website is all about Kiwi cuisines, how to make them, and the history behind them! It's an all informative website that should give foriegners
                        insight into the Kiwi culture, what type of cusine we eat, and the cultural significance of this.
            
                        <!-- Adding a horizontal line to split both parts of this paragraph text. It will still be apart of the same paragraph just with a line inbetween -->
                        <br>
                        This website will contain a browse, suggest, and content page for each of the recipes. Each recipe will be sorted depending on which season it is
                        made in. For example, for winter a recipe will be lamb roast, for summer the recipe will be pavalova, for spring the recipe will be whitebait
                        fritters, and for autumn the recipe will be pies.
                        
                </div>
                <br> <hr>
                <br>
                <article>
                <h2 style="font-family: Verdana"> RECIPE SHOWCASE </h2>
                    <li>
                    <img src="images/whitebaitfritters.jpg" class="whitebaitfritters">
                    <h3> Whitebait Fritters </h3>
                    <p>Best made in the SPRING</p>
                    <p>Cook time of 10 minutes</p>
                    <p>Very easy recipe! Rated 2 stars</p> </li>

                    <li>
                    <img src="images/lambroast.jpg" class="lambroast">
                    <h3>Lamb Roast</h3>
                    <p>Best made in WINTER</p>
                    <p>Cook time of 1 hour and 30 minutes</p>
                    <p> Medium recipe, 3 stars</p>
                    </li>

                    <li>
                    <img src="images/minceandcheese.jpg" class="minceandcheese">
                    <h3>Pies</h3>
                    <p>Best made in AUTUMN</p>
                    <p>Cook time of 1 hour and 10 minutes</p>
                    <p> Difficult recipe, 4 stars!</p>
                    </li>

                    <li>
                    <img src="images/kumarawedges.jpg" class="kumara">
                    <h3>Kumara Wedges</h3>
                    <p>Best made in SPRING</p>
                    <p>Cook time of 35 minutess</p>
                    <p> Easy recipe, 2 stars!</p>
                    </li>

                    <li>
                    <img src="images/pumpkinsoup.jpg" class="pumpkin">
                    <h3>Pumpkin Soup</h3>
                    <p>Best made in AUTMUN</p>
                    <p>Cook time of 45 minutes</p>
                    <p> Medium recipe, 3 stars</p>
                    </li>
                </article>

           </div>

        <?php include ("footer.php") ?>
    </body>
</html>