<?php
/*
 Template Name: Homepage
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>

							</article>

							<?php endwhile; ?>
							<?php endif; ?>

							<div class="container-featured">
								<div id="svgContainer"></div>

								<article class="featured-list" id="circle">
									<div class="title">
										<p class="line1">Major Ideas in</p>
										<p class="line2">Disaster<p>
										<p class="line3">Research</p>
									</div>
								</article>

								<div class="list">
									<ul class="main-list col1" >
										<li id="earthquake"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Earthquake Ideas Vocabulary.xlsx">Earthquake</a></li>
										<li id="drought"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Drought ideas vocabulary.xlsx">Drought</a></li>
										<li id="disaster"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Disaster Ideas Vocabulary.xlsx">Disaster</a></li>
										<li id="experience"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Expereince Ideas Vocabulary.xlsx">Experience</a></li>
										<li id="tsunami"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Tsunami  ideas vocabulary.xlsx">Tsunami</a></li>
										<li id="tornado"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Tornado Ideas Vocabulary.xlsx">Tornado</a></li>
										<li id="terror"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Terror Ideas Vocabulary.xlsx">Terror</a></li>
										<li id="hurricane"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Hurricane Ideas Vocabulary.xlsx">Hurricane</a></li>
										<li id="flood"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Flood Ideas Vocabulary.xlsx">Flood</a></li>
										<li id="epidemic"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Epidemic Pandemic ideas vocabulary.xlsx">Epidemic/Pandemic</a></li>
										<li id="emergency"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014  Emergency ideas vocabulary.xlsx">Emergency</a></li>
										<li id="primary"><a class="type" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-2014 Primary Vocabulary.xlsx">Primary Vocabulary</a></li>
									</ul>

									<ul class="main-list col2" >
										<li id="year1990-99"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 1990-99 ideas vocabulary.xlsx">1990-99</a></li>
										<li id="year2000-2003"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2000-2003 ideas vocabulary.xlsx">2000-2003</a></li>
										<li id="year2004-2006"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2004-2006 ideas vocabulary.xlsx">2004-2006</a></li>
										<li id="year2007"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2007 ideas vocabulary.xlsx">2007</a></li>
										<li id="year2008"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2008 ideas vocabulary.xlsx">2008</a></li>
										<li id="year2009"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2009 ideas vocabulary.xlsx">2009</a></li>
										<li id="year2010"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2010 ideas vocabulary.xlsx">2010</a></li>
										<li id="year2011"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2011 ideas vocabulary.xlsx">2011</a></li>
										<li id="year2012"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2012 ideas vocabulary.xlsx">2012</a></li>
										<li id="year2013"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2013 ideas vocabulary.xlsx">2013</a></li>
										<li id="year2014"><a class="time" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 2014 ideas and vocabulary.xlsx">2014</a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
						</div>

						<div class="content">
							<h3>eBook</h3>
							<ul class="ebook-list">
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/0 Preface.docx" class="icon-doc">Preface</a></li>
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/1 Learning.docx" class="icon-doc">Learning</a></li>
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/2 Literature Analysis.docx" class="icon-doc">Literature Analysis</a></li>
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/3 Critical Thinking.docx" class="icon-doc">Critical Thinking</a></li>
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/4 Integrating Subjects.docx" class="icon-doc">Integrating Subjects </a></li>
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/5 Unanswered Questions.docx" class="icon-doc">Unanswered Questions</a></li>
								<li><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 Research.docx" class="icon-doc">Research</a></li>
							</ul>
						</div>
					</main>

				</div>

			</div>


<?php get_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.html-svg-connect.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#svgContainer").HTMLSVGconnect({
      stroke: "white",
      strokeWidth: 4,
      orientation: "auto",
      paths: [
        { start: "#circle", end: "#earthquake", },
        { start: "#circle", end: "#drought", },
        { start: "#circle", end: "#disaster", },
        { start: "#circle", end: "#tsunami", },
        { start: "#circle", end: "#typhoon", },
        { start: "#circle", end: "#tornado", },
        { start: "#circle", end: "#terror", },
        { start: "#circle", end: "#hurricane", },
        { start: "#circle", end: "#epidemic", },
        { start: "#circle", end: "#emergency", },
        { start: "#circle", end: "#flood", },
        { start: "#circle", end: "#experience", },
        { start: "#circle", end: "#primary", },
        { start: "#circle", end: "#year1990-99", },
        { start: "#circle", end: "#year2000-2003", },
        { start: "#circle", end: "#year2004-2006", },
        { start: "#circle", end: "#year2007", },
        { start: "#circle", end: "#year2008", },
        { start: "#circle", end: "#year2009", },
        { start: "#circle", end: "#year2010", },
        { start: "#circle", end: "#year2011", },
        { start: "#circle", end: "#year2012", },
        { start: "#circle", end: "#year2013", },
        { start: "#circle", end: "#year2014", }
      ]
    });
  });
</script>
