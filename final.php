<?php include 'database.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<style>
body{
    font-size: 20px;
    font-family; diavlo-light;
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


	<main>
		<h2>You have finished the test</h2>
		<p>Final score: <?php echo $_SESSION['score']; ?> </p>
		<a href="question.php?n=1">Retake</a>
	</main>
<a href ="index.php">Go back to menu </a>

</body>
</html>