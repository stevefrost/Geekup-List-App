<?php $this->load->view('header'); ?>

<h1><?php echo $list->name; ?></h1>
<ul>
<?php foreach($list->items as $i): ?>
	<li><?php echo $i->name; ?></li>
<?php endforeach; ?>
</ul>

<?php $this->load->view('footer'); ?>