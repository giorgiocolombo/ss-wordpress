<?php get_header() ?>  
<?php 
    if ( have_posts() ){
        while ( have_posts() ){
            the_post();

?>
<div id="single">
    <div class="banner" data-aos="fade" data-aos-duration="900" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);""></div>
    <div class="single_container" data-aos="fade-up" data-aos-duration="450">
        <div class="date-n-author">
            <p><?php $data=get_the_date(); echo($data)?></p>
            <p>di <span><?php the_author();?></span></p>
        </div>

        <h1><?php the_title() ?></h1>

        <div class="line-divider"></div>
        
        <div class="article-side-container">
            <div class="side-text">
                <p><?php echo($data)?></p>
                <p>di <a href="about.php"><span><?php the_author()?></span></a></p>
                <ul>
                    <li><a href="https://www.instagram.com/" target="_blank"><img src="<?php echo SS_INCLUDES ?>img/instagram-logo-black.svg" alt="Spazi Sostenibili Instagram"></a></li>
                    <li><a href="https://www.facebook.com/" target="_blank"><img src="<?php echo SS_INCLUDES ?>img/facebook-logo-black.svg" alt="Spazi Sostenibili Facebook"></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><img src="<?php echo SS_INCLUDES ?>img/linkedin-logo-black.svg" alt="Spazi Sostenibili Linked In"></a></li>
                </ul>
            </div>
            <div class="article-text">
                <?php the_content() ?>

            </div>
        </div>
    </div>
</div>
<?php 
        }
    }
?>
<?php get_footer() ?>