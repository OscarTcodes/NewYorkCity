<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'NYC Bronx Museums';
$name = 'NYC Bronx Museums';
include('../header.php');
?>

<section>
    <div class="grid-container">
        <div class="item1">
            <h1>
                Museums In The Bronx, New York City
            </h1>
        </div>
        <div class="item2">
            <h2>New York Botanical Garden</h2>
            <p>
                When visiting the Botanical Garden you would find yourself just amazed at how relaxing it is to just look at different plants and get the chance to see plants that wouldn't be able to see here in the united states. The building of the Museum is just amazing,
                it feels like you're walking in a mansion in LA.
            </p>
        </div>
        <div class="item3">
            <h2>The Van Cortlandt House Museum</h2>
            <p>
                In the Van Cortlandt House Museum, you will find items that you didn't know exist or items that just was popular in the old days. While looking at items you would also learn a bit about eh Cortlandt Family and why they built a museum for them. While you
                visit the first thing you will be amazed at would be the area and the amazement of the house.
            </p>
        </div>
        <div class="item4">
            <img src="../imgs/hallofsciencequeens.jpg" alt="A huge manison" width="750" height="450">
        </div>

        <div class="item5">
            <img src="../imgs/movingimage.jpg" alt="inside the museum" width="750" height="450">
        </div>
        <div class="item6">
            <p>
                I loved going to the Botanical Garden just because I like to see the different types of plants that everyone just doesn't notice anymore. Also, it's just a nice place to breathe fresh air, especially in new york city. The Van Cortlandt House Museum was
                pretty cool too, you get a chance to see history. Items older than most of us honestly.
            </p>
        </div>
    </div>
</section>


<?php 
include('../footer.php');
?>