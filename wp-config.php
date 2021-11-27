<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
define( 'DB_NAME', 'net21' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Gz+KWmYVX/3gG+W MH9}_BI`W+`30dBomv6Ssj H;qzfZ)qn,1g%-,l5uv8uXG|V' );
define( 'SECURE_AUTH_KEY',  '+?4i?PT3*^fcb8&I4=I?IHY7+`&!-VWkM6|tO?iQ?pTc^jjIr:y(zbYOe:`KB#1T' );
define( 'LOGGED_IN_KEY',    'NuQu(ikpKR24ylz/m/>6SRW}j1dSY122,#lAr4qxoK?bE[d^6;1b)%?{Jl5,+<y6' );
define( 'NONCE_KEY',        'Ux^`m5IkuCKklrpfG)<W0NJc;3DO^y;^V3Mmava(%RP6|cOy]6^2hQ bg-P=!?Z[' );
define( 'AUTH_SALT',        'g`zp7~4IgxS,{p5Fu^q.fak9_1%/z*W9TV:~(!V{`Fes6.4JaS2iA VKftn Z3O3' );
define( 'SECURE_AUTH_SALT', 'r/$3.U)r36GM=c,r.F|Ze;xE2_9ev^+mC@Evp_};90jt=l<}5KHlpFp=6+MR|0qk' );
define( 'LOGGED_IN_SALT',   'k$T;bHbt54L:VrxDDx2b(QU_ V.+wQ9}zoC@qKEI #M@blGmAN!#338EGi+OHE$_' );
define( 'NONCE_SALT',       'V2,5!{3(cjl8%|8X%)dIuaA/)%Dum3xpnf*W5bUFth7WoD$[-3KfLV>(`fU4AC;&' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
