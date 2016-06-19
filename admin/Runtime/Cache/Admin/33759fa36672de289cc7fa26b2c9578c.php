<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css">
</head>
<frameset border=0 rows="60,*",frameborder=0>
	<frame name=head src="./head"/>
	<frameset cols="170,*">
	 <frame name=left src="/shoptp/index.php/Admin/Index/left"/>
	 <frame name="right" src="./right"/>
	</frameset>
</frameset>
</html>