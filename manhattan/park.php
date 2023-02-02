<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.phps
$title = 'NYC Manhattan Parks';
$name = 'NYC Manhattan Parks';
include('../header.php');
?>
<section class="parkssection">
    <h1 class="sectionHeader">
        Parks in Manhattan, New York City
    </h1>

    <div class="rows">
        <img src="../imgs/island.jpg" alt="A bird eye view of a park">
        <div>
            <h1>Little Island</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                This park has just opened recently and it has such an amazing design to it. It is very unique to see and visit. The park is also called a Hover park since it is not on an actual island but it was man-made. Very cool to see and visit. </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/centralpark.png" alt="Trees in central park">
        <div>
            <h1>Central Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                Everyone knows about Central Park, I find this place to be the most popular in NYC due to its amazing secrets. They have a very cool art piece in the middle of the park. Also, have a small pond where you could go kayaking with your loved ones.
            </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/washington.png" alt="Center of washington park">
        <div>
            <h1>Washington Square Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                Washington Square Park is a very known place to find performers either doing a small act or, playing a lovely song in the middle. Lots of people come here to relax and enjoy looking at the clouds next to those skyscrapers. </p>
        </div>
    </div>
</section>


<?php 
include('../footer.php');
?>