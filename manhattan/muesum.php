<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'NYC Manhattan Museums';
$name = 'NYC Manhattan Museums';
include('../header.php');
?>
<section>
    <div class="grid-container">
        <div class="item1">
            <h1>
                Museums In Manhattan, New York City
            </h1>
        </div>
        <div class="item2">
            <h2>Rose Center for Earth and Space</h2>
            <p>
                In the Rose Center for Earth and Space museum you would find a HUGE globe in the middle, in that globe you would be able to find yourself in a 180 degree theater where you could watch the making of our solar system. But outside there you would see lots
                of information and figures about space and our solar system. You would be able to see how much you would way on the money to seeing how stars are born.
            </p>
        </div>
        <div class="item3">
            <h2>Museum of Modern Art</h2>
            <p>
                In the MOMA you would find Modern art from artist like some of Banksy art piece to even mordern artist showing off their own piece. You would see art pieces that are just amazing to see what people can do. I know for sure most of the people who goes to
                the MOMA comes out wanting to have skills of these artists.
            </p>
        </div>
        <div class="item4">
            <img src="../imgs/space.jpg" alt="Muesums of Science insides" width="750" height="450">
        </div>

        <div class="item5">
            <img src="../imgs/moma.jpg" alt="image of outside of MOMA" width="750" height="450">
        </div>
        <div class="item6">
            <p>
                I've enjoyed going to both museums, they both have something unique to both of them. Where in the MOMA you would find pieces of art that are just out of this world. For the Science Museum, you would find such amazing information about space. </p>
        </div>
    </div>
</section>


<?php 
include('../footer.php');
?>