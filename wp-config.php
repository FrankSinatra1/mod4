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
define( 'DB_NAME', 'mod4' );

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
define( 'AUTH_KEY',         'mi7?E$KP{S|)`bk1$<7cUpy]8RplTeTy[s:{HiQxw2Zl8m<,$/,tSGJ|@6]}g{V;' );
define( 'SECURE_AUTH_KEY',  '|pp#Z.?i B+Q`bAOr#f7X(d#|eUct!bu5?Vc#s#@n&dz.t;7fd^Z8q/Z&VihyiIM' );
define( 'LOGGED_IN_KEY',    '-NhmI04kX5U0t12udVxGS9r`gNs^_$Jb5>5-yVw8:Ux2JcdCxxE#V @#K+>*e}EX' );
define( 'NONCE_KEY',        '&O52ppsow# gmaW]i(eWP;&z9Gp`Lw.Vdf(t0>-8x[t37Mti<#D=&4XrXH*|}esb' );
define( 'AUTH_SALT',        'bEf7?PY3eXmgBI-&cOF4yy%EmsgN7qEX,&~_fKZcINheY8l,CA+8at4GIv oOYOQ' );
define( 'SECURE_AUTH_SALT', 'f2(.M(!HI,%c+bpce(9C616_SD/F?ti01CS[VYQj3e$:KBUYG9Rp?b}#Z.}m%jy(' );
define( 'LOGGED_IN_SALT',   '4;UFpr;_fME%G(0i-$!$q7rb<Z7rDWzAJ=u|{qL6<|X[HtO;^yMXgWsFzRW/w;D*' );
define( 'NONCE_SALT',       'Z;l@kc#|Q=4L3J:Cai_c#.=~snHTT=RDtyO~weQ-QChg@AJynQAMzyHtlnOee5p+' );

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
