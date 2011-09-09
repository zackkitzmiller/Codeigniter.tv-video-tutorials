<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<h1>Automatically generated thumbs</h1>
<?php $this->load->helper('html'); ?>

<?php 
foreach ($images as $image) {
    echo img('gfx/' . $image['new_image']) . ' ' . $image['new_image'] . '<br />';
}
?>
<?php echo img('gfx/original.jpg'); ?><br />
Original size

</body>
</html>