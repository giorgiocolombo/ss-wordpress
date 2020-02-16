<?php get_header() ?>
<div class="preloader"> <img src="<?php echo SS_INCLUDES ?>img/logo.svg" alt=""> </div>
    <div class="container_home">
        <div class="header_home">
            <div class="container_text_header" data-aos="fade-right" data-aos-duration="600">
                <div class="spazi">
                    <p>SPAZI</p>
                    <div class="box_text_header"></div>
                </div>
                <p class="sostenibili">SOSTENIBILI</p>
            </div>
            <img data-aos="fade-left" data-aos-duration="300" data-aos-anchor-placement="top-center" data-aos-offset="-500" src="<?php echo SS_INCLUDES ?>img/bosco.jpg" alt="Bosco verticale" id="bosco2">
            <img data-aos="fade-left" data-aos-duration="300" data-aos-anchor-placement="top-center" data-aos-offset="-500" src="<?php echo SS_INCLUDES ?>img/bosco.jpg" alt="Bosco verticale" id="bosco1">
        </div>
    </div>

    <section class="payoff">
        <h1>Prospettive green a Milano</h1>
    </section>
    <section class="article_section">   
        <div id="article">
            <?php $the_query =  new WP_Query( array( 'posts_per_page' => 2, 'post_type' => 'post') ); ?>
                <?php $containerarticle=1; while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="container_article ca_<?php echo($containerarticle); $containerarticle++?>" data-aos="fade-up" data-aos-duration="600">
                    <div class="text_card">
                        <div class="tags">
                            <p><?php the_author()?></p>
    
                        </div>
                        <h2><?php the_title()?></h2>
                        <p class="text_card_p"><?php echo(get_the_excerpt())?></p>
                        <div class="interaction">
                            <a href="<?php the_permalink() ?>" class="button_article">Continua a leggere</a>
                        </div>
                    </div>
                    <div class="pic_card_container">
                        <img class="pic_card" src="<?php echo(get_the_post_thumbnail_url())?>">
                    </div>
                    <div class="green_card"></div>
                    <div class="pink_card"></div>
                    </div>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?> 
            </div>
    </section>
    <section id="gallery">
        <div class="gallery_posts" data-aos="fade-up" data-aos-duration="600">
        <?php $the_query =  new WP_Query( array( 'posts_per_page' => 6, 'post_type' => 'gallerie') ); ?>
                <?php $galleryitem=1; while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <a href="<?php the_permalink() ?>" class="gallery_item gallery_item_<?php echo($galleryitem); $galleryitem++?>">
                    <div class="gallery_cover"></div>
                    <p class="figcaption"><?php the_title()?></p>
                    <img src="<?php echo(get_the_post_thumbnail_url())?>" alt="Gallery 1" class="gallery_img">
                </a>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>      
        </div>
    </section>
    <section class="article_section">   
        <div id="article">
        <?php $the_query =  new WP_Query( array( 'posts_per_page' => 4, 'post_type' => 'post', 'offset' => 2) ); ?>
                <?php $containerarticle=3; while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="container_article ca_<?php echo($containerarticle); $containerarticle++?>" data-aos="fade-up" data-aos-duration="600">
                    <div class="text_card">
                        <div class="tags">
                            <p><?php the_author()?></p>
    
                        </div>
                        <h2><?php the_title()?></h2>
                        <p class="text_card_p"><?php echo(get_the_excerpt())?></p>
                        <div class="interaction">
                            <a href="<?php the_permalink() ?>" class="button_article">Continua a leggere</a>
                        </div>
                    </div>
                    <div class="pic_card_container">
                        <img class="pic_card" src="<?php echo(get_the_post_thumbnail_url())?>">
                    </div>
                    <div class="green_card"></div>
                    <div class="pink_card"></div>
                    </div>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?> 
    </section>
    <div class="link_to_archive_div">
        <a href="<?php echo(SS_URL)?>archivio" class="link_to_archive" data-aos="zoom-in" data-aos-duration="150" data-aos-delay="100">Vai all'archivio</a>
    </div>
<?php get_footer() ?>