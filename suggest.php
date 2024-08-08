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
                    <h1>SUGGEST</h1>

                </div>

                <!-- Creating a survey for the website -->
                <div class="container">
                    <div class="bodypanel">
                        <form action="connect.php" method="post">
                            <div class="formgroup">
                                <label for="foodname">What's the name of the food?</label>
                                <br>
                                <input type="text" class="formcontrol" id="foodname" name="foodname">
                                
                            </div>

                            <!-- Creating individual divs for each question -->
                            <div class="formgroup">
                                <label for="ingredients">What ingredients are required to make it?</label>
                                <br>
                                <input type="text" class="formcontrol" id="ingredients" name="ingredients">
                                
                            </div>
                            <div class="formgroup">
                                <label for="step-by-step">Step-by-step instructions</label>
                                <br>
                                <input type="text" class="formcontrol" id="step-by-step" name="stepbystep">
                                
                            </div>
                            <div class="formgroup">
                                <label for="season">What season should this food be made in?</label>
                                <br>
                                <input type="text" class="formcontrol" id="season" name="season">
                                
                            </div>
                            <div class="formgroup">
                                <label for="time">How long does this food take to make?</label>
                                <br>
                                <input type="text" class="formcontrol" id="time" name="time">
                                
                            </div>
                            <div class="formgroup">
                                <label for="difficulty">On a scale of 1-5, (5 being the hardest) how difficult is this food to make?</label>
                                <br>
                                <input type="text" class="formcontrol" id="difficulty" name="difficulty">
                                
                            </div>
                            <input type="submit" class="buttonprimary">
                        </form>
                    </div>
                </div>
           </div>

        <?php include ("footer.php") ?>
    </body>
</html>