<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' '); if(wp_title(' ', false)) { echo ' | '; } bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <script language="JavaScript" src="<?php bloginfo('template_url'); ?>/teemanjavascript.js"></script>
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div id="header">
	<div class="widthlimiter">
		<div>
			<span id="description">
				<?php bloginfo('description'); ?>
			</span>
		</div>
		<h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2> <!--blog name-->
		<br>
		<div class="dropdown">
			<div class="widthlimiter">
				<ul id="hj_NavId">
					<?php wp_list_pages('title_li=')?>
				</ul>
			</div>
		</div>
		
	</div>
</div>

<!--
<div id="menu">
	<div class="widthlimiter">
		<ul id="hj_NavId">
			<?php wp_list_pages('title_li=')?>
		</ul>
	</div>
</div>
-->
<div id="content">
	<div class="widthlimiter">