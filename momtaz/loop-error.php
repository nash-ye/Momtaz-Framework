<?php
/**
 * Posts Loop Error Template
 *
 * Displays an error message when no posts are found.
 *
 * @package Momtaz
 * @subpackage Template
 */

 if ( ! is_search() ) : ?>

	<article id="post-0" class="hentry loop-error no-results not-found no-archive-data">

		   <header class="entry-header loop-error-header">
			   <h1 class="entry-title loop-error-title"><?php _e( 'Nothing Found', 'momtaz' )  ?></h1>
		   </header>

		   <div class="entry-content">
			   <p class='no-data'><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'momtaz')  ?></p>
			   <?php get_search_form(); ?>
		   </div><!-- .entry-content -->

	</article><!-- .hentry -->

<?php else : ?>

	<article id="post-0" class="hentry loop-error no-results not-found no-search-data">

		   <header class="entry-header loop-error-header search-header">
			   <h1 class="entry-title loop-error-title search-title">
				 <?php _e( 'Nothing Found', 'momtaz' ); ?>
			   </h1>
		   </header>

		   <div class="entry-content no-data">
			   <p class='no-data'><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'momtaz'); ?></p>
			   <?php get_search_form(); ?>
		   </div><!-- .entry-content -->

	</article><!-- .hentry -->

<?php endif;