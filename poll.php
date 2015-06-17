<?php
	include 'connect.php';
	if (!isset($_GET['p'])) {
		header("Location:index.php");
	}
	else {
		$id = $_GET['p'];
		$upit = "SELECT id, question
				FROM polls
				WHERE id = $id";
		$rez = mysql_query($upit,$k);
		$r = mysql_fetch_object($rez);
		$upitOdgovori = "SELECT polls_choice.id AS choice_id, polls_choice.name as choice_name
						FROM polls_answer JOIN polls_choice
						ON polls_answer.choice_id = polls_choice.id
						WHERE polls_answer.poll_id = $id";
		$rezOdgovori = mysql_query($upitOdgovori,$k);
		
		$upitOdgovori = "SELECT polls_choice.name,
					COUNT(polls_answer.id) * 100 / (
						SELECT COUNT(*)
						FROM polls_answer
						WHERE polls_answer.poll_id = $id
					) AS percentage
					FROM polls_choice LEFT JOIN polls_answer
					ON polls_choice.id = polls_answer.choice_id
					WHERE polls_choice.poll_id = $id
					GROUP BY polls_choice.id";
		$rezOdgovori = mysql_query($upitOdgovori, $k);
		while ($row = mysql_fetch_object($rezOdgovori)) {
			$answers[] = $row;
		}
		$upitPonude = "SELECT polls.id, polls_choice.id AS c_id, polls_choice.name
					FROM polls JOIN polls_choice
					ON polls.id = polls_choice.poll_id
					WHERE polls.id = $id";
		$rezPonude = mysql_query($upitPonude,$k);
		while ($row =  mysql_fetch_object($rezPonude)) {
			$choices[] = $row;
		}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<?php if(!p): ?>
		<p>That poll doesen't exist</p>
		<?php else: ?>
		<div class="poll">
			<div class="poll-question">
				<?php echo $r->question; ?>
			</div>
			<?php if(!empty($choices)): ?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<?php foreach($choices as $index => $c): ?>
				<div class="poll-option">
					<input type="radio" name="c" id="c<?php echo $index; ?>" value="<?php echo $c->c_id; ?>">
					
					<label for="c<?php echo $index; ?>"><?php echo $c->name; ?> </label>
				</div>
				<?php endforeach; ?>
				<input type="submit" value="Vote" name="vote" class="blogBtn">
				<input type="hidden" name="p" value="<?php echo $id ?>">
			</form>
			<div class="current">Current results:</div>
			<ul class="current__results">
				<?php foreach ($answers as $answer): ?>
				<li><?php echo $answer->name; ?> (<?php echo number_format($answer->percentage,2); ?>%)</li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
			<p>No choices avaliable</p>
			<?php endif; ?>
			
			<?php endif; ?>
			<?php
			
			if (isset($_POST['p'], $_POST['c'])) {
				$poll = $_POST['p'];
				$choice = $_POST['c'];
				$upitGlasanje = "INSERT INTO polls_answer (poll_id, choice_id)
								VALUES($poll, $choice)";
								
				$rezGlasanje = mysql_query($upitGlasanje,$k);
				
				
			}
			
			?>
		</div>
	</body>
</html>