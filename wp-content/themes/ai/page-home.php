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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main>

    <div class="page-top__stage">
      <div class="page-top__boundary">

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

      </div>
    </div>

    <div class="page-main__stage">
      <div class="page-main__boundary">

        <div class="page-main__summary">
          This site presents two important resources. The first is an eBook describing the benefits of Gestalt learning using Contextual Analysis. The second is a set of idea databases describing the scholarly artificial intelligence literature for the period 2013-2017. These idea databases will be maintained and updated.
        </div>

        <div class="page-main__lists">
          <div class="page-main__list-ebook list__stage">
            <h2 class="list__title">eBook
              <a href="#" class="tooltip">
                <div class="tooltip__icon">more info</div>
                <div class="tooltip__content -ebook">
                  <p><strong>Ideas -- Bridge to Knowledge</strong><br>
                  This book illustrates the power and capabilities associated with Contextual Analysis, a branch of Artificial Intelligence (AI) devoted to text analysis.</p>

                  <p>Ideas have been important in advancing knowledge and changing behaviors throughout history.  The results facilitate cognitive effort unprecedented using manual methods.  The findings suggest that computers can play a significant role in critical and creative thinking.</p>
                </div>
              </a>
            </h2>
            <ul class="list__items">
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI1  -- Preface .docx"><strong>AI 1:</strong> Preface</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI2 -- New Tools to Meet New Challenges.docx"><strong>AI 2:</strong> New Tools to Meet New Challenges</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI3 -- Power of Ideas.docx"><strong>AI 3:</strong> Power of Ideas</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI4 -- Examples of Concept Structures.docx"><strong>AI 4:</strong> Examples of Concept Structures</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI5 -- Discrimination in Treatment Minorities.docx"><strong>AI 5:</strong> Discrimination in Treatment Minorities</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI6 -- Dental Management Chronic Disease.docx"><strong>AI 6:</strong> Dental Management Chronic Disease</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI7 -- Creative Critical Thinking Idea Databases.docx"><strong>AI 7:</strong> Creative Clinical Thinking Using Idea Databases</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI8 -- Traditional Peer Review vs. Contextual Analysis.docx"><strong>AI 8:</strong> Traditional Peer Review vs. Contextual Analysis</a>
              </li>
              <li class="list__item">
                <a class="list__link" href="<?php bloginfo('template_directory'); ?>/library/docs/AI9 -- Innovation and Ideas.docx"><strong>AI 9:</strong> Innovation and Ideas</a>
              </li>
            </ul>
          </div>

          <div class="page-main__list-idea list__stage">
            <h2 class="list__title">Idea Databases
              <a href="#" class="tooltip">
                <div class="tooltip__icon">more info</div>
                <div class="tooltip__content -idea">
                  <p><strong>Vocabulary Used in Ideas 2013-2017</strong><br>
                  The vocabulary consists of 348 informative terms (nouns, adjectives, and gerunds).  This display differs from the usual array by focusing on the number of times each term is linked with others.  The terms are ranked by frequency of occurrence in ideas over the 5 year period.</p>
                  <p>For example, the number of support related ideas shown in 2013 was 6572.  Those ideas are found in the Excel file labeled 2013 AI s-w.</p>
                  <p>Using the REPLACE option, enter the term --support-- in the FIND and REPLACE boxes.  Select Replace All option. </p>

                </div>
              </a>
            </h2>
            <div class="list__set">
              <div class="list__set__title">2013</div>
              <ul class="list__items list__set__items">
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2013 AI a-d.xlsx"><strong>AI:</strong> a - d</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2013 AI e-l.xlsx"><strong>AI:</strong> e - l</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2013 AI m-r.xlsx"><strong>AI:</strong> m - r</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2013 AI s-w.xlsx"><strong>AI:</strong> s - w</a>
                </li>
              </ul>
            </div>
            <div class="list__set">
              <div class="list__set__title">2014</div>
              <ul class="list__items list__set__items">
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 AI a-d.xlsx"><strong>AI:</strong> a - d</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 AI e-l.xlsx"><strong>AI:</strong> e - l</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 AI m-r.xlsx"><strong>AI:</strong> m - r</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2014 AI s-w.xlsx"><strong>AI:</strong> s - w</a>
                </li>
              </ul>
            </div>
            <div class="list__set">
              <div class="list__set__title">2015</div>
              <ul class="list__items list__set__items">
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2015 AI a-d.xlsx"><strong>AI:</strong> a - d</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2015 AI e-l.xlsx"><strong>AI:</strong> e - l</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2015 AI m-r.xlsx"><strong>AI:</strong> m - r</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2015 AI s-w.xlsx"><strong>AI:</strong> s - w</a>
                </li>
              </ul>
            </div>
            <div class="list__set">
              <div class="list__set__title">2016</div>
              <ul class="list__items list__set__items">
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2016 AI a-d.xlsx"><strong>AI:</strong> a - d</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2016 AI e-l.xlsx"><strong>AI:</strong> e - l</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2016 AI m-r.xlsx"><strong>AI:</strong> m - r</a>
                </li>
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2016 AI s-w.xlsx"><strong>AI:</strong> s - w</a>
                </li>
              </ul>
            </div>
            <div class="list__set">
              <div class="list__set__title">2017</div>
              <ul class="list__items list__set__items">
                <li class="list__set__item">
                  <a class="list__link list__set__link" href="<?php bloginfo('template_directory'); ?>/library/docs/2017 AI a-w.xlsx"><strong>AI:</strong> a - w</a>
                </li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>

  </main>

<?php endwhile; ?>
<?php endif; ?>

<script type="text/javascript">
  tooltipButton = document.querySelectorAll('.tooltip');

  $(window).click(function() {

    tooltipButton.forEach(function(item) {
      item.blur();
    });
  });

  tooltipButton.forEach(function(item) {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      if (item.classList.contains('active')) {
        item.blur();
        console.log('blur');
        item.classList.remove('active');
      } else {
        item.classList.add('active');
        console.log('active');
      }
    });
  });
</script>

<?php get_footer(); ?>