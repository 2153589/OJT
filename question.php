<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Setting question number
 $number = (int) $_GET['n'];

//Getting question
$query = "SELECT * FROM `questions`
	WHERE question_num = $number";

//get result for question
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$question = $result->fetch_assoc();


//Getting choices
$query = "SELECT * FROM `choice`
	WHERE question_num = $number";

//get result for choices
$choice = $mysqli->query($query) or die($mysqli->error.__LINE__);

// get total question
		$query = "Select * from `questions`";
		//result of total
		$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
		$total = $result->num_rows;

?>
<!DOCTYPE html>
<html>
<style>
ul{
list-style-type:none;
}
.content{
max-width:500px
margin:auto;
}
</style>

<body>


	<main>
	<h2> Question <?php echo $question['question_num']; ?>  </h2>
	<!-- Questions -->
	<p><?php echo $question['text']; ?>
	</p>
	
	<div class = "content">
	<!-- Choices -->
	<form method = "post" action="process.php">
	
	<ul>
	<?php while($row = $choice->fetch_assoc()): ?>

	<li>
	<input name = "choice" type ="radio" value ="<?php echo $row['id']?>" /> <?PHP ECHO $row ['text']; ?>
	</li>

	<?php endwhile; ?>

	
	
	</ul>	
	<input type = "submit" value="Next" />
	<input type = "hidden" name = "number" value = "<?php echo $number; ?>" />
</div>

	</form>
	
	</main>

</body>
</html>