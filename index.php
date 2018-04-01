<?php include 'database.php'; ?>
<?php
// total number question
$query = "Select * from questions";
// Results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $result->num_rows;

?>
<!DOCTYPE html>
<html>
<body>
	<header>
	      <div>
	    	<h1>Board Exam :D</h1>
	      </div>
	</header>

	<main>
	<h2>Testinggggg</h2>
	<p>Index for question</p>
	<ul>
		<li><b>Number of Questions: </b><?php echo $total?></li>
		<li><b>TYPE: </b> Multiple choice</li>
		<li><b>Allotted time: </b> <?php echo $total*2; ?> mins</li>
	</ul>
	<a href="question.php?n=1" > Start quiz</a>

	</main>

</body>
</html>