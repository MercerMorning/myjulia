<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'myjulia' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+-I>Dv6u3Y /sM2#IcXqU[Lxk27Ow/M,GEb1lND_g/4nS0Hg+(EkP<i>1>dG.R=M' );
define( 'SECURE_AUTH_KEY',  '}5TmNUOd TP9c:<48#.i<$(==F-IC$4V(ZD4yF 2.^i8y:QbLu90  lmPp9%A3`%' );
define( 'LOGGED_IN_KEY',    'q,mJP1Tf61WPgxdcd])AT3NT4wbz/q@,@*>2w!S;_(^W@@O2KrAA}L{Kue#H)hpu' );
define( 'NONCE_KEY',        'AF{U)qb}}iaMRw1t@rrfUq*IB$h>n+R.HvLo}Q+?}Zc<EmTd_->jD[:KWdQ<hlY}' );
define( 'AUTH_SALT',        '/!Fsi0z`dC+P^w^4BW`=fe|;p6j/) 3~d!||oTw;OlE_7oB|H?+@C3*Xw+XT|8)O' );
define( 'SECURE_AUTH_SALT', 'Sqj2qy*nU6E.A-iY3P0CBt0y3p?dPhrOp75eEJEB3#kqCY#$9A/k-gCCPW6zm`0z' );
define( 'LOGGED_IN_SALT',   'G/d^F_U)qd:48.E}OtB br(({g]ncVc&V<H-uYxN2:[P4r|mBPeeY8|r#WsQRsR_' );
define( 'NONCE_SALT',       '7qfo#3/{_CQ`O#xN`DS.I1?bdJRy>8Y6MhMu&kkdo7-nj?,boI`z{{5T-:CnIt]3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
