<?php get_header(); ?>
	<div id="main-area">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="entry clearfix">
				<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php $thumb = '';
				$width = 135;
				$height = 135;
				$classtext = '';
				$titletext = get_the_title();
				$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,true,'Entry');
				$thumb = $thumbnail["fullpath"]; ?>

				<?php if($thumb <> '' && get_option('memoir_thumbnails_index') == 'on') { ?>
					<div class="post-thumbnail full-size-post-thumbnail alignleft">
						<a href="<?php echo $thumbnail["fullpath"] ?>"  class="foobox">
<!--						<a href="--><?php //the_permalink(); ?><!--">-->
                            <?php echo get_the_post_thumbnail(get_post( $post )->ID) ?>
<!--							--><?php //print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext, true, false, false); ?>
<!--							<span class="post-overlay"></span>-->
						</a>
					</div> 	<!-- end .post-thumbnail -->
				<?php } ?>

				<?php if ( get_option('memoir_blog_style') == 'on' ){ ?>
					<?php echo apply_filters('the_content',et_create_dropcaps(get_the_content(''))); ?>
				<?php } else { ?>
					<p><?php echo et_create_dropcaps(truncate_post(775,false)); ?></p>
				<?php } ?>

				<div class="clear"></div>

				<?php if ( get_option('memoir_readmore_button') == 'on' ) { ?>
					<a href="<?php the_permalink(); ?>" class="readmore"><span>Подробнее</span></a>

					<div class="clear"></div>
				<?php } ?>

				<?php get_template_part('includes/postinfo'); ?>
			</div> <!-- end .entry -->

		<?php endwhile; ?>
			<div class="page-navi clearfix">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { ?>
					 <?php get_template_part('includes/navigation'); ?>
				<?php } ?>
			</div> <!-- end .entry -->
		<?php else : ?>
			<?php get_template_part('includes/no-results'); ?>
		<?php endif; ?>
	</div> <!-- end #main-area -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>