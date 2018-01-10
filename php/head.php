<?php defined('BLUDIT') or die('Bludit'); ?>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php l('head title') ?></title>
	<meta name="description" content="<?php l('head description') ?>">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/img/favicon.png">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bludit" />
	<meta name="twitter:title" content="<?php l('head title') ?>" />
	<meta name="twitter:description" content="<?php l('head description') ?>" />
	<meta name="twitter:image" content="https://df6m0u2ovo2fu.cloudfront.net/images/bludit-twitter-cards.png" />

	<!-- Open Graph -->
	<meta property="og:locale" content="<?php echo $currentLanguage ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php l('head title') ?>" />
	<meta property="og:description" content="<?php l('head description') ?>" />
	<meta property="og:url" content="<?php echo $_topbar['website'] ?>" />
	<meta property="og:image" content="https://df6m0u2ovo2fu.cloudfront.net/images/bludit-facebook-cards.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Bludit Logo" />

	<!-- CSS files -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo DOMAIN ?>/css/bludit-themes.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Google hreflang tag -->
	<link rel="alternate" hreflang="en" href="<?php echo DOMAIN ?>" />
	<?php
		$tmpLanguages = $acceptedLanguages;
		unset($tmpLanguages[0]);
		foreach ($tmpLanguages as $lang) {
			echo '<link rel="alternate" hreflang="'.$lang.'" href="'.DOMAIN.'/'.$lang.'/"/>'.PHP_EOL;
		}
	?>

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67610404-7"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-67610404-7');
	</script>

</head>
