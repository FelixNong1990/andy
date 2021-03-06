<?php /* Loop Name: Loop author */ ?>
<?php
	if(isset($_GET['author_name'])) :
		$curauth = get_userdatabylogin($author_name);
	else :
		$curauth = get_userdata(intval($author));
	endif;
?>

<div class="post-author post-author__page clearfix">
	<h1 class="post-author_h"><?php _e('About:', CURRENT_THEME); ?> <small><?php echo $curauth->display_name; ?></small></h1>
	<p class="post-author_gravatar">
		<?php if(function_exists('get_avatar')) { echo get_avatar( $curauth->user_email, $size = '65' ); } /* Displays the Gravatar based on the author's email address. Visit Gravatar.com for info on Gravatars */ ?>
	</p>

	<?php if($curauth->description !="") { /* Displays the author's description from their Wordpress profile */ ?>
		<div class="post-author_desc">
			<?php echo $curauth->description; ?>
		</div>
	<?php } ?>
</div><!--.post-author-->

<div id="recent-author-posts">
	<h3><?php _e('Recent Posts by', CURRENT_THEME); ?> <?php echo $curauth->display_name; ?></h3>
	<?php
		if (have_posts()) : while (have_posts()) : the_post();
			// The following determines what the post format is and shows the correct file accordingly
			$format = get_post_format();
			get_template_part( 'includes/post-formats/'.$format );

			if($format == '')
				get_template_part( 'includes/post-formats/standard' );
			endwhile; else:
	?>
		<div class="no-results">
			<?php echo '<p><strong>' . __('No post yet.', CURRENT_THEME) . '</strong></p>'; ?>
		</div><!--no-results-->
	<?php endif; ?>
</div><!--#recentPosts-->

<?php get_template_part('includes/post-formats/post-nav'); ?>

<div id="recent-author-comments">
	<h3><?php _e('Recent Comments by', CURRENT_THEME); ?> <?php echo $curauth->display_name; ?></h3>
	<?php
		$number = 5; // number of recent comments to display
		$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
	?>
	<ul>
		<?php
			if ( $comments ) : foreach ( (array) $comments as $comment) :
			echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s', CURRENT_THEME), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
		endforeach; else: ?>
			<p>
				<?php _e('No comments by', CURRENT_THEME); ?> <?php echo $curauth->display_name; ?> <?php _e('yet.', CURRENT_THEME); ?>
			</p>
		<?php endif; ?>
	</ul>
</div><!--#recentAuthorComments-->