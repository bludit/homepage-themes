<?php

define('BLUDIT', true);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__.DS);
define('PATH_HTML', PATH_ROOT.'html'.DS);
define('PATH_METADATA', PATH_ROOT.'metadata'.DS);
define('PATH_ITEMS', PATH_METADATA.'items'.DS);
define('PATH_AUTHORS', PATH_METADATA.'authors'.DS);
define('CHARSET', 'UTF-8');
define('GOOGLE_ANALYTICS', 'UA-67610404-7');


#define('DOMAIN', 'http://localhost:8000');
#define('CDN', 'http://localhost:8000/metadata/');

define('DOMAIN', 'https://themes.bludit.com');
define('CDN', 'https://rawgit.com/bludit/themes-repository/master/');

define('SCREENSHOT_DEFAULT', 'https://rawgit.com/bludit/themes-repository/master/templates/screenshot.png');

#define('ITEM_TYPE', 'plugin');
define('ITEM_TYPE', 'theme');

include('functions.php');
include('boot.php');
