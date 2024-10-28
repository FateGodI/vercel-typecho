<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Pgsql', 'typecho_');
$db->addServer(array (
  'host' => 'ep-late-silence-a11cbicz.ap-southeast-1.aws.neon.tech',
  'port' => 5432,
  'user' => 'default',
  'password' => 'xyiotEMrXF61',
  'charset' => 'utf8',
  'database' => 'verceldb',
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
