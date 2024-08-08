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
        <link rel="stylesheet" href="style4.css">
    
        <!-- Creating a title for the web page (the name that will be displayed as the browsers tab) -->
        <title>Kiwi Cuisine Website</title>
    </head>
    
    <?php

    // If find button is pushed
    if (isset($_POST['find_food']) )
    {

    ?>
    
    <?php

    $food = $_POST['food'];

    $browse_sql="SELECT * FROM `recipes` WHERE `Food Name` LIKE '%$food%'";
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
                    <h1>SEARCH</h1>
                <?php
                // Checking for results
                if ($count<1)
                {
                    ?>
                    <div class="error">
                        Oops! Seems like we couldn't find what you were looking for. Please use the search bar to try again.
                    </div>

                    <?php
                }
                // If there are no results, provide an error
                else {

                    do {
                        ?>

                        <!-- Database output will go here -->
                        <div class="results">
                            <p>Food Name: <span class="sub_heading"><?php echo $browse_rs['Food Name'];?></span></p>
                            <p>Ingredients: <span class="sub_heading"><?php echo $browse_rs['Ingredients'];?></span></p>
                            <p>Step-by-step: <span class="sub_heading"><?php echo $browse_rs['Step-by-step'];?></span></p>
                            <p>Season: <span class="sub_heading"><?php echo $browse_rs['Season']?></span></p>
                            <p>Time: <span class="sub_heading"><?php echo $browse_rs['Time']?></span></p>
                            <p>Difficulty: <span class="sub_heading">
                                
                            <?php
                            for ($x=0; $x < $browse_rs['Difficulty']; $x++)
                            {
                                echo "&#9733;";
                            }
                            ?>
                        
                        </span></p>
                        </div>

                        <br>

                        <?php
                    }

                    while ($browse_rs=mysqli_fetch_assoc($browse_query ));
                }
                // If there are results, show them

            }
                ?>
    
                </div>
           </div>
        
    </body>
</html>