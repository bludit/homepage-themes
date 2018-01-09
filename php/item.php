<div class="container">

	<h1 class="my-4"><?php echo $_item['theme_name'] ?></h1>

	<div class="row">
		<div class="col-md-8">
			<img class="img-fluid" src="<?php echo $_item['theme_name'] ?>" alt="Screenshoot">
		</div>

		<div class="col-md-4">
			<div class="my-4">
				<h3 class="my-3">Description</h3>
				<p><?php echo $_item['theme_description'] ?></p>
			</div>

			<div class="my-4">
				<h3 class="my-3">Features</h3>
				<ul>
					<?php
						foreach ($_item['theme_featues'] as $feature) {
							echo '<li>'.$feature.'</li>';
						}
					?>
				</ul>
			</div>

			<div class="my-4">
				<?php
					if (!empty($_item['theme_demo_url'])) {
						echo '<a class="btn btn-primary btn-block" href="'.$_item['theme_demo_url'].'" role="button"><i class="fa fa-external-link" aria-hidden="true"></i> Live Demo</a>';
					}

					if (!empty($_item['theme_price_usd'])) {
						echo '<a class="btn btn-secondary btn-block" href="'.$_item['theme_download_url'].'" role="button"><i class="fa fa-external-link" aria-hidden="true"></i> Free Download</a>';
					} else {
						echo '<a class="btn btn-secondary btn-block" href="'.$_item['theme_download_url'].'" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy $'.$_item['theme_price_usd'].'</a>';
					}
				?>
			</div>
		</div>
	</div>

	<div class="my-5 text-right">
		<a class="btn btn-secondary" href="#" role="button">Next Theme <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	</div>

</div>
