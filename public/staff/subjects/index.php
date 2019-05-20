<?php require_once('../../../private/initialize.php'); ?>

<?php 

$subjects = [

	['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Global Bank'],
	['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
	['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
	['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],

]; 



?>

<?php $staff_title = "Subjects" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<main>
	<div class="subjects_listing">
		<h1> Subjects</h1>
		<div class="actions">
			<a href="" class="action">
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

			<?php foreach ($subjects as $subject) { ?>
				
				<tr>
					<td><?php echo $subject['id'];?></td>
					<td><?php echo $subject['position'];?></td>
					<td><?php echo $subject['visible'];?></td>
					<td><?php echo $subject['menu_name'];?></td>
					<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id='.$subject['id']); ?>">View</a></td>
					<td><a class="action" href="">Edit</a></td>
					<td><a class="action" href="">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>







</main>



<?php include(SHARED_PATH . "/staff_footer.php"); 