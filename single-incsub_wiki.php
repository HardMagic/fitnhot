<?php
global $blog_id, $wp_query, $wiki, $post, $current_user;
get_header( 'wiki' );
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_header(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54635bf76c49c157" async="async"></script>


	<div id="content-wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="content-main">
			<?php $mvp_featured_img = get_option('mvp_featured_img'); if ($mvp_featured_img == "true") { ?>
				<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
					<?php echo get_post_meta($post->ID, "mvp_video_embed", true); ?>
				<?php else: ?>
					<?php $mvp_show_hide = get_post_meta($post->ID, "mvp_featured_image", true); if ($mvp_show_hide == "hide") { ?>
					<?php } else { ?>
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
						<div id="featured-image" itemscope itemtype="http://schema.org/Article">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumb' ); ?>
							<img itemprop="image" src="<?php echo $thumb['0']; ?>" />
							<?php if(get_post_meta($post->ID, "mvp_photo_credit", true)): ?>
							<span class="photo-credit"><?php echo get_post_meta($post->ID, "mvp_photo_credit", true); ?></span>
							<?php endif; ?>
						</div><!--featured-image-->
						<?php } ?>
					<?php } ?>
				<?php endif; ?>
			<?php } ?>
			<div id="home-main">
				<div id="post-area" itemscope itemtype="http://schema.org/Article" <?php post_class(); ?>>
					<h3 class="story-cat"><?php the_category() ?></h3>
					<h1 class="story-title" itemprop="name"><?php the_title(); ?></h1>
					<div id="content-area">
						<?php the_content(); ?>
					<div id="post-info">
						<?php _e( 'By', 'mvp-text' ); ?>&nbsp;<span class="author" itemprop="author"><?php the_author_posts_link(); ?></span>&nbsp;|&nbsp;<time class="post-date" itemprop="datePublished" datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
						<span class="comments-number"><a href="<?php comments_link(); ?>"><?php comments_number(__( '0 Comments', 'mvp-text'), __('1 Comment', 'mvp-text'), __('% Comments', 'mvp-text')); ?></a></span>
					</div><!--post-info-->
					
						<?php wp_link_pages(); ?>
						<div class="post-tags">
							<span class="post-tags-header"><?php _e( 'Related Items', 'mvp-text' ); ?></span><?php the_tags('','','') ?>
						</div><!--post-tags-->
					</div><!--content-area-->
				</div><!--post-area-->
					<?php $author = get_option('mvp_author_box'); if ($author == "true") { ?>
					<div id="author-wrapper">
						<div id="author-info">
							<?php echo get_avatar( get_the_author_meta('email'), '100' ); ?>
							<div id="author-text">
								<span class="author-name"><?php the_author_posts_link(); ?></span>
								<p><?php the_author_meta('description'); ?></p>
								<ul>
									<?php $authordesc = get_the_author_meta( 'facebook' ); if ( ! empty ( $authordesc ) ) { ?>
									<li class="fb-item">
										<div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-layout="icon_link"></div>	
									</li>
									<?php } ?>
									<?php $authordesc = get_the_author_meta( 'twitter' ); if ( ! empty ( $authordesc ) ) { ?>
									<li class="twitter-item">
										<a href="http://www.twitter.com/<?php the_author_meta('twitter'); ?>" alt="Twitter" class="twitter-but" target="_blank"></a>
									</li>
									<?php } ?>
									<?php $authordesc = get_the_author_meta( 'pinterest' ); if ( ! empty ( $authordesc ) ) { ?>
									<li class="pinterest-item">
										<a href="http://www.pinterest.com/<?php the_author_meta('pinterest'); ?>" alt="Pinterest" class="pinterest-but" target="_blank"></a>
									</li>
									<?php } ?>
									<?php $authordesc = get_the_author_meta( 'googleplus' ); if ( ! empty ( $authordesc ) ) { ?>
									<li class="google-item">
										<a href="<?php the_author_meta('googleplus'); ?>" alt="Google Plus" class="google-but" target="_blank"></a>
									</li>
									<?php } ?>
									<?php $authordesc = get_the_author_meta( 'instagram' ); if ( ! empty ( $authordesc ) ) { ?>
									<li class="instagram-item">
										<a href="http://www.instagram.com/<?php the_author_meta('instagram'); ?>" alt="Instagram" class="instagram-but" target="_blank"></a>
									</li>
									<?php } ?>
									<?php $authordesc = get_the_author_meta( 'linkedin' ); if ( ! empty ( $authordesc ) ) { ?>
									<li class="linkedin-item">
										<a href="http://www.linkedin.com/company/<?php the_author_meta('linkedin'); ?>" alt="Linkedin" class="linkedin-but" target="_blank"></a>
									</li>
									<?php } ?>
								</ul>
							</div><!--author-text-->
						</div><!--author-info-->
					</div><!--author-wrapper-->
					<?php } ?>
				<?php $prev_next = get_option('mvp_prev_next'); if ($prev_next == "true") { ?>
				<div class="prev-next-wrapper">
					<div class="prev-post">
						<?php previous_post_link('&larr; '.__('Previous Story', 'mvp-text').' %link', '%title', TRUE); ?>
					</div><!--prev-post-->
					<div class="next-post">
						<?php next_post_link(''.__('Next Story', 'mvp-text').' &rarr; %link', '%title', TRUE); ?>
					</div><!--next-post-->
				</div><!--prev-next-wrapper-->
				<?php } ?>
				<?php getRelatedPosts(); ?>
				<?php comments_template(); ?>
			</div><!--home-main-->
		</div><!--content-main-->
		<?php get_sidebar(); ?>
		<?php endwhile; endif; ?>
	</div><!--content-wrapper-->
</div><!--main-wrapper-->
<?php get_footer(); ?>





