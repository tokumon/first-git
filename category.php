<?php get_header(); ?>
<div class="wrap">

	<div class="l-main">
		<div class="section-white first-box">
			<p class="bred-list">
				<?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</p>
			<section class="l-content">
				<h3 class="archive-h3"><?php single_cat_title(); ?> に関する記事一覧</h3>
				<ul class="blog-ul top-ul">
					<?php
					if (have_posts()) :
					  while (have_posts()) :
					    the_post();
					    get_template_part('category-li');
					  endwhile;
					  else:
					  get_template_part('category-li-none');
					endif;

					?>
				</ul>
				<?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
			</section>
		</div>
	</div><!--end l-mian-->


<?php get_sidebar(); ?>
<?php get_template_part( 'informed' ); ?>
<?php get_footer(); ?>
