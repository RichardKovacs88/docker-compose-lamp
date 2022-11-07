<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'wordpress' );

/** MySQL felhasználónév */
define( 'DB_USER', 'user' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', 'local123' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'database' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'NoiTdz*!g-/&W#Byq`Hvr9tqD5l+Ogb}8c-[~^ZdjhAJ&aH@aBe^l[p=Ba?3sMd]' );
define( 'SECURE_AUTH_KEY', 'F#B^+5wK<X^nuWU<J+sc]hQRO.nN+_C4ll+06tRhMrOyS<^1vK}yY(;XrP;fJtE[' );
define( 'LOGGED_IN_KEY', 'I`(xStEyy.)r|+v$U+AL%`#Wi+7w+3gDer)l:5fZ]+DO)20cE!=5/X$,Qx3bm0x_' );
define( 'NONCE_KEY', 'leTQhjVDrd^<wzrM~%#GNC7ToCq~5`:.n7<2Cs;e*Ck&-BTiL8l=8Q%_MRd-6>=1' );
define( 'AUTH_SALT',        '2}Qg(jrqIMFk}Xj22hns7sM(x:2xUI{mTcCd<0wLY|=,^$5KQEuUtMbP/;2O1LB&' );
define( 'SECURE_AUTH_SALT', 'bit0i5WjZ6pgd&ggs>9%OkO8=T://F_s{I:[-dV~73T:nnPVG`v&YYWK$V6i:}o.' );
define( 'LOGGED_IN_SALT',   'Y7lPUL}1#[WR(%P0~;q66oX&>m=/)?dyb1AUVO/)ZuFH>nE;h.uV!A%*}OyhIG#q' );
define( 'NONCE_SALT',       'b`PP=9/q0dL?CF~&v+):;Wp,9;rTViV!VOuD*,^8=G<G0(QrOj.F=|%^MytE}V0x' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
