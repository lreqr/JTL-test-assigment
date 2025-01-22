<?php
define('PFAD_ROOT', 'C:\\OSPanel\\domains\\JTL_shop/');
define('URL_SHOP', 'http://jtlshop');
define('DB_HOST','localhost');
define('DB_NAME','jtlshop');
define('DB_USER','root');
define('DB_PASS','');

define('BLOWFISH_KEY', 'd3232492ff1681fd36b713d0c7fcf8');
// enables printing of warnings/infos/errors for the shop frontend
define('SHOP_LOG_LEVEL', E_ALL);
// enables printing of warnings/infos/errors for the dbeS sync
define('SYNC_LOG_LEVEL', E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
// enables printing of warnings/infos/errors for the admin backend
define('ADMIN_LOG_LEVEL', E_ALL);
// enables printing of warnings/infos/errors for the smarty templates
define('SMARTY_LOG_LEVEL', E_ALL);
// excplicitly show/hide errors
ini_set('display_errors', 0);
