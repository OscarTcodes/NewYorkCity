<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/~ogt7517/240/finalinv/style.css">
    <script src="/~ogt7517/240/finalinv/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <!-- Since the title of the page changes between pages I made it into an echo to relate to each page -->
    <title><?php echo $title; ?></title>
</head>

<body onload="init()">
    <nav>
        <div class="navContainer">
            <!-- Img for the background with the nav -->
            <div id="imgheader">
                <img src="/~ogt7517/240/finalinv/imgs/commentsbackground.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/queensparkhomeimg.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/homenyc.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/gradingimg.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/homenyc.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/queensparkhomeimg.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/grandcetral.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/newyork.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/brooklynstart.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/brooklynmesintro.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/zoo.jpg" alt="Image of TimeSquare" class="indexImg">
                <img src="/~ogt7517/240/finalinv/imgs/bronximg.jpg" alt="Image of TimeSquare" class="indexImg">
            </div>
            <!-- This is the start of the navbar  -->
            <div class="topCentered">
                <a href="/~ogt7517/240/finalinv/index.php">Home</a>
                <a href="/~ogt7517/240/finalinv/comments.php">Comments</a>
                <!-- This is the dropdown for the nav bar that displays each boroughs section -->
                <div class="dropdown">
                    <button href="/~ogt7517/240/finalinv/queens/queensMuesums.php">Queens</button>
                    <div class="dropdown-content">
                        <a href="/~ogt7517/240/finalinv/queens/queensParks.php">Parks</a>
                        <a href="/~ogt7517/240/finalinv/queens/muesums.php">Muesums</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button href="/~ogt7517/240/finalinv/brooklyn/muesums.php">Brooklyn</button>
                    <div class="dropdown-content">
                        <a href="/~ogt7517/240/finalinv/brooklyn/park.php">Parks</a>
                        <a href="/~ogt7517/240/finalinv/brooklyn/muesum.php">Muesums</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button href="/~ogt7517/240/finalinv/bronx/muesums.php">Bronx</button>
                    <div class="dropdown-content">
                        <a href="/~ogt7517/240/finalinv/bronx/park.php">Parks</a>
                        <a href="/~ogt7517/240/finalinv/bronx/muesum.php">Muesums</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button href="/~ogt7517/240/finalinv/manhattan/muesums.php">Manhattan</button>
                    <div class="dropdown-content">
                        <a href="/~ogt7517/240/finalinv/manhattan/park.php">Parks</a>
                        <a href="/~ogt7517/240/finalinv/manhattan/muesum.php">Muesums</a>
                    </div>
                </div>
<!-- End of nav -->
            </div>
            <!-- name for the title with an php where it takes in the variable with its page title  -->
            <h1 class="titleofPage">
                <?php echo $name; ?>
            </h1>
        </div>
        <div id="test"></div>
    </nav>