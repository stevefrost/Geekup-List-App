<?php $this->load->view('header'); ?>
<form method="post">
<fieldset><legend>Create New List</legend>
<ul>
<li>
	<label>List Name</label>
	<input type="text" name="list_name">
</li>
<?php for($i = 1; $i <= 10; $i++): ?>
	<li>
		<label>Item <?php echo $i; ?></label>
		<input type="text" name="item[]">
	</li>
<?php endfor; ?>
<li>
	<input type="submit" value="Save List">
</li>
</ul>
</fieldset>
</form>

<?php $this->load->view('footer'); ?>