<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/opencart-final/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/opencart-final/');

// DIR
$store_domain = 'shopgeni';
define('STORE_DOMAIN', $store_domain);
define('DIR_APPLICATION', 'C:/xampp/htdocs/opencart-final/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/opencart-final/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/opencart-final/image/'.STORE_DOMAIN.'/');
define('DIR_STORAGE', 'C:/xampp/storage-opencart-final/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart-final24sep20');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');