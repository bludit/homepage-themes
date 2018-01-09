<div class="container mb-5">

	<h1 class="my-4"><?php echo $_item['name'] ?></h1>

	<div class="row">
		<div class="col-md-8">
			<img class="img-fluid" src="img/<?php echo $_item['filename'] ?>.png" alt="Screenshoot">
		</div>

		<div class="col-md-4">
			<div class="my-4">
				<h3 class="my-3">Description</h3>
				<p><?php echo $_item['description'] ?></p>
			</div>

			<div class="my-4">
				<h3 class="my-3">Features</h3>
				<ul>
					<?php
						foreach ($_item['features'] as $feature) {
							echo '<li>'.$feature.'</li>';
						}
					?>
				</ul>
			</div>

			<div class="my-4">
				<h4 class="my-3">Last update</h4>
				<?php echo $_item['release_date'] ?>
			</div>

			<div class="my-4">
				<?php
					if (!empty($_item['demo_url'])) {
						echo '<a class="btn btn-primary btn-block" href="'.$_item['demo_url'].'" role="button"><i class="fa fa-external-link" aria-hidden="true"></i> Live Demo</a>'.PHP_EOL;
					}

					if (!empty($_item['price_usd'])) {
						echo '<a class="btn btn-secondary btn-block" href="'.$_item['download_url'].'" role="button"><i class="fa fa-download" aria-hidden="true"></i> Free Download</a>'.PHP_EOL;
					} else {
						echo '<a class="btn btn-secondary btn-block" href="'.$_item['download_url'].'" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy $'.$_item['price_usd'].'</a>'.PHP_EOL;
					}
				?>
			</div>
		</div>
	</div>

</div>
