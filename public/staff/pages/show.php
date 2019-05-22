<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Show Page" ?>



<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

	<div class="go_back">
		<a href="<?php echo url_for('/staff/pages/index.php'); ?>">&#60;&#60; Back to pages</a>
	</div>
	
	<?php 
	$id = $_GET['id'] ?? '1'; 

	$showquery = $db->query("SELECT * FROM pages WHERE id = '$id'");


	$page = $showquery->fetch_assoc();

	mysqli_free_result($showquery);

	?>

	<div class="single_page">
		<div class="page_title">
			<h2>Page Title:  <?php echo $page['title']; ?> </h2>
		</div>
		<div class="page_content">
			<dl>
				<dt>
					Page ID
				</dt>
				<dd>
					<?php echo $page['id'];  ?>
				</dd>
			</dl>
			<dl>
				<dt>
					Page Title
				</dt>
				<dd>
					<?php echo $page['title'];  ?>
				</dd>
			</dl>
			<dl>
				<dt>
					Subject 
				</dt>
				<dd>
					<?php echo $page['subject_id'];  ?>
				</dd>
			</dl>
			<dl>
				<dt>
					Visible
				</dt>
				<dd>
					<?php echo $page['visible'];  ?>
				</dd>
			</dl>
			<dl>
				<dt>
					Position
				</dt>
				<dd>
					<?php echo $page['position'];  ?>
				</dd>
			</dl>
			
		</div>

	</div>
	

</main>


<?php include(SHARED_PATH . "/staff_footer.php"); 