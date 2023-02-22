	</div>
</div>
<div id="footer">
	<p class="widthlimiter">	
		Copyright &copy; <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>. Design by <a href="https://www.jooa.pa/">Jooa</a>.
		<form id="search" method="get" action="<?php bloginfo('siteurl')?>/">
			<input type="text" name="s" id="searchbox" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" />
			<input id="btnSearch" type="submit" name="submit" value="<?php _e('Search'); ?>" />
		</form>
	</p>
</div>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</body>
</html>


