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
                        <li><a href="#">SEARCH</a></li>
                    </ul>
                    <button><a href="contactus.php">CONTACT US</a></button>
                </div>

                <?php include ("sidenav.php") ?>

                <!-- Creating a text box for the heading text -->
                <div class="text-box">
                    <h1>KIWI CUISINE - FOOD AND HISTORY</h1>

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
           </div>

        <?php include ("footer.php") ?>
    </body>
</html>