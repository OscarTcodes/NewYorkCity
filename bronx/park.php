<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'NYC Bronx Parks';
$name = 'NYC Bronx Parks';
include('../header.php');
?>


<section class="parkssection">
    <h1 class="sectionHeader">
        Parks in Bronx, New York City
    </h1>

    <div class="rows">
        <img src="../imgs/bronxpark.jpg" alt="Flushing park with a globe in the middle">
        <div>
            <h1>Bronx Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In the Bronx park you could find more than the park, near by you could find the Zoo inside the park. Where in the zoo you could find different animals that you would never find anywhere else.
            </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/marypark.jpg" alt="Flushing park with a globe in the middle">
        <div>
            <h1>St. Mary's Park </h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In St. Mary's park, you have a large stadium where they would have outside proforms come out and perform. They would also have small bands come in and play songs for everyone there. </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/celem.jpg" alt="Flushing park with a globe in the middle">
        <div>
            <h1>Claremont Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In Claremont Park, there is a place for you to have a nice picnic with either your loved ones or just with friends. A place to just sit down has taken in the nature around you. </p>
        </div>
    </div>
</section>
<?php 
include('../footer.php');
?>