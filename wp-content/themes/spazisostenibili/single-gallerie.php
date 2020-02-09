<?php get_header() ?>  
<?php 
    if ( have_posts() ){
        while ( have_posts() ){
            the_post();

?>
<section class="gallery_page_container">
        <div class="gallery_page_gallery">
            <div class="arrow arrow_prev">
                <img src="<?php echo SS_INCLUDES ?>img/back.svg" alt="Precedente">
                <p>Precedente</p>
            </div>
            <div class="arrow arrow_next">
                <p>Successiva</p>
                <img src="<?php echo SS_INCLUDES ?>img/next.svg" alt="Prossima">
            </div>
            <div class="gallery_img_container" 
        <a href="archive.php" class="link_to_archive">
                            
                <?php
                    $images = acf_photo_gallery('immagini', $post->ID);
                    $i = 0;
                    if( count($images) ):
                        foreach($images as $image):
                            $full_image_url= $image['full_image_url']; //Full size image url
                            if ($i==0){?>

                                <img class="img_general img_active" src="<?php echo($full_image_url) ?>">

                            <?php } else {?>

                        <img class="img_general" src="<?php echo($full_image_url) ?>">

                                
                            <?php } $i++?>
                <?php endforeach; endif; ?>
    

            </div>
        </div>
        <div class="gallery_page_info">
            <h2 class="gallery_page_title" data-aos="fade-down" data-aos-duration="300"><?php the_title()?></h2>
            <p class="gallery_page_description" data-aos="fade-down" data-aos-duration="300"><?php the_excerpt()?></p>
        </div>
        <div class="gallery_page_suggestions">
            <h2 data-aos="fade-up" data-aos-duration="300">Altre gallerie</h2>
            <div class="gallery_posts"data-aos="fade-up" data-aos-duration="300">
               
                <?php $the_query =  new WP_Query( array( 'post__not_in' => array(get_the_ID()), 'post_type' => 'gallerie', 'posts_per_page' => 4) ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="gallery_item">
                        <div class="gallery_cover"></div>
                        <p class="figcaption"><?php the_title() ?></p>
                        <img src="<?php the_post_thumbnail_url() ?>" alt="Gallery 1" class="gallery_img">
                    </a>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
                            
            </div>
        </div>
</section>
<?php 
        }
    }
?>
<?php get_footer() ?>