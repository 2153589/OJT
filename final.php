<?php include 'database.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<body>


	<main>
		<h2>You have finished the test</h2>
		<p>Final score: <?php echo $_SESSION['score']; ?> </p>
		<a href="question.php?n=1">Retake</a>
	</main>

</body>
</html>