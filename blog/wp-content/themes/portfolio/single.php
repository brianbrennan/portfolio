<?php include 'header.php' ?>
<section id="blog">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>


	<section class="title-section">
		<div class="blog-wrapper">
			<h3 class="title wow fadeInDown"><?php the_title(); ?></h3>
			<span class=" subtitle wow fadeInDown" data-wow-delay="400ms">Written on <?php the_date(); ?></span>
		</div>
	</section>

	<div class="blog-wrapper">
		<?php include 'sidebar.php' ?>
		<section class="post-content">
			<?php the_content(); ?>
		</section>
	</div>
</section>

<script>//for the pre tags
$("pre").html(function (index, html) {
	return html.replace(/^(.*)$/mg, "<span class=\"line\">$1</span>")
});
</script>
<?php include 'footer.php' ?>