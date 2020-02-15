<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spazi Sostenibili | Blog Architettura Milanese</title> 

	<?php	wp_head();	?>

    
<body  <?php body_class();?> >
    <header class="topbar">
        <div class="menu_icon">
            <div class="longbar"></div>
            <div class="shortbar"></div>
        </div>
        <?php wp_nav_menu([
			'theme_location' => 'main_menu',
			'container' => 'nav',
			'container_id' => '',
			'container_class' => 'menu',
			'menu_id' => '',
            'menu_class' => '',
            'before' => '<div class="hover_a_menu"></div>',
		])?>
        <!-- <nav class="menu">
                <a href="<?php echo(SS_URL)?>" class="linkmenu link1"> <div class="hover_a_menu hover1"></div> Home </a>
                <a href="about" class="linkmenu link2"> <div class="hover_a_menu hover2"></div> About</a>
                <a href="archivio" class="linkmenu link3"> <div class="hover_a_menu hover3"></div> Archivio</a>
                <img src="<?php echo SS_INCLUDES ?>img/black_full_logo.svg" alt="logo Spazi Sostenibili" class="logo_menu">
        </nav> -->
        <a href="<?php echo(SS_URL)?>" class="a_logo"><img src="<?php echo SS_INCLUDES ?>img/logo.svg" alt="Logo" class="logo"><p class="logo_p" >Spazi Sostenibili</p></a>
        <img src="<?php echo SS_INCLUDES ?>img/ricerca.svg" alt="Cerca" class="search">
        <div class="search_form_container">
            <form action="search.php" class="search_form" id="search_form">
                <input type="text" name="search_input">
            </form>
        </div>
    </header>