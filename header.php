<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(' '); if(wp_title(' ', false)) { echo ' | '; } bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <script language="JavaScript" src="<?php bloginfo('template_url'); ?>/teemanjavascript.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<div id="header">
	<div class="widthlimiter">
		<div>
			<span id="description">
				<?php bloginfo('description'); ?>
			</span>
			<!--<form id="search" method="get" action="<?php bloginfo('siteurl')?>/">
				<input type="text" name="s" id="searchbox" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" />
				<input id="btnSearch" type="submit" name="submit" value="<?php _e('Search'); ?>" />
			</form>-->
		</div>
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	</div>
</div>


<div id="menu">
	<div class="widthlimiter">
		<ul id="hj_NavId">
			<?php wp_list_pages('title_li=')?>
		</ul>
	</div>
</div>

<div id="content">
	<div class="widthlimiter">