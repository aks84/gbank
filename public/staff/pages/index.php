<?php require_once('../../../private/initialize.php'); ?>

<?php $staff_title = "Manage Pages" ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>



<?php 

$pages = [

	['id' => '4', 'position' => '2', 'visible' => '1', 'menu_name' => 'GBI Home'],
	['id' => '5', 'position' => '3', 'visible' => '1', 'menu_name' => 'Contact'],
	['id' => '6', 'position' => '4', 'visible' => '1', 'menu_name' => 'About us'],
	['id' => '7', 'position' => '5', 'visible' => '1', 'menu_name' => 'Clients'],

]; 



?>



        <main>

        	<div class="subjects_listing">
		<h1> Manage Pages </h1>
		<div class="actions">
			<a href="" class="action">
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

			<?php foreach ($pages as $page) { ?>
				
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