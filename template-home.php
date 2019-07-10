<?php
/**
  Template name: Home page
 */
get_header();

//$url = $_SERVER['REQUEST_URI'];
//echo $postid = url_to_postid($url);
if (!session_id())
  session_start();

$_SESSION['copyright_title'] = esc_html(get_field('copyright_title'));
$_SESSION['copyright_author'] = esc_html(get_field('copyright_author'));
$_SESSION['copyright_link'] = esc_html(get_field('copyright_link'));
$_SESSION['designer_title'] = esc_html(get_field('designer_title'));
$_SESSION['designer_author'] = esc_html(get_field('designer_author'));
$_SESSION['designer_link'] = esc_html(get_field('designer_link'));
?>

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="latest_blog text-center">
            <h2><?php echo esc_html(get_field('blog_title')) ?></h2>
            <p>
              <?php echo esc_html(get_field('blog_text')) ?>
            </p>
          </div>
        </div>
      </div>
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) { ?>
        <div class="row">
          <?php while ( $query->have_posts() ) {
            $query->the_post(); ?>
            <div class="col-md-4">
                  <div class="blog_news">
                    <div class="single_blog_item">
                      <div class="blog_img">
                        <?php echo get_the_post_thumbnail() ?>
                      </div>
                      <div class="blog_content">
                        <a href="<?php esc_url(the_permalink()); ?>">
                          <h3>
                            <?php the_title(); ?>
                          </h3>
                        </a>
                        <div class="expert">
                          <div class="left-side text-left">
                            <p class="left_side">
                              <span class="clock">
                                <i class="fa fa-clock-o"></i>
                              </span>
                              <span class="time">
                                  <?php echo get_the_date('M d, Y'); ?>
                              </span>
                              <a href="#">
                                <span class="admin">
                                  <i class="fa fa-user"></i>
                                  <?php the_author(); ?>
                                </span>
                              </a>
                            </p>
                            <p class="right_side text-right">
                              <a href="#">
                                <span class="right_msg text-right">
                                  <i class="fa fa-comments-o"></i>
                                </span>
                                <span class="count">
                                  <?php comments_number('0', '1', '%'); ?>
                                </span>
                              </a>
                            </p>
                          </div>
                        </div>
                        <?php  echo '<p class="blog_news_content">' . get_the_excerpt() . '</p>' ?>
                        <a href="<?php esc_url(the_permalink()); ?>" class="blog_link">
                          read more
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>

<?php
get_footer();
