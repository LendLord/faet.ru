<?php get_header(); ?>
	<div id="main-area">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if (get_option('memoir_integration_single_top') <> '' && get_option('memoir_integrate_singletop_enable') == 'on') echo(get_option('memoir_integration_single_top')); ?>

		<div class="entry clearfix post">
			<h1 class="title"><?php the_title(); ?></h1>

			<?php $thumb = '';
			$width = 135;
			$height = 135;
			$classtext = '';
			$titletext = get_the_title();
			$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,true,'Entry');
			$thumb = $thumbnail["thumb"]; ?>

			<?php if($thumb <> '' && get_option('memoir_thumbnails') == 'on') { ?>
				<div class="post-thumbnail full-size-post-thumbnail alignleft">
                    <a href="<?php echo $thumbnail["fullpath"] ?>"  class="foobox">
					<?php echo get_the_post_thumbnail(get_post( $post )->ID) ?>
<!--					--><?php //print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
<!--					<span class="post-overlay"></span>-->
                    </a>
				</div> 	<!-- end .post-thumbnail -->
			<?php } ?>

			<?php
				echo apply_filters('the_content',et_create_dropcaps(get_the_content()));
			?>
			<?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages','Memoir').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link(esc_html__('Edit this page','Memoir')); ?>

			<?php get_template_part('includes/postinfo'); ?>
		</div> <!-- end .entry -->

		<?php if (get_option('memoir_integration_single_bottom') <> '' && get_option('memoir_integrate_singlebottom_enable') == 'on') echo(get_option('memoir_integration_single_bottom')); ?>

		<?php if (get_option('memoir_468_enable') == 'on') { ?>
			<?php if(get_option('memoir_468_adsense') <> '') echo(get_option('memoir_468_adsense'));
			else { ?>
				<a href="<?php echo esc_url(get_option('memoir_468_url')); ?>"><img src="<?php echo esc_url(get_option('memoir_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
			<?php } ?>
		<?php } ?>

		<?php if (get_option('memoir_show_postcomments') == 'on') comments_template('', true); ?>
	<?php endwhile; endif; ?>
	</div> <!-- end #main-area -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>