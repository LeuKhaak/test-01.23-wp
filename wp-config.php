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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'leu_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'rQTK!%.i1y^@K84)Q`oE$aC->Qb2sVW$M+nbVZ]p:7KOW5).dtwT#S*RCvd58KDF' );
define( 'SECURE_AUTH_KEY',  ':*v5P{eML:b[&F!/n}?B~EyqJUQ{%j3E_eWcxzhK34}<gV*gLcj1ThNb1~Ki;qZB' );
define( 'LOGGED_IN_KEY',    '+>`nZjr2KG|$(+xaA6I&3)Hm4 Uu.2`K pz .]s43>VUkz,$f~5g%d|yZF4C/YM<' );
define( 'NONCE_KEY',        'cS$vxv|D_)(~Hu~AthY@A>=O-!]h)=;#4%XhoPvry;x*zy c&V5_Y-s]q^XOlvY$' );
define( 'AUTH_SALT',        'r/2h[G#bU4%3[RG&f=e6QJ0tAaH,z.IKeR/SP##~(u=aIoqN>9%@C0|??G?N^=<7' );
define( 'SECURE_AUTH_SALT', '^e/C+rl:+{,;uO]{|=Nx 8Wc+NuB&?i2rj+Z{Rk)x&~}?1&^__ogR0^+v?xux)_~' );
define( 'LOGGED_IN_SALT',   ':`zpisOLBp_t3[sHX_/Xm >D{P$p}/-rgF|QAAM58(AZS>IyP^^!,.%mx3KmtXQp' );
define( 'NONCE_SALT',       'ua?UPAZ=.ZLi2;AEooTdZe7MQSK/G?OXZNa6U%[L#eT!8pm~6wK#0[fk]E. /- }' );

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
