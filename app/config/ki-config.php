<?php

// Saber si estamos trabajando en forma local o remota
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

// Definir el uso TimeZone del sistema
date_default_timezone_set('America/Lim');

// Lenguaje
define('LANG', 'es');

// Ruta base del proyecto
define('BASE_PATH', IS_LOCAL ? '/ki-framework/' : '___BasePathProduction___');

// Salt del sistema
define('AUTH_SALT', '8y2VPkaHjJ3RHxHUe8ABKzH$9d3DoLV25n@sf8STNu6nFA%Puk8g&JgPx@gkC2rb#^JSUigD@b2cQyE4J3Di3u^zuHYdU$w^U');

// Puerto y URL del sistema
define('PORT', '80');
define('URL', IS_LOCAL ? "http://127.0.0.1:".PORT."/ki-framework/" : '___UrlProduction');

// Las rutas de directorios y archivos
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);

// APP
define('APP', ROOT.'app'.DS);
define('CLASSES', APP.'classes'.DS);
define('CONFIG', APP.'config'.DS);
define('CONTROLLERS', APP.'controllers'.DS);
define('FUNCTIONS', APP.'functions'.DS);
define('MODELS', APP.'models'.DS);

// ASSETS
define('ASSETS', URL.'assets/');
define('CSS', ASSETS.'css/');
define('FAVICON', ASSETS.'favicon/');
define('FONTS', ASSETS.'fonts/');
define('IMAGES', ASSETS.'images/');
define('JS', ASSETS.'js/');
define('PLUGINS', ASSETS.'plugins/');
define('UPLOADS', ASSETS.'uploads/');

// TEMPLATE CON BASE URL
define('TEMPLATES', ROOT.'templates'.DS);
define('INCLUDES', TEMPLATES.'includes'.DS);
define('MODULES', TEMPLATES.'modules'.DS);
define('VIEWS', TEMPLATES.'views'.DS);

// Credenciales de la base de datos
// Set para conexion local o de desarrollo
define('LDB_ENGINE', 'mysql');
define('LDB_HOST', '127.0.0.1');
define('LDB_NAME', 'ki-framework');
define('LDB_USER', 'root');
define('LDB_PASS', '1234');
define('LDB_CHARSET', 'utf8');

// Set para conexion en producción o servidor real
define('DB_ENGINE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', '___REMOTE DB___');
define('DB_USER', '___REMOTE USER___');
define('DB_PASS', '___REMOTE PASS___');
define('DB_CHARSET', 'utf8');