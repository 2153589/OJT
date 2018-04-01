<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
// check for score
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST) {
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
	
	if($number == 1) {
 $_SESSION["score"] = 0;
}
	
		// get total question
		$query = "Select * from `questions`";
		//result of total
		$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
		$total = $result->num_rows;
	
	
	
		//getting correct choice
		
		$query = "SELECT * FROM `choice` 
			Where question_num = $number and is_correct = 1";
			
		// result
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//get row
		$row = $result->fetch_assoc();
		
		//correct choice
		$correct_choice = $row['id'];

		//comparing
		
			if($correct_choice == $selected_choice){
				$_SESSION['score']++;
				
		// for last question
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			}else{
				header("Location: question.php?n=".$next);
				
			}
			
	}
	
	?>
		