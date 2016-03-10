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

					<div class="wrapper-post">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<?php
								the_content();

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

					</div>

					<div class="container-featured">

						<div class="filters">
              <div class="tier1">
                <div class="container-filter">
                  <div class="button-group js-radio-button-group" data-filter-group="type">
                    <button class="button" id="btn-dimension" data-filter=".dimension">Dimension</button>
                    <button class="button" id="btn-time" data-filter=".time">Time and Content</button>
                  </div>
                </div>
              </div>
              <div class="tier2">
                <div class="container-filter tier2-dimension">
                  <div class="button-group js-radio-button-group" data-filter-group="dimension-select">
                    <button class="button" id="btn-disparity" data-filter=".disparity">Disparity</button>
                    <button class="button" id="btn-lgbt" data-filter=".lgbt">LGBT</button>
                  </div>
                </div>

                <div class="container-filter tier2-time">
                  <div class="button-group js-radio-button-group" data-filter-group="time-select">
                    <button class="button" id="btn-time-1990-2015" data-filter=".time-1990-2015">1990 - 2015</button>
                    <button class="button" id="btn-time-1990-1999" data-filter=".time-1990-1999">1990 - 1999</button>
                    <button class="button" id="btn-time-2000-2004" data-filter=".time-2000-2004">2000 - 2004</button>
                    <button class="button" id="btn-time-2005-2009" data-filter=".time-2005-2009">2005 - 2009</button>
                    <button class="button" id="btn-time-2010-2011" data-filter=".time-2010-2011">2010 - 2011</button>
                    <button class="button" id="btn-time-2012-2013" data-filter=".time-2012-2013">2012 - 2013</button>
                    <button class="button" id="btn-time-2014-2015" data-filter=".time-2014-2015">2014 - 2015</button>
                  </div>
                </div>
              </div>

              <div class="filters-info">Click above to view the associated files</div>

            </div>

            <div class="grid">
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/1 Age Dimension.xlsx" class="icon-doc">Age</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/2A Disease Dimension -- Adipose to Malignant.xlsx" class="icon-doc">Disease: Adipose - Malignant</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/2B Disease Dimension - Health.xlsx" class="icon-doc">Disease: Health</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/2C Disease Dimension - Mental - Tumor.xlsx" class="icon-doc">Disease: Mental - Tumor</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/3 Disparity Dimension.xlsx" class="icon-doc">Disparity</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/4A Ethnic Dimension Alaskan - Ethnic.xlsx" class="icon-doc">Ethnic: Alaskan - Ethnic</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/4B Ethnic Dimension Europe - Transcultural.xlsx" class="icon-doc">Ethnic: Europe - Transcultural</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/5 Gender Dimension.xlsx" class="icon-doc">Gender</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/6A Race Dimension Aboriginal - Race.xlsx" class="icon-doc">Race: Aboriginal - Race</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/6B Race Dimension Racial - White.xlsx" class="icon-doc">Race: Racial - White</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/7 Sex Dimension.xlsx" class="icon-doc">Sex</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/8A Socioeconomic Dimension -- Cultural - Minorities.xlsx" class="icon-doc">Socioeconomic: Cultural - Minorities</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/8B Socioeconomic Dimension -- Minority - SES .xlsx" class="icon-doc">Socioeconomic: Minority - SES</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/8C Socioeconomic Dimension -- Social - Workplace.xlsx" class="icon-doc">Socioeconomic: Social - Workplace</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/9A Treatment Dimension -- Abortion - Contraception.xlsx" class="icon-doc">Treatment: Abortion - Contraception</a></div>
              <div class="filter-item dimension disparity"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/9B Treatment Dimension --Coping - Vaccine.xlsx" class="icon-doc">Treatment: Coping - Vaccine</a></div>

              <div class="filter-item dimension lgbt"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/A1 Bisexual Dimension.xlsx" class="icon-doc">Bisexual</a></div>
              <div class="filter-item dimension lgbt"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/B2 Gay Dimension.xlsx" class="icon-doc">Gay</a></div>
              <div class="filter-item dimension lgbt"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/C3 Heterosexual Dimension.xlsx" class="icon-doc">Heterosexual</a></div>
              <div class="filter-item dimension lgbt"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/D4 Lesbian Dimension.xlsx" class="icon-doc">Lesbian</a></div>
              <div class="filter-item dimension lgbt"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/E5 LGBT Dimension.xlsx" class="icon-doc">LGBT</a></div>
              <div class="filter-item dimension lgbt"><a href="<?php bloginfo('template_directory'); ?>/library/docs/disparity/F6 Transgender Dimension.xlsx" class="icon-doc">Transgender</a></div>

              <div class="filter-item time time-1990-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/0-Disparity-Vocabulary.xlsx" class="icon-doc">Disparity - Vocabulary</a></div>
              <div class="filter-item time time-1990-1999"><a href="<?php bloginfo('template_directory'); ?>/library/docs/1 1990 disparity ideas Aboriginal-Workplace.xlsx" class="icon-doc">Aboriginal - Workplace</a></div>
              <div class="filter-item time time-2000-2004"><a href="<?php bloginfo('template_directory'); ?>/library/docs/2 2000 Disparity Ideas Access-Vision.xlsx" class="icon-doc">Access - Vision</a></div>
              <div class="filter-item time time-2005-2009"><a href="<?php bloginfo('template_directory'); ?>/library/docs/3 2005 Disparity Ideas Aboriginal-Caribbean.xlsx" class="icon-doc">Aboriginal - Caribbean</a></div>
              <div class="filter-item time time-2005-2009"><a href="<?php bloginfo('template_directory'); ?>/library/docs/3 2005 Disparity Ideas Caries-Environment.xlsx" class="icon-doc">Caries - Environment</a></div>
              <div class="filter-item time time-2005-2009"><a href="<?php bloginfo('template_directory'); ?>/library/docs/3 2005 Disparity Ideas Epidemic-Health.xlsx" class="icon-doc">Epidemic - Health</a></div>
              <div class="filter-item time time-2005-2009"><a href="<?php bloginfo('template_directory'); ?>/library/docs/3 2005 Disparity Ideas Hearing-Poor.xlsx" class="icon-doc">Hearing - Poor</a></div>
              <div class="filter-item time time-2005-2009"><a href="<?php bloginfo('template_directory'); ?>/library/docs/3 2005 Disparity Ideas Population-Workplace.xlsx" class="icon-doc">Population - Workplace</a></div>
              <div class="filter-item time time-2010-2011"><a href="<?php bloginfo('template_directory'); ?>/library/docs/4 2010 Disparity Ideas Aboriginal-Disparities.xlsx" class="icon-doc">Aboriginal - Disparities</a></div>
              <div class="filter-item time time-2010-2011"><a href="<?php bloginfo('template_directory'); ?>/library/docs/4 2010 Disparity Ideas Disparity-Ovarian.xlsx" class="icon-doc">Disparity - Ovarian</a></div>
              <div class="filter-item time time-2010-2011"><a href="<?php bloginfo('template_directory'); ?>/library/docs/4 2010 Disparity ideas Overweight-Workplace.xlsx" class="icon-doc">Overweight - Workplace</a></div>
              <div class="filter-item time time-2012-2013"><a href="<?php bloginfo('template_directory'); ?>/library/docs/5 2012 Disparity Ideas Aboriginal-Cataract.xlsx" class="icon-doc">Aboriginal - Cataract</a></div>
              <div class="filter-item time time-2012-2013"><a href="<?php bloginfo('template_directory'); ?>/library/docs/5 2012 Disparity Ideas Caucasian-Etiology.xlsx" class="icon-doc">Caucasian - Etiology</a></div>
              <div class="filter-item time time-2012-2013"><a href="<?php bloginfo('template_directory'); ?>/library/docs/5 2012 Disparity Ideas Europe-Korean.xlsx" class="icon-doc">Europe - Korean</a></div>
              <div class="filter-item time time-2012-2013"><a href="<?php bloginfo('template_directory'); ?>/library/docs/5 2012 Disparity Ideas Latino-Race.xlsx" class="icon-doc">Latino - Race</a></div>
              <div class="filter-item time time-2012-2013"><a href="<?php bloginfo('template_directory'); ?>/library/docs/5 2012 Disparity Ideas Racial-Workplace.xlsx" class="icon-doc">Racial - Workplace</a></div>
              <div class="filter-item time time-2014-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 2014 Disparity Ideas Aboriginal-Cirrhosis.xlsx" class="icon-doc">Aboriginal - Cirrhosis</a></div>
              <div class="filter-item time time-2014-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 2014 Disparity Ideas City - Emergency.xlsx" class="icon-doc">City - Emergency</a></div>
              <div class="filter-item time time-2014-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 2014 Disparity Ideas Employment - Heterosexual.xlsx" class="icon-doc">Employment - Heterosexual</a></div>
              <div class="filter-item time time-2014-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 2014 Disparity Ideas Hispanic - Pulmonary.xlsx" class="icon-doc">Hispanic - Pulmonary</a></div>
              <div class="filter-item time time-2014-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 2014 Disparity Ideas Race - Sexism.xlsx" class="icon-doc">Race - Sexism</a></div>
              <div class="filter-item time time-2014-2015"><a href="<?php bloginfo('template_directory'); ?>/library/docs/6 2014 Disparity Ideas Sexual - Workplace.xlsx" class="icon-doc">Sexual - Workplace</a></div>
            </div>

					</div> <!-- /container-featured -->

				</main>

			</div>
		</div>


<?php get_footer(); ?>