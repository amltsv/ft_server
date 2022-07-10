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
define( 'DB_NAME', 'wordpress_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'wNig85M>K-`n33_]v)PI(dc-g=[m%$|7!fdNe,-&nGi SWsy=-^@y>K}Udr@0I:@');
define('SECURE_AUTH_KEY',  '/Mbw)w7S$Z1AB)_Dq)*.]j&z< dbb{8<mW-Zihe,D7_u:ts(TD0W+<M`Y#H;NOtp');
define('LOGGED_IN_KEY',    'I;rk+<bI2DoQ:vbLD)=kW>PDl4MLwg pk@ 4clIiO0mXc(@wUCwkLdy|L|:z{`!&');
define('NONCE_KEY',        '0kOx(zV0B/^|*16|tN#3$wZ%,E-Op%|l|U7FJ;+IcE(C~tHktc1 NJ,sWO0rGU>Q');
define('AUTH_SALT',        'Y%Od08CwNPE mB>E`}|J~@3bNsG2WI~Hw6G|2T:c!5bo2%^}L:1 9}}W$0IL9yAt');
define('SECURE_AUTH_SALT', '>Cf@<*uf$5pjs-PE^?{1+B<pzTi??m36:+?KHu%DG0)bL&-V/oVH(4](@mA@Fh> ');
define('LOGGED_IN_SALT',   'zmZ+|YOhe2`a(0r-b<PMb0r?{AU[`wKcf%?WA3hQfVXUTVaw*!9A5,g,To=IS ,!');
define('NONCE_SALT',       's]S:`<Jvv@<vR.V-HBj<JK1dVASl;RS*(DR|3]*xW$-/3C48-{gloLp;zCT0XCYN');

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

