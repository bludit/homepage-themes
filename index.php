<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

	<script>
	$(document).ready(function() {
		// Default screenshot if not defined
		$(".item-screenshot").on("error", function(){
			$(this).attr("src", "<?php echo SCREENSHOT_DEFAULT ?>");
		});
	});
	</script>

</body>
</html>