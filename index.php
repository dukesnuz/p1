<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Fall 2017
//==============================================================
// import the p1.contoller.php script
include ('./includes/p1_controller.php');
// set page title. Wanted to demonstrate an if else statement and variable
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
    <meta name="description" content="HES - Dynamic Web Applications - Project One">
    <meta name="keywords" content="html, css, php">
    <meta name="author" content="David Petringa">

    <link rel="shortcut icon" href="http://www.dukesnuz.com/images/favicon.ico">
    <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
    <link rel = "stylesheet" href = "./css/p1.css"/>

</head>
<body>

    <header class="banner">
        <h1>David Petringa</h1>
        <h2>Dynamic Web Applications - Project One</h2>
    </header>

    <div id ="wrapper">
        <section class="content">

            <header>
                <h2>About Me</h2>
            </header>

            <div class ="picture">
                <img src="http://www.dukesnuz.com/images/harvard_id_picture_5.jpg" alt="David" width="150" height="150">
            </div>

            <div class="about">
                <!--Print the value of the $about variable-->
                <p><?php echo $about; ?></p>
            </div>

        </section>

        <section class="quotes">

            <header>
                <h2>Quotes</h2>
            </header>

            <!--call the functon to print the quotes-->
            <?php echo getQuotes($quotes); ?>

        </section>
    </div><!--END wrapper div-->

    <footer>

        <div class = "linkedinButton">
            <a href="https://www.linkedin.com/in/davidpetringa/" target="blank">Let's be friends on Linkedin</a>
        </div>

        <ul>
            <li>School: Harvard Extension</li>
            <li>Class: Dynamic Web Applications</li>
            <li>Assignment: Project one</li>
            <li>Student: David Petringa</li>
            <li>Coded: September 2017</li>
        </ul>

    </footer>

</body>
</html>
