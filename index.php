<?php get_header(); ?>


<?php
$slides = array(); 
$args = array( 'category_name' => 'slider', 'nopaging'=>true, 'posts_per_page'=>5 );
$slider_query = new WP_Query( $args );
if ( $slider_query->have_posts() ) {
    while ( $slider_query->have_posts() ) {
        $slider_query->the_post();
        if(has_post_thumbnail()){
            $temp = array();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
            $temp['title'] = get_the_title();
            $temp['excerpt'] = get_the_excerpt();
            $temp['image'] = $thumb_url;
            $slides[] = $temp;
        }
    }
} 
wp_reset_postdata();
?>

<?php if(count($slides) > 0) { ?>


<section id="slider">
        <div class="flexslider main-slider">
            <ul class="slides">
            <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
                <li>
                	<div class="container">
                        <div class="slider-info">
                            <div class="inner">
                                <h1><?php echo $title; ?></h1>
                                <div class="slider-text">
                                   <?php echo $excerpt; ?>
    
                                </div>
                                <a class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo $image ?>" alt="">
                </li>
                  <?php $i++; } ?>
            </ul>
        </div>
    </section>
    <?php } ?>
    <!-- slider close -->

    <div class="clearfix"></div>


    <!-- content begin -->
    <?php $welcomecontent = array(

        'post_type' => 'post',
        'post_status' => 'published',
        'category_name' => 'welcome-content',
        'posts_per_page' => 2
      );


      $arr_posts = new WP_Query($welcomecontent);
      if($arr_posts -> have_posts() ) :

          while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();

       ?>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="text-title">
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_excerpt(); ?></div>
                </div>

                <?php   
           endwhile;
          endif; 
        ?> 

        		<?php $advertisement_box = array(

        'post_type' => 'post',
        'post_status' => 'published',
        'category_name' => 'advertisement-box',
        'posts_per_page' => 3
      );


      $arr_posts = new WP_Query($advertisement_box);
      if($arr_posts -> have_posts() ) :

          while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();

       ?>

                <div class="span4">
                    <div class="featured-box">
                        <i class="icon-bookmark icon-4x"></i>
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>

                	  <?php   
           endwhile;
          endif; 
        ?>
            </div>



            </div>
            
            <!-- paralax background -->
            <section id="menu-parallax-bg" data-speed="5" data-type="background" style="background:url(<?php echo get_template_directory_uri(); ?>/img/bg-big-1.jpg) top center;">
            	<div class="container">
            	<div class="row fvrt-menu-bg">
                <div class="text-title">
                    <h2>Favorite Menu</h2>
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                </div>

                <!-- menu item begin -->

                <?php $favoutite_menu = array(

        'post_type' => 'post',
        'post_status' => 'published',
        'category_name' => 'favourite-menu',
        'posts_per_page' => 4
      );


      $arr_posts = new WP_Query($favoutite_menu);
      if($arr_posts -> have_posts() ) :

          while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();

       ?>

                <div class="span3 menu-item">
                    <a class="preview" href="<?php echo the_post_thumbnail(); ?>
                        <img data-original="<?php echo the_post_thumbnail(); ?></a>
                    <div class="text">
                        <h4><a href="css/index.html#"><?php the_title(); ?></a></h4>
                        <div class="teaser">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="price">
                            <?php echo get_post_meta($post->ID, 'Price', true); ?>
                        </div>
                    </div>
                </div>
               
                <!-- menu item close -->

               <?php   
           endwhile;
          endif; 
        ?>
         <!-- <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div> -->
                

            </div>
            </div>
            </section>
            
            
            <div class="container">


            <div class="row">
                <div class="span6">
                    <div class="text-title">
                        <h2>Latest News</h2>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                    </div>

                    <ul class="bloglist-small">
                        <li>
                            <div class="date-box">
                                <span class="day">28</span>
                                <span class="month">SEP</span>
                            </div>
                            <div class="txt">
                                <h4><a href="css/index.html#">Lorem ipsum sit amet</a></h4>
                                <span class="read">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem. <a href="#">Read more</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="date-box">
                                <span class="day">26</span>
                                <span class="month">SEP</span>
                            </div>
                            <div class="txt">
                                <h4><a href="css/index.html#">Lorem ipsum sit amet</a></h4>
                                <span class="read">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem. <a href="#">Read more</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="date-box">
                                <span class="day">18</span>
                                <span class="month">SEP</span>
                            </div>
                            <div class="txt">
                              <h4><a href="css/index.html#">Lorem ipsum sit amet</a></h4>
                                <span class="read">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem. <a href="#">Read more</a></span>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="span6">
                    <div class="text-title">
                        <h2>New Menu</h2>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                    </div>

                    <ul class="menu-list-2">
                        <li>
                            <a class="preview" href="img/menu/pic%20(12).jpg" data-gal="prettyPhoto" title="Your Title">
                                <img data-original="img/menu/pic%20(12).jpg" src="img/blank-1.gif" class="img-polaroid img-hover" alt=""></a>
                            <div class="text">
                                <h4>Neque porro quisquam</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div>
                        </li>

                        <li>
                            <a class="preview" href="img/menu/pic%20(9).jpg" data-gal="prettyPhoto" title="Your Title">
                                <img data-original="img/menu/pic%20(9).jpg" src="img/blank-1.gif" class="img-polaroid img-hover" alt=""></a>
                            <div class="text">
                                <h4>Neque porro quisquam</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>




<?php get_footer(); ?>