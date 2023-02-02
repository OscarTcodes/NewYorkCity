<?php
// variables in php the variables are about the background img and its title name for the document and the page
// Where the include grabs the header.php
$title = "Comments";
$name = 'Comments';
include('header.php');
include('dbconf.php');
// Select statment for all in table name finalProject
$sql = 'SELECT * FROM `finalProject` LIMIT 50';
// sends the statment to the connection where it'll be come a variable
$result = $conn->query($sql);


// Grab all data and put it into an array
while ($row = $result->fetch_assoc()) {
	$records[] = $row;
}

// [This is for the insert statment so when the usr submits it'll send a perpared statment to the db]If the full name and the comment isn't empty then run this command and sanitize
function sanitize($str, $length = 250)
{
	$str = trim($str);
	$str = htmlentities($str, ENT_QUOTES);
	return substr($str, 0, $length);
}
if (!empty($_GET['fname']) && !empty($_GET['comment'])) {
	$x = sanitize($_GET['fname']);
	$y = sanitize($_GET['comment']);
	$stmt = $conn->prepare("INSERT INTO `finalProject` (`from`, `message`) VALUES (?, ?);");
	$stmt->bind_param("ss", $x, $y);
	$stmt->execute();
	$stmt->close();
}

?>


<h1>Leave a Review on the Website and see Live reactions</h1>
<!-- My comment form  -->
<form action="comments.php" id="contact" method="get" onsubmit="return validate()">
	FullName:</br><input type="text" id="fname" name="fname"></br>
	Comment:</br><textarea id="textarea" name="comment"></textarea></br>
	<input id="submitbtn" type="submit" value="Submit">
</form>








<?php
// Here is where you go record by record to echo out a header tag with the record from column and its message
foreach ($records as $record) {
	echo "<h1>" . $record['from'] . "</h1> <p>" . $record['message'] . "</p>";
}
include('footer.php');

?>