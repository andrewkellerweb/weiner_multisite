

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

					<?php endwhile; ?>
				<?php endif; ?>

				<div class="resources">
					
					<h2>Available Resources</h2>
					
					<div class="col">
						<h3>eBook</h3>
						<p>There are two themes in the eBook:</p>
<ul class="bullet"><li><span>1</span>Using ideas and algorithms in the processing of these ideas.  As a result, the individual can spend about 90% time considering the higher cognitive functions rather than the traditionally accepted procedures involved in search, retrieval, and analysis. </li> 
<li><span>2</span>Realizing that the millions of ideas presented by the authors can be used to advantage.</li></ul>
<a href="/ebook">More</a>
					</div>
					
					<div class="col">
						<h3>Vocabularies</h3>
<p>These data consist of each term and the frequency of occurrence of ideas involving the term.  </p>
<a href="/vocabularies">More</a>
					</div>

					<div class="col">
						<h3>Idea Database</h3>
<p>The idea structure is composed of two terms – the primary and the related one.  In addition, each record provides the time period, the identification number assigned by PubMed to the document, and the number of the sentence containing the idea.</p>
<p>The ideas in this set number over 1.2 million and their use varies with the emphasis of the intended analysis. It is convenient to divide the total set of ideas into temporal classes.  The time periods selected were: 1980-9, 1990-9, 2000-4, 2005-9, 2010-13.  </p>
<p>Specific topics may be of interest over and above the temporal separation. The topics selected were caries, periodontal disease, and dental treatments.</p>

<a href="/idea-databases">More</a>
					</div>
			
				</div> <!-- /resources -->
			</div>


<?php get_footer(); // Loads the footer.php template. ?>
	
	
