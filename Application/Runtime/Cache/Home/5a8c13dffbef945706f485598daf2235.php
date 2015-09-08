<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<title>文章详情</title>
</head>
<body>
<h1><?php echo ($detail['title']); ?></h1><br>
<section>
	<?php echo ($detail['content']); ?>
</section>
</body>
</html>