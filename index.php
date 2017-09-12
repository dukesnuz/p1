<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Fall 2017
//==============================================================
// import the p1.contoller.php script
include ('./p1_controller.php');
// set page title. Wanted to demonstrate and if else statement
$title = 'Project 1 | David Petringa';
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>
        <?php
          if (isset($title)) {
            echo $title;
          } else {
            echo 'Project 1';
          }
          ?>
        </title>

        <meta charset="UTF-8">
        <meta name="description" content=" add description here">
        <meta name="keywords" content="addd keywords here">
        <meta name="author" content="David Petringa">

        <link rel="shortcut icon" href="http://www.dukesnuz.com/images/favicon.ico">

        <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
        <link rel = "stylesheet" href = "./p1.css"/>
        <script src="http://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

    </head>

    <body>

        <header class="banner">
            <h1>David Petringa</h1>
            <h2>Dynamic Web Applications - Project One</h2>
        </header>

        <div id ="wrapper">
            <section class="content">
                <h2>Who Am I</h2>
                <div class ="picture">

                    <img src="http://www.dukesnuz.com/images/harvard_id_picture_5.jpg" alt="David" width="150" height="150">
                    <!--
                    <img src="http://via.placeholder.com/150x150" alt="David" width="150" height="150">
                  -->
                </div>

                <div class="about">
                    <p>
                        about me add text here
                    </p>
                </div>

            </section>

            <section class="quotes">
                <header>
                    <h2>Quotes</h2>
                </header>
                <?php echo getQuotes($quotes); ?>
            </section>

        </div><!--end wrapper div-->

        <footer>
          <ul>
            <li>School: Harvard Extension</li>
            <li>Class: Dynamic Web Applications</li>
            <li>Assignment: Project one</li>
            <li>Student: David Petringa</li>
            <li>Coded: September 2017</li>
        </footer>

    </body>
</html>
