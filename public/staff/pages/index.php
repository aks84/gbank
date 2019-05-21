<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>

	<div class="subjects_listing">
		<h1> Manage Pages </h1>
		<div class="actions">
			<a href="new.php" class="action">
				Create New Page
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
			$pages = $db->query("select * from pages");
			while ($page = $pages->fetch_assoc()) { ?>

				<tr>
					<td><?php echo h($page['id']);?></td>
					<td><?php echo h($page['position']);?></td>
					<td><?php echo $page['visible'] = 1 ? 'true' : 'false';?></td>
					<td><?php echo h($page['menu_name']);?></td>
					<td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id='. h(u($page['id']))); ?>">View</a></td>
					<td><a class="action" href="">Edit</a></td>
					<td><a class="action" href="">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>





</main>



<?php include(SHARED_PATH . "/staff_footer.php"); 