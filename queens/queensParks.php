<!-- I've created the php part that includes a  -->
<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = 'NYC Queens Park';
$name = 'NYC Queens Park';
include('../header.php');
?>
<!-- This part is for the Queens section of parks heading -->
<section class="parkssection">
    <h1 class="sectionHeader">
        Parks in Queens, New York City
    </h1>
<!-- Making a row containor with an image 3 times -->
    <div class="rows">
        <img src="../imgs/flushing.jpg" alt="Flushing park with a globe in the middle">
        <div>
            <h1>Flushing Meadows Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">I've been going to Flushing Meadows park since I was born. The Park is huge and has everything you want in a park. Throughout the area, there are many places to sit and relax, or even better start barbequing.</p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/astoriapark.jpg" alt="Flushing park with a globe in the middle">
        <div>
            <h1>Astoria Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In Astoria Park, they have amazing views of the river and a great place to take pictures with amazing lighting. In the summers you would always see an annual carnival happening with crazy rides. </p>
        </div>
    </div>
    <div class="rows">
        <img src="../imgs/brookvile.jpg" alt="Flushing park with a globe in the middle">
        <div>
            <h1>Brookville Park</h1>
        </div>
        <div class="textbox">
            <p class="intro">
                In Brookville Park, there is just enough space for everyone to just relax and get away from the city life. A place to get away from people and problems. A place where you could just sit under the tree and read a book.
            </p>
        </div>
    </div>
</section>
<?php 
include('../footer.php');
?>