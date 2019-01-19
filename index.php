<?php
	define('BLUDIT', true);
	include('config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $currentLanguage ?>">
<?php include(PATH_HTML.'head.php'); ?>
<body>
	<!-- Top Bar -->
	<?php include(PATH_HTML.'topnavbar.php'); ?>

	<!-- Main -->
	<?php
		if ($_whereAmI==='item') {
			include(PATH_HTML.'item.php');
		} elseif ($_whereAmI==='author') {
			include(PATH_HTML.'author.php');
		} else {
			include(PATH_HTML.'home.php');
		}
	?>

	<!-- Footer -->
	<?php include(PATH_HTML.'footer.php'); ?>

	<!-- Javascript stuff -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

	<script>
	$(document).ready(function() {
		// Default screenshot if not defined
		$(".item-screenshot").on("error", function(){
			$(this).attr("src", "<?php echo SCREENSHOT_DEFAULT ?>");
		});
	});
	</script>

	<!--
		Yandex.Metrika counter
		Masking IP addresses enabled for GDPR
	-->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(51983243, "init", {
		id:51983243,
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/51983243" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	
</body>
</html>
