<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'fictional-university' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h3Mj5B4]qV8/,0B(6c_6nGc:22dw1nDHmmv&v(blO3?F}qB_=}&@_>2oz!1T*R,H' );
define( 'SECURE_AUTH_KEY',  'L0.rYB1x)aT5@Ox#WzX ln zV@gv$cx%.$;AQU*jj s--,eCvZb6Wv5=(& =GKaB' );
define( 'LOGGED_IN_KEY',    'bwe4dIG_889UM#iywI!H,<9p*KZ2a0/NoPj.GW%xDYZH1bI$~cQZ*V4x<Lp9<H%s' );
define( 'NONCE_KEY',        '5rq lBL-7mS@k[K~__ne#r#g(&xt,QymJD|56Cki9.QW0=c&3+@Dv7fW@g8YdNq(' );
define( 'AUTH_SALT',        'D6&f-$zsGE6g>@S7]s)e[~kJVl#R]5ObNwP#Nq/WH _}^V|9q5ER1yx};pMw}4C;' );
define( 'SECURE_AUTH_SALT', '?PMsCYaCjd~MH(,(OXvZAhP,&<0(T[f<8bt0EL*(n5I{ZZ+Vk*I-7^Jdku#puH:R' );
define( 'LOGGED_IN_SALT',   '4E,#Vvt89CIRo.0?:7AmI#,X^Suz!n;}[N62vp^ei3f$qTn,|<bzT(0E_atvoc D' );
define( 'NONCE_SALT',       'gCe~1CyAUo8B~qyeF@eosZ8L1xhs8Y_?/bH.K:d*Y_9/NNJr$<yC9o~fdy`g0>wl' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
