 
<?php 
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'NYC Brooklyn Museums';
$name = 'NYC Brooklyn Museums';
include('../header.php');
?>
    <section>
        <div class="grid-container">
            <div class="item1">
                <h1>
                    Museums In Brooklyn, New York City
                </h1>
            </div>
            <div class="item2">
                <h2>New York Transit Museum </h2>
                <p>
                    In the New York Transit Museum, you would find old trains that have been running in the NYC metro to the most modern trains. You will also see old images of trains being built and the process it took for them to have them built. But it does not just train
                    it all of metros vehicles, you will be able to see old versions of buses in there too.
                </p>
            </div>
            <div class="item3">
                <h2>Brooklyn Museum </h2>
                <p>
                    In the Brooklyn Museum, you will find great art pieces from centuries ago. You will also find more than just painting but also sculptures. Some exciting exhibits that are now showing are Andy Warhol: Revelation, and Monet to Morisot: The Real and Imagined
                    in European Art. Having a chance to see authentic art pieces in person is a blessing.
                </p>
            </div>
            <div class="item4">
                <img src="../imgs/transit.jpg" alt="image of the outside building" width="750" height="450">
            </div>

            <div class="item5">
                <img src="/~ogt7517/240/finalinv/imgs/brooklynmes.jpg" alt="image of a kid on looking inside a train" width="750" height="450">
            </div>
            <div class="item6">
                <p>
                    I've been to the Transit Museum and it was pretty interesting how the development of trains went over the last couple of years. For the Brooklyn Museum, I've seen some cool art pieces but I haven't been there in a long time. </p>
            </div>
        </div>
    </section>

    <?php 
include('../footer.php');
?>