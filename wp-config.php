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
define( 'DB_NAME', 'office-page-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'oMMG1jhvc~6TgxY!rJVF~oGhC]aB[:mnwG@DB;..BcEIRp3rI;3nYhV#p^KnGsq{' );
define( 'SECURE_AUTH_KEY',  ':{Y4m;*{q5&)e}316msn=iL,:[8mw!HJUDhp;3azY}5+%5icu^?u^G(`-rm<I1KB' );
define( 'LOGGED_IN_KEY',    '.-wf$E2+2Zj]ZWu;(SF/Y=qz6tO%&9=n!tQ.aP(5sl#&/Zl?|}d(Q`rW!,5/]Ka9' );
define( 'NONCE_KEY',        '?UC[lx |C.UB_j|=&vNiA)01,flz~=|eV ^g66+P6wj@=5YEm_YoPRKXd*w&|8*^' );
define( 'AUTH_SALT',        '(qk&(/R./?4VIQ);F.G)K4V!P KyK D`l6Ra)CUy>Bj-b[9/%IZzPNsZ9fpAnW^H' );
define( 'SECURE_AUTH_SALT', '7v;2,F?Cz*5udN_%tuT%ocZ~]76d!9gl$5g!CZJ]0Y=_91 ]5 {*yNFt0u{4.J]d' );
define( 'LOGGED_IN_SALT',   '_*j1m-n}4;=Rpq/J@E+bU-8;ovGfKR$zJBi6$bl9Bwm@FT/V$x/_A]MWD~[IO/Wi' );
define( 'NONCE_SALT',       '-VNlix{cN0eyu}z=VkKg HAQSQ!,M/@Ri1[>7&i5lTcyiyw.Aldyn q3V?EqZOHC' );

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
