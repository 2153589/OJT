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
<style>
ul{
	list-style: none;
}
 body{
    font-size: 20px;
    color: #333;
  font-weight: 300;
  text-align: center;
  background-color: #f8f6f0;
}
h2{
  font-weight: 500;
  margin: 0px;
  padding: 10px;
  font-size: 20px;
  background-color: #444;
  color: #fff;
}

</style>

<body>
	<header>
	      <div>
	    
	      </div>
	</header>

	<main>
	<h2>Board Exam Testing 1</h2>
	<p>Index for question</p>
	<ul>
		<li><b>Number of Questions: </b><?php echo $total?></li>
		<li><b>TYPE: </b> Multiple choice</li>
		<li><b>Allotted time: </b> <?php echo $total*2; ?> mins</li>
	</ul>
	<a href="question.php?n=1" > Attempt quiz</a>

	</main>

</body>
</html>