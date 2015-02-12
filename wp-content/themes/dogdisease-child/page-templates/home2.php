

<?php 

/* Template Name: Home */
 
// Loads the header.php template.
get_header(); ?>
			
			<div class="home clearfix">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="content">
							<?php the_content(); ?>
						</div>
						
						<div class="resources">
							
							<h2>Available Resources</h2>
							
							<div class="col1">
								<h3>eBook Chapters</h3>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dogPref.docx" class="icon-doc">Preface</a>
								<!-- <a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/editorial-comments.docx" class="icon-doc">Editorial Commentary</a> -->
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog1.docx" class="icon-doc">Idea Analysis as a Research Tool</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2.docx" class="icon-doc">Advantages of Cooperative Research</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog3.docx" class="icon-doc">Creative Critical Thinking</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog4.docx" class="icon-doc">Enhancing Peer Review</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog5.docx" class="icon-doc">Algorithms and Transparent Critical Thinking</a>
							</div>
							
							<div class="col2">
								<h3>Idea Database</h3>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog1980.xlsx" class="icon-xls">1980-1984</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog1985.xlsx" class="icon-xls">1985-1989</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog1990.xlsx" class="icon-xls">1990-1994</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog1995.xlsx" class="icon-xls">1995-1999</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2000.xlsx" class="icon-xls">2000-2004</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2005A.xlsx" class="icon-xls">2005</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2006.xlsx" class="icon-xls">2006</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2007.xlsx" class="icon-xls">2007</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2008.xlsx" class="icon-xls">2008</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2009.xlsx" class="icon-xls">2009</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2010-11.xlsx" class="icon-xls">2010-2011</a>
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/dog2012-13.xlsx" class="icon-xls">2012-2013</a>
							</div>
					
						</div> <!-- /resources -->

					<?php endwhile; ?>

				<?php endif; ?>

<?php get_footer(); // Loads the footer.php template. ?>
	
	
