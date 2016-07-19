<?php
require_once 'functions.php';

$items = get_items();

  foreach ($items as $item) { ?>
    <div id="<?php echo $item['id']; ?>" class="card draggable">
      <div class="card-image">
        <img src="<?php echo $item['image']; ?>" />
        <span id="cardTitle" class="card-title"><?php echo $item['title']; ?></span>
      </div>
      <div class="card-content">
        <p><?php echo $item['content']; ?></p>
      </div>
    </div>
    <?php } ?>
