<?php $this->load->view('header'); ?>
<ul>
<?php foreach($lists as $list): ?>
	<li><a href="<?php echo site_url('lists/view/'.$list->list_id); ?>"><?php echo $list->list_name; ?></a></li>
<?php endforeach; ?>
</ul>
<p><a href="<?php echo site_url('lists/add'); ?>">Add New List</a></p>

<?php $this->load->view('footer'); ?>