<?php
define('BLUDIT', true);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__.DS);
define('PATH_PHP', PATH_ROOT.'php'.DS);
define('PATH_METADATA', PATH_ROOT.'metadata'.DS);
define('CHARSET', 'UTF-8');
define('DOMAIN', 'https://themes.bludit.com');
define('CDN', 'https://df6m0u2ovo2fu.cloudfront.net');

// Returns the translation of the key
function l($key, $print=true) {
	global $languageArray;
	$key = mb_strtolower($key, CHARSET);
	$key = str_replace(' ','-',$key);
	if (isset($languageArray[$key])) {
		if ($print) {
			echo $languageArray[$key];
		} else {
			return $languageArray[$key];
		}
	}
}

// Returns the items order by date, new to old.
function getItems() {
	$tmp = array();
	$files = glob(PATH_METADATA.'*.json');
	foreach ($files as $file) {
		$json = file_get_contents($file);
		$data = json_decode($json, true);
		array_push($tmp, $data);
	}

	usort($tmp, "sortByDate");
	return $tmp;
}

function getItem($filename) {
	if (!file_exists(PATH_METADA.$filename.'.json')) {
		return false;
	}

	$json = file_get_contents(PATH_METADA.$filename.'.json');
	$data = json_decode($json, true);

	return $data;
}

function sortByDate($a, $b) {
    if ($a['theme_release_date'] == $b['theme_release_date']) {
        return 0;
    }
    return ($a['theme_release_date'] > $b['theme_release_date']) ? -1 : 1;
}

function sanitize($string) {
	$string = str_replace(' ', '-', $string);
	return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

// Language passed via $_GET['l']
$defaultLanguage = 'en';
$acceptedLanguages = array('en', 'de', 'es');
if (isset($_GET['l'])) {
	if (in_array($_GET['l'], $acceptedLanguages)) {
		$defaultLanguage = $_GET['l'];
	}
}

$json = file_get_contents(PATH_ROOT.'languages'.DS.$defaultLanguage.'.json');
$languageArray = json_decode($json, true);

// Top bar links
if ($defaultLanguage !== "en") {
	$_topbar = array(
		'documentation'=>'https://docs.bludit.com/'.$defaultLanguage.'/',
		'themes'=>'https://themes.bludit.com/'.$defaultLanguage.'/',
		'plugins'=>'https://plugins.bludit.com/'.$defaultLanguage.'/',
		'pro'=>'https://pro.bludit.com/'.$defaultLanguage.'/',
		'website'=>DOMAIN.'/'.$defaultLanguage.'/'
	);
} else {
	$_topbar = array(
		'documentation'=>'https://docs.bludit.com',
		'themes'=>'https://themes.bludit.com',
		'plugins'=>'https://plugins.bludit.com',
		'pro'=>'https://pro.bludit.com',
		'website'=>DOMAIN
	);
}

// Items and Item passed via $_GET['item']
$_items = false;
$_item = false;
$_whereAmI = 'home';

if (!empty($_GET['item'])) {
	$itemName = sanitize($_GET['item']);
	$_item = getItem($itemName);
	$_whereAmI = 'item';
	if ($_item===false) {
		$_whereAmI = 'notfound';
	}
} else {
	$_items = getItems();
	$_whereAmI = 'home';
}
