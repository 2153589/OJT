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
list-style-type: none;
}
.content{
max-width:500px
margin:auto;
}
body{
  font-size: 20px;
    color: #333;
  font-weight: 300;
  text-align: center;
  background-color: #f8f6f0;
}
button:hover{
    background-color: #38a;
}
}
li{
font-size: 22px;
    background-color: #279;
    color: #fff;
    border: 0px;
    border-radius: 3px;
    padding: 20px;
    cursor: pointer;
    margin-bottom: 20px;
}
h2{
  font-weight: 500;
  margin: 0px;
  padding: 10px;
  font-size: 20px;
  background-color: #444;
  color: #fff;
}

button:hover{
    background-color: #38a;
    font-size: 22px;
    background-color: #279;
    color: #fff;
    border: 0px;
    border-radius: 3px;
    padding: 20px;
    cursor: pointer;
    margin-bottom: 20px;
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

	<input id = "button" type = "submit" value="Next" />
	<input  type = "hidden" name = "number" value = "<?php echo $number; ?>" />

</div>

	</form>
	
	</main>

</body>
</html>