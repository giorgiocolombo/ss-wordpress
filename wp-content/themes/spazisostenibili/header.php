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
		])?>
        <a href="<?php echo(SS_URL)?>" class="a_logo"><img src="<?php echo SS_INCLUDES ?>img/logo.svg" alt="Logo" class="logo"><p class="logo_p" >Spazi Sostenibili</p></a>
        <img src="<?php echo SS_INCLUDES ?>img/ricerca.svg" alt="Cerca" class="search">
        <div class="search_form_container">
            <form action="<?php echo(SS_URL)?>?s=" class="search_form" id="search_form">
                <input type="text" name="search_input">
            </form>
        </div>
    </header>