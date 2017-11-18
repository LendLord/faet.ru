<?php if (!is_single() && get_option('memoir_postinfo1') ) { ?>
	<div class="meta-info"><span class="shadow-left"></span><span class="shadow-right"></span>
		<div class="postinfo">
			<span>
				<span>
					<?php esc_html_e('Posted','Memoir'); ?>
                    <?php if (in_array('author', get_option('memoir_postinfo1'))) { ?>
                        <?php esc_html_e('by','Memoir'); ?>
                        <?php the_author_posts_link(); ?>
                    <?php }; ?>

                    <?php if (in_array('date', get_option('memoir_postinfo1'))) { ?>
                        <?php esc_html_e('on','Memoir'); ?>
                        <?php the_time(get_option('memoir_date_format')) ?>
                    <?php }; ?>

                    <?php if (in_array('categories', get_option('memoir_postinfo1'))) { ?>
                        <?php esc_html_e('in','Memoir'); ?>
                        <?php the_category(', ') ?>
                    <?php }; ?>

                    <?php if (in_array('comments', get_option('memoir_postinfo1'))) {
						$id = get_the_ID();
						$title = get_the_title();
						$number = get_comments_number( $id );
						if ($number > 0 || comments_open() || pings_open()){
							echo "| ";
							comments_popup_link(
								esc_html__('0 comments','Memoir'),
								esc_html__('1 comment','Memoir'),
								'% '.esc_html__('comments','Memoir')
							);
                        }

                     }?>
				</span>
			</span>
		</div>
	</div>
<?php } elseif (is_single() && get_option('memoir_postinfo2') ) { ?>
	<div class="meta-info"><span class="shadow-left"></span><span class="shadow-right"></span>
		<div class="postinfo">
			<span>
				<span>
					<?php esc_html_e('Posted','Memoir'); ?>
                    <?php if (in_array('author', get_option('memoir_postinfo2'))) { ?>
                        <?php esc_html_e('by','Memoir'); ?>
                        <?php the_author_posts_link(); ?><?php
                    }; ?>

                    <?php if (in_array('date', get_option('memoir_postinfo2'))) { ?>
                        <?php esc_html_e('on','Memoir'); ?>
                        <?php the_time(get_option('memoir_date_format')) ?><?php
                    }; ?>

                    <?php if (in_array('categories', get_option('memoir_postinfo2'))) { ?>
                        <?php esc_html_e('in','Memoir'); ?>
                        <?php the_category(', ') ?>

                    <?php }; ?>

                    <?php if (in_array('comments', get_option('memoir_postinfo2'))) { ?>
                        <?php
	                    $id = get_the_ID();
	                    $title = get_the_title();
	                    $number = get_comments_number( $id );
	                    if ($number > 0 || comments_open() || pings_open()){
		                    echo "| ";
		                    comments_popup_link(
			                    esc_html__('0 comments','Memoir'),
			                    esc_html__('1 comment','Memoir'),
			                    '% '.esc_html__('comments','Memoir')
		                    );
	                    }

                        ?>

                    <?php }; ?>
				</span>
			</span>
		</div>
	</div>
<?php }; ?>