<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'spazisostenibili' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<R#5,f26|hVY2g-s:^}$.T5BRL3Gi-Dw_|=zt#$otNNO`dtjv{PYYOns}hCA$nnQ' );
define( 'SECURE_AUTH_KEY',  'cuxG3SosQ^Sl3GOve*K[n?-h&Nu94mI I}8<<|R5uMtZjJth3,U9Iv&_{xXg0]IF' );
define( 'LOGGED_IN_KEY',    'Vhr2c)`7^JGzITxUr&VDk%3~1U}Jac=p*eBM2:oYKeE5oB&*4,CbH9V|AkD;ZT)>' );
define( 'NONCE_KEY',        '-HWMlba)i6MADHE<a2aV^Gm?wOVc!N$9bE4XT/ar>8;Z$#F-n}?e-4_c2wa.;1n+' );
define( 'AUTH_SALT',        '0fP.M|v$n<n[I!MR_#Y;qJv7koB6HCCFA{p~1e(oLV@<QL.Y 9];1_cs38!353)G' );
define( 'SECURE_AUTH_SALT', ' C.p3uk)!RuD|>.g]bg%gmXIP`=zxjf2~/}Z!xbLF!C3ZeMg-Qzb[>RSdIQd=*GU' );
define( 'LOGGED_IN_SALT',   'mf#FSbH)pRL)GJk)}&s[o9uWmugV3p{<D}*]GEuCPp!0NsAiANW9ogL9l8[dYL3C' );
define( 'NONCE_SALT',       '5l)Z8xMO#e*mAz&7auAol9KL$^Rv!hD5/x{*on40f<5u;::+X@-,`Q{|5&2-i<*P' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', true);

/**
 * define useful paths based on a staging or production environment
 */

 define( 'SS_IS_STAGING', true);

 define( 'SS_URL', ( SS_IS_STAGING ? 'http://localhost/ss-wordpress/' : 'https://ilsitodelmiocliente.com' ) );

 define( 'SS_INCLUDES', SS_URL.'wp-content/themes/spazisostenibili/inc/');

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
