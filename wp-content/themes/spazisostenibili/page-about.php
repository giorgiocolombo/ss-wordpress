<?php /* Template Name: About */ ?>
<?php get_header() ?>
<?php 
    if ( have_posts() ){
        while ( have_posts() ){
            the_post();

?>
<h2 class="archivio_h2" data-aos="fade-down" data-aos-duration="300" data-aos-delay="600"><?php the_title()?></h2>
    <div class="cit" data-aos="zoom-in" data-aos-duration="600">
        <p class="italic" ><?php the_field('citazione'); ?></p>
        <p><?php the_field('citazioneautore') ?></p>
    </div>
    <div class="about" data-aos="fade-up" data-aos-duration="300" data-aos-delay="600">
        <div class="testo">
            <?php the_content()?> 
        </div>
        <div class="profile_pics">
            <div class="profile_pics_single">
            <?php $images = acf_photo_gallery('aboutpic', $post->ID); ?>
            <?php $firstimg=$images[0]; $secondimg=$images[1]; $linkfirstimg=$firstimg["full_image_url"]; $linksecondimg=$secondimg["full_image_url"];?>
                <div class="profile_pic_cover"></div>
                <img src="<?php echo($linksecondimg)?>" alt="Giorgio">
                <p class="name">Giorgio Colombo</p>
            </div>
            <div class="profile_pics_single">
                <div class="profile_pic_cover"></div>
                <img src="<?php echo($linkfirstimg)?>" alt="Giuseppe">
                <p class="name">Giuseppe Figliuolo</p>
            </div>
        </div>
    </div>
<?php 
        }
    }
?>
<?php get_footer() ?>