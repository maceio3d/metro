<?php
/**
 * @package WordPress
 * @subpackage Metro
 * @since Metro 1.0
 */
?>

	<div id="comments">
<?php if (post_password_required()): ?>
		<p class="nopassword"><?php _e("This post is password protected. Enter the password to view any comments."); ?></p>
	</div>
<?php return; endif; ?>

<?php if (have_comments()): ?>
	<h3 id="comments-title"><?php
		printf(_n('One Response to %2$s', '%1$s Responses to %2$s', get_comments_number()),
		number_format_i18n(get_comments_number()), "<em>" . get_the_title() . "</em>");
		?></h3>

		<?php metro_comment_navigation("top"); ?>
		<ol class="commentlist">
			<?php wp_list_comments(array("callback" => "metro_comment")); ?>
		</ol>
		<?php metro_comment_navigation("bottom"); ?>

	<?php elseif (!comments_open()): ?>
		<p class="nocomments"><?php _e("Comments are closed."); ?></p>
	<?php endif; ?>

		<div id="comments_form">
			<?php comment_form(); ?>
		</div>

	</div>