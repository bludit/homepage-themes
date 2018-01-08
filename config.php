<?php
define('BLUDIT', true);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__.DS);
define('PATH_PHP', PATH_ROOT.'php'.DS);
define('CHARSET', 'UTF-8');
define('DOMAIN', 'https://themes.bludit.com');
define('CDN', 'https://df6m0u2ovo2fu.cloudfront.net');
define('FILES', PATH_ROOT.'files'.DS);

// Language passed via $_GET['l']
$defaultLanguage = 'en';
$acceptedLanguages = array('en', 'de', 'es');
if (isset($_GET['l'])) {
	if (in_array($_GET['l'], $acceptedLanguages)) {
		$defaultLanguage = $_GET['l'];
	}
}

$jsonData = file_get_contents(PATH_ROOT.'languages'.DS.$defaultLanguage.'.json');
$languageArray = json_decode($jsonData, true);

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

//
function listDirectories($path, $regex='*', $sortByDate=false) {
        $directories = glob($path.$regex, GLOB_ONLYDIR);
        if(empty($directories)) {
                return array();
        }
        if($sortByDate) {
                usort($directories, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
        }
        return $directories;
}