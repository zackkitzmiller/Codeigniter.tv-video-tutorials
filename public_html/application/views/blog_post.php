<?php 
// The view presents the data to the visitor.
// Remember to escape your data first for security! For instance like this:
// $this->load->helper('security');
// echo xss_clean($blogpost->title);
?>
<html>
<head>
	<title>Blogpost <?php echo $blogpost->title; ?></title>
	<meta charset="UTF-8">
</head>
<body>
    <h1><?php echo $blogpost->title; ?></h1>
    <h2>By <?php echo $blogpost->author; ?></h2>
    <?php echo $blogpost->post; ?> 
</body>
</html>