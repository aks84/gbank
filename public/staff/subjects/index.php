<?php require_once('../../../private/initialize.php'); ?>
<?php $staff_title = "Subject" ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>
	<div class="subjects_listing">
		<h1> Manage Subjects</h1>
		<div class="actions">
			<a href="new.php" class="action">
				Create New Subject
			</a>
		</div>
	</div>


	<table>

		<thead>
			<tr>
				<th>ID</th>
				<th>Position</th>
				<th>Visible</th>
				<th>Menu Title</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>

			<?php 
			$subjects = $db->query("select * from subjects");
			while ($subject = $subjects->fetch_assoc()) { ?>

				<tr>
					<td><?php echo h($subject['id']);?></td>
					<td><?php echo h($subject['position']);?></td>
					<td><?php echo $subject['visible'];?></td>
					<td><?php echo h($subject['title']);?></td>
					<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id='.h(u($subject['id']))); ?>">View</a></td>
					<td><a class="action" href="">Edit</a></td>
					<td><a class="action" href="">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>







</main>



<?php include(SHARED_PATH . "/staff_footer.php"); 