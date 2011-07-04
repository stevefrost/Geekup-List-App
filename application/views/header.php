<!doctype html>
<html>
<head>
<link href="/assets/css/base.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
<h1>Geekup List Maker</h1>
</header>
<section id="content">
<?php if(isset($errors)): ?>
	<div id="errors"><?php echo $errors; ?></div>
<?php endif; ?>
<?php if($this->session->flashdata('notices')): ?>
	<div id="notices"><?php echo $this->session->flashdata('notices'); ?></div>
<?php endif; ?>