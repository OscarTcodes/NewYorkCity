<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'New York City';
$img = 'homenyc.jpg';
$name = 'New York City';
include('header.php');

?>
    <section>
        <h1 class="sectionHeader">
            Preview on Each Boroughs
        </h1>
        <!-- Preview of Queens -->
        <div class="container">
            <div class="boxes">
                <img src="/~ogt7517/240/finalinv/imgs/queenstrain.jpg" alt="Image of Queens" width="750" height="450">
            </div>
            <div class="boxes">
                <h1 class="sectionHeader">
                    Queens
                </h1>
                <p>
                    I've grown up in Queens and I believe it's the number one borough in NYC just because it is very diverse in culture. In Queens, you could find everything from amazing artwork to beautiful parks. Click below to find out more. </p>
                <div class="proj-boxes">
                    <ul class="grading">
                        <li><a href="/~ogt7517/240/finalinv/queens/muesums.php">Queens Muesums</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Preview section for Brooklyn -->
        <div class="container">
            <div class="boxes">
                <h1 class="sectionHeader">
                    Brooklyn
                </h1>
                <p>
                    Brooklyn is right below Queens, Brooklyn has a variety of places you can check, have you heard of a Museum of Pizza? Well, Brooklyn has one and it is fascinating. To check out more amazing stuff about Brooklyn click below to find out more. </p>
                <div class="proj-boxes">
                    <ul class="grading">
                        <li><a href="/~ogt7517/240/finalinv/brooklyn/muesum.php">Brooklyn Muesums</a></li>
                    </ul>
                </div>
            </div>
            <div class="boxes">
                <img src="/~ogt7517/240/finalinv/imgs/brooklynbridge.jpg" alt="Image of Brooklyn" width="750" height="450">
            </div>
        </div>
        <!-- Preview of the Manhattan -->
        <div class="container">
            <div class="boxes">
                <img src="/~ogt7517/240/finalinv/imgs/manhattancity.jpg" alt="Image of Manhattan" width="750" height="450">
            </div>
            <div class="boxes">
                <h1 class="sectionHeader">
                    Manhattan
                </h1>
                <p>
                    Manhattan is where everyone would love to live if it wasn't so expensive. They have amazing views of skyscrapers and have the most well-known museum. To find out more about Manhattan museums do click below to find out more. </p>
                <div class="proj-boxes">
                    <ul class="grading">
                        <li><a href="/~ogt7517/240/finalinv/manhattan/muesum.php">Manhattan Muesums</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Preview section for Bronx -->
        <div class="container">
            <div class="boxes">
                <h1 class="sectionHeader">
                    Bronx
                </h1>
                <p>
                    The Bronx has very unique places to visit such as the Bronx zoo, Yankees Stadium, a Botanical Garden, and more. To find out more about the Bronx do click below to find out more about the Bronx </p>
                <div class="proj-boxes">
                    <ul class="grading">
                        <li><a href="/~ogt7517/240/finalinv/bronx/muesum.php">Bronx Muesums</a></li>
                    </ul>
                </div>
            </div>
            <div class="boxes">
                <img src="/~ogt7517/240/finalinv/imgs/bronxcity.jpg" alt="Image of Bronx" width="750" height="450">
            </div>
        </div>


        <!-- Link to refernce and Grade sheet -->
        <section id="proj">
            <div class="proj-boxes">
                <h2>Reference</h2>
                <ul class="grading">
                    <li><a href="/~ogt7517/240/finalinv/references.php">Reference</a></li>
                </ul>
            </div>
            <div class="proj-boxes">
                <h2>Grading</h2>
                <ul class="grading">
                    <li><a href="/~ogt7517/240/finalinv/grading.php">Grading</a></li>
                </ul>
            </div>
        </section>

<?php 
include('footer.php');
?>
