<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = "Grading";
$img = 'gradingimg.jpg';
$name = 'Grading';
include('header.php');
?>
<!-- The paragraph regarding about my project -->
    <p>
        Since after midterms, I've updated the website a ton:
    </p>
    <ul>
        <li>
            What I included in this website is the moving pictures in the nav background. I found this to be alot better compared to just having a single picture.
        </li>
        <li>
            What I also included was when you hover over a button in the homepage at the bottom you can see a transition of a shadow
        </li>
        <li>
            I also included a contact page where it would take any comments and upload them to the database and show them after. 
        </li>
        <li>
            What I wished I could've added was more js I don't know where else I could've added to make it more efficant, I didn't just want to do a simple hover over text to change color
        </li>
        <li>
            Another thing I wish I would add is a google maps api so it could track where the places are at.
        </li>
    </ul>
    <?php 
include('footer.php');
?>