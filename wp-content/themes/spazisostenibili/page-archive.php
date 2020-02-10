<?php /* Template Name: Archivio */ ?>
<?php get_header() ?>

    
<h2 class="archivio_h2" data-aos="fade-down" data-aos-duration="300"><?php the_title()?></h2>

<div class="archive_page_container">
                <?php $the_query =  new WP_Query( array( 'post_type' => array( 'post', 'gallerie') ) ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <?php if (get_post_type()=="gallerie"){?>

                        <div class="container_gallery_archive" data-aos="fade-up" data-aos-duration="300">
                        <div class="text_card">
                            <h2><?php the_title()?></h2>
                            <p class="text_card_p"><?php echo get_the_excerpt();?></p>
                            <div class="interaction">
                                <a href="<?php echo the_permalink()?>" class="button_article">Guarda la gallery</a>
                            </div>
                        </div>
                        <?php $images = acf_photo_gallery('immagini', $post->ID); ?>
                        <?php $firstimg=$images[2]; $secondimg=$images[3]; $linkfirstimg=$firstimg["full_image_url"]; $linksecondimg=$secondimg["full_image_url"];?>
                        <div class="pic_card_container">
                            <img class="pic_card" src="<?php the_post_thumbnail_url()?>">
                        </div>
                        <div class="green_card">
                            <img class="pic_card" src="<?php echo($linkfirstimg)?>">
                        </div>
                        <div class="pink_card">
                            <img class="pic_card" src="<?php echo($linksecondimg)?>">
                        </div>
                    </div>

                    <?php } else {?>

                    <div class="container_article_archive" data-aos="fade-up" data-aos-duration="300">
                    <div class="text_card">
                        <div class="tags">
                            <p><?php the_author()?></p>
                        </div>
                        <h2><?php the_title()?></h2>
                        <p class="text_card_p"><?php echo get_the_excerpt();?></p>
                        <div class="interaction">
                            <a href="<?php the_permalink()?>" class="button_article">Continua a leggere</a>
                        </div>
                    </div>
                    <div class="pic_card_container">
                        <img class="pic_card" src="<?php the_post_thumbnail_url()?>">
                    </div>
                    <div class="green_card"></div>
                    <div class="pink_card"></div>
                </div>

                    <?php }?>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>            

</div>

<?php get_footer() ?>