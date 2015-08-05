<aside>
	<h5>Archive</h5>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

	<h5>Categories</h5>
	<ul>
		<?php wp_list_categories('title_li='); ?>
	</ul>

</aside>