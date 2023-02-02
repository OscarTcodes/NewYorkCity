<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'NYC Brooklyn Parks';
$name = 'NYC Brooklyn Parks';
include('../header.php');
?>
<section class="parkssection">
    <h1 class="sectionHeader">
        Parks in Brooklyn, New York City
    </h1>

    <div class="rows">
        <img src="../imgs/sunset.jpg" alt="park with open view">
        <div>
            <h1>Sunset Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                Sunset Park, like in the name of the park, has one of the most amazing place to take nice pictures or even to relax and watch the sunset with friends. You could even see parts of Manhattan from this park, just amazing. </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/owl.jpg" alt="img ontop of a hill">
        <div>
            <h1>Owl's Head Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In Owl's Head park you could enjoy your time in the park or even better by the water. This location is very cool to just chill and read a book but also to just have a nice walk with nothing to bother you.
            </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/prospectpark.jpg" alt="a balcony">
        <div>
            <h1>Prospect Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In Prospect Park Park there is a lot of stuff to do from going ice-skating in the winter to skateboarding in the summer. In the winter there are lots of space to have large snowball fights with friends. </p>
        </div>
    </div>
</section>



<?php 
include('../footer.php');
?>