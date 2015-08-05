<?php include 'header.php' ?>

<section id="blog">
	<section class="title-section">
		<div class="blog-wrapper">
			<h3 class="title wow fadeInDown">My Blog</h3>
			<span class=" subtitle wow fadeInDown" data-wow-delay="400ms">Thoughts on Web Design and Development</span>
		</div>
	</section>
	<div class="blog-wrapper">

		<?php include 'sidebar.php' ?>

		<section class="blog-list">

			<?php
			$paged = get_query_var('paged');
			$args = array(
				'numberposts'       => 4,
				'offset'            => $paged*4,
				'orderby'           => 'post_date',
				'order'             => 'DESC',
				'post_type'         => 'post',
				'post_status'       => 'publish',
				'suppress_filters'  => true
				);
			$posts_array = get_posts( $args );
			?>
			<?php


			$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => 1 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="post">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p>Written on <?php the_date(); ?></p>
				<div class="divide"></div>
			</div>
			<?php endforeach; 
			wp_reset_postdata();?>

		</section>
	</div>
</section>

<?php include 'footer.php' ?>