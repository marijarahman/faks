<div id="header">
	<a href="index.php"><img src="img/logo-copy.png" alt="logo"></a>
	<div id="menu">
		<ul id="nav">
			<?php
				while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
					$sub_sql = "SELECT * FROM admin_sub_menu WHERE cat_id = :id";
					$sub_stmt = $pdo->prepare($sub_sql);
					$sub_stmt->bindParam(':id', $row->id, PDO::PARAM_INT);
					$sub_stmt->execute();
			?>
			<li><a href="<?php echo $row->href; ?>"><?php echo $row->name ?></a>
			<?php
				if($sub_stmt->rowCount()) {
			?>
			<ul>
				<?php
					while ($sub_row = $sub_stmt->fetch(PDO::FETCH_OBJ)) {
				?>
				<li><a href="<?php echo $sub_row->href; ?>">
					<?php echo $sub_row->sub_name; ?>
				</a></li>
				<?php
				}
				?>
			</ul>
			<?php
			}
			?>
		</li>
		<?php
		}
		?>
	</ul>
</div>
<div class="clear"></div>
</div>