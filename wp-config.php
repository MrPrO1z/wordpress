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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'tc' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7Y:tOCJ%rgH{N&u2GY@k13o%~]VFR}Y[_+v~_T4=9H/W6F=z<W~ZYj&&u;}fhlnQ' );
define( 'SECURE_AUTH_KEY',  'F.]os}v`v`XC(eN*]O<~iez1 qWHUGom|9sJVO>8Y=/Ej_>m:;+i6<^ lPB ?KBs' );
define( 'LOGGED_IN_KEY',    'yZ _l}UnLC`:j,3rkFb~/oJqqJSWK]!S!JFOjMBzh8aOxE+/Myw5CSUnA>>/q2j=' );
define( 'NONCE_KEY',        '$tryfZqJ>l(gC)#_!B@;]Qy;wpr<1Prao<Cl_).vkp9fNXS<hFntc9Fq%4ie7.rM' );
define( 'AUTH_SALT',        'X/v$/}o-}R:y0{0$qf2_ql]b~B3(5)w{@~97;NHxVRjW@D0tXDy@SI%6(W-]/}]$' );
define( 'SECURE_AUTH_SALT', 'WB0K3}rQ<g,:_C{,^z= >^ep6_ny,KqWrTPvg{=e1j`!CCQQ%$sx-8/2=9;]Iiml' );
define( 'LOGGED_IN_SALT',   'Y9nKX&B!Ypi2FITR=FaT9]Y;K:$|+,QM>W@1s`M%#jdMS:_Ltnf{:%qqLzPM>tVW' );
define( 'NONCE_SALT',       'fIX;_D(Bd>x7Vba#UONUxnl>9L8k^z!x04^LxY_#{(6wO(Hj+5jl>S|/[eBR2U[|' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
