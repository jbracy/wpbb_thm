<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="row">

		<?php if ( have_comments() && comments_open() ) :
	    $comments_number = get_comments_number(); ?>
			<header>
				<div class="text-center comments-page-title">
					<h3>Comments on <a href=<?php the_permalink();?>><?php the_title();?></a></h3>
				</div>
			</header>

			<section class="post-content">
				<ul class="comment-list">
					<?php
						wp_list_comments( array(
		          	'style'             => 'ul',
		          	'callback'          => 'jeb_beach_basic_format_comments',
								'max_depth'					=> '2'
						) );
		      ?>
		    </ul><!-- .comment-list -->
			<?php the_comments_navigation(); ?>
			<?php endif; ?>
		</section>

		<?php
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
			<p class="no-comments"><?php 'Comments are closed.'; ?></p>
		<?php endif; ?>


</div><!-- .comments-area -->
