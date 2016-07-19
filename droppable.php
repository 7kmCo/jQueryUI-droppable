<?php
include 'functions.php';
$target = $_POST['targetID'];
$items = get_items($target[0]);
// echo "ID: " . $target[0];
// echo "Place: " . $target[1];

if ($target[1] == 'featured') {
?>

      <div class="card-image">
        <img src="<?php echo $items[0]['image']; ?>" />
        <span id="<?php echo $items[0]['id']; ?>" class="card-title"><?php echo $items[0]['title']; ?></span>
      </div>
      <div class="card-content">
        <p><?php echo $items[0]['content']; ?></p>
      </div>

<?php } else { ?>
    <div id="<?php echo $target[1]; ?>" class="card teaser" style="background-image: url(<?php echo $items[0]['image']; ?>);">
      <div class="card-content white-text">
        <span class="card-title"><?php echo $items[0]['title']; ?></span>
        <p><?php echo $items[0]['content']; ?></p>
      </div>
    </div>
<?php } ?>
