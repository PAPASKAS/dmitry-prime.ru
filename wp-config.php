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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dmitry_prime.ru' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'dmitry_prime' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'mYt6Xp3].LrH]moM' );

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
define( 'AUTH_KEY',         '/J^;2eruYC.POgU=Vtp^WcOlPp}o`-pPzh.lE]#8r6U.1/ybh/LG58!.j|9rZGy~' );
define( 'SECURE_AUTH_KEY',  'Y5fSsY %:V<!^GaL1E#w<v_A+Y@Fv8| 9:Ph(,x<>lc(i 68h=3<~*slX:^96,WQ' );
define( 'LOGGED_IN_KEY',    '_5w6W)lz?;o1gqao;Jq_^+o_vWN8})zu)lbP{9uLt>khbKACW=k}y??iRpH;zwbO' );
define( 'NONCE_KEY',        '^[-GRx7iI^.5GRgN^BHADrK<@k+a,D?*m[;Vn=Q=}=&2~*?eK&bN.<@EQSIQUfP-' );
define( 'AUTH_SALT',        '`&g D{kxHFKRg<G>b:)Pt;I?!I,RLmhnmi7eTYfRU,1l+K+M4ouPIb7K(3[jtQX^' );
define( 'SECURE_AUTH_SALT', 'GG@t$;(_$p3=yOxx>Q(}o2K[Z!fPJ6Iz]6evF,OnGXNG%e%0,fW`piP/(kGx7M2a' );
define( 'LOGGED_IN_SALT',   'JOjT>g/2%li]G%iVw/fi$d&%:p4xX =msyH5rJ|4PHdy.(SoxH}!BqKg?Z%tH!Yf' );
define( 'NONCE_SALT',       '}6rl8lCfX_Qc/DlkDK)`oqWt.LJ#9{Z)OrJk:s|UwqPlQZ{G-`!e17n><|COIP[}' );

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
