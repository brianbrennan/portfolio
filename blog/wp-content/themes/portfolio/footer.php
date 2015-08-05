	<footer>
		<div class="wrapper">
			<div class="left foot-section">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="work.php">Work</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
			<div class="mid foot-section">
				<ul>
					<li><a href="https://twitter.com/itsbrianbrennan">a</a></li>
					<li><a href="https://github.com/brianbrennan">Q</li>
					<li class="last"><a href="https://www.reddit.com/user/brianbrennan/">C</a></li>
				</ul>
			</div>
			<div class="right foot-section">
				<h5>Recent Blog Post</h5>
				<article>
					<?php
					$args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => 1 );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4><span><?php the_date(); ?></span>
					<?php endforeach; 
					wp_reset_postdata();?>
				</article>
			</div>
		</div>
	</footer>
	<script>
	new WOW().init();
	</script>
</body>
</html>