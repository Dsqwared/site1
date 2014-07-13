<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'site1');

/** Имя пользователя MySQL */
define('DB_USER', 'site1');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '53042222');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HJb+HVHPtBEqS)0X{[3SWV,^juK/UH)>lFSN0,Dzc<9$O.%`WeBqf0e6x!V<:J5B');
define('SECURE_AUTH_KEY',  'Xf~Bq> EDt9j9>eCwp<Zb.w.+@8+PLq3m)ieHAkyRAMeCJ|PW_YxQ@RnI_V,Zn*?');
define('LOGGED_IN_KEY',    '*xl>l2Y6uFBopj4b{K$Q/Q;1ulk@&Rn%b.5Hlpt${L suSR6?&oz70i|0f?YymrW');
define('NONCE_KEY',        'D$d IEan QNz)G^&Z:Y*(AlW`!>YBNjlR;7tAsL>3LqlI=gH8 >51I=V9>zuQ)W:');
define('AUTH_SALT',        'Bta.[k.|H?jLbxv1L{jM.K|B0!R0GbAr|jR!fcC1}_9s:ceav|9)VxTdM}8sHTR%');
define('SECURE_AUTH_SALT', '&U GWUZ}7omE]EdNU.T[QET/xg@P~&;H>PT`JV{kZF<}W~xfYpD%o0]D6Ru]$*nE');
define('LOGGED_IN_SALT',   'j1e?JAi>mp6>khg.#fe.xD=[rdE12h?y|)q/[?YN~H>-0gnXkxzIw7>E&T}Se MU');
define('NONCE_SALT',       '?cSZd`e#cC!>*[O.<&/sZ M-/+N?G%yYRZMct66pNMZgb!/F((8pEP_-{/c84f|g');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
