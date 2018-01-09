<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>

  <div class="row">

    <?php foreach ($_items as $item): ?>

      <div class="col-lg-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo $_item['theme_name'] ?>" alt="Screenshoot"></a>
          <div class="card-body">
            <h4 class="card-title"><a href="#"><?php echo $_item['theme_name'] ?></a></h4>
            <h6 class="card-subtitle mb-2 text-muted">Made by <?php echo $_item['author_name'] ?></h6>
            <p class="card-text"><?php echo $_item['theme_description'] ?></p>
            <?php
    					if (!empty($_item['theme_demo_url'])) {
    						echo '<a class="btn btn-primary btn-sm" href="'.$_item['theme_demo_url'].'" role="button"><i class="fa fa-external-link" aria-hidden="true"></i> Live Demo</a>';
    					}

    					if (!empty($_item['theme_price_usd'])) {
    						echo '<a class="btn btn-secondary btn-sm" href="'.$_item['theme_download_url'].'" role="button"><i class="fa fa-external-link" aria-hidden="true"></i> Free Download</a>';
    					} else {
    						echo '<a class="btn btn-secondary btn-sm" href="'.$_item['theme_download_url'].'" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy $'.$_item['theme_price_usd'].'</a>';
    					}
    				?>
          </div>
        </div>
      </div>

    <?php endforeach ?>

  </div>

</div>
