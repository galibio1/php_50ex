<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta name="title" content="nipro">
    <meta name="description" content="Site Description">
    <meta name="keywords" content="blog">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content=" days">
    <meta name="author" content="Asadullah Galib">
    <title>nipro</title>

    <link rel="icon" type="image/x-icon" href="images/Twiter.png">
    <!--Font links-->
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <!--css links-->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <!--font awsome icon link-->
    <script src="https://kit.fontawesome.com/093ddd359a.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="starter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first">
                        <h1 class="headings">Here starting the examples for PHP learning</h1>
                        <p>php intro <?php 
                        $txt = "PHP";
                        echo "I love $txt!<br>"; ?></p>
                    </div>
                    
                    <?php
                    $txt = "PHP";
                    echo "I love $txt!<br>";
                    echo "<p>Our PHP version is</p>";
                    echo phpversion();
                    $x = 5;
                    $y = 4;
                    echo "Total is $x + $y <br>";
                    var_dump(5);
                    var_dump("John");
                    var_dump(3.14);
                    var_dump(true);
                    var_dump([2, 3, 56]);
                    var_dump(NULL);
                    ?>

                    <?php
                    $x = 5;
                    $y = 10;

                    function myTest() {
                    global $x, $y;
                    $y = $x + $y;
                    } 
                    echo "<br>";
                    myTest();  // run function
                    echo $y; // output the new value for variable $y
                    ?>
                    <div class="second">
                        <p>this is strlen function do: echo strlen("Hello world!") the result: <?php
                        echo strlen("Hello world!");
                        ?> </p><br>
                        <?php
                        echo str_word_count("Hello world!");
                        ?> 

                        <br>
                        <?php
                        echo strpos("I have a plan to do somehting different!", "to");
                        $x = "Hello World!";
                        $y = "Hello World!";
                        echo strtoupper($x);
                        echo strtolower($y);
                        echo str_replace("World", "Dolly", $x);
                        echo strrev($x);
                        echo "<br>";
                        ?> 
                        <?php
                        $x = "Hello";
                        $y = "World";
                        $z = $x . " " . $y;
                        echo $z;
                        echo "<br";
                        $m = "Hello";
                        $n = "Manm";
                        $o = "$m $n";
                        echo $o;
                        echo "Today is " . date("Y/m/d") . "<br>";
                        echo "Today is " . date("Y.m.d") . "<br>";
                        echo "Today is " . date("Y-m-d") . "<br>";
                        echo "Today is " . date("l");
                        echo "<br";
                        
                        ?>
                        
                        
                    </div>
                    © 2010-<?php echo date("Y");
                    echo "The time is " . date("H:i:sa");
                    date_default_timezone_set("America/New_York");
                    echo "The time is " . date("h:i:sa");
                    ?>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>