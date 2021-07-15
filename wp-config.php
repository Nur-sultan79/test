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
define( 'DB_NAME', 'test-wp' );

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
define( 'AUTH_KEY',         'AThv.dxbhAr[1?2ZPXZ7{[fG<MjyrO5C}GMy!v{s0@@:J:|T@~7BSw-#0aj]lC9S' );
define( 'SECURE_AUTH_KEY',  'NQ(IyPKefk7=8zZNt_cIho#Vu2<+g^kF>bDc.c{mD0egcl_E>~hwivTL6]|j2%`N' );
define( 'LOGGED_IN_KEY',    'mv@XeOBu=4i|5K|Hx0Z(2vwo}Vc)J{&]qGN+M:~qr6}kl5W,*u^D:$Wu[LJUJLfT' );
define( 'NONCE_KEY',        'Ejs|5vuRCjc^S(aCfO4e(fj54JW1_([kz(AoG9Y^kN@GyS7G&wjDm2T?K`!*{yg,' );
define( 'AUTH_SALT',        '-db}_yep~-Gy5 Fc+]q{A/{KWc9/3+6Lp]7+eV4XKAZ6}^H2f$&%5J_xF*?SVD:y' );
define( 'SECURE_AUTH_SALT', 'nbs_0Nrtm0X.5@5puQcY<F>=j}8HHFrn7N8btdK)*Ju{;}=Lf#7KMEmU}ZDMXTQX' );
define( 'LOGGED_IN_SALT',   '(.5xv6!f$^[;V>7Jd]2zz@BKl[3=h>3FXNz]~HKf8gVuOm,+~snltb{W$t3Xs,{Y' );
define( 'NONCE_SALT',       'i788kJS%F:oH(sqGKQRq&DN8cNZ&S^l@L.=2;=woXG;[yozai!s9-+tnDtN*|Umc' );

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
