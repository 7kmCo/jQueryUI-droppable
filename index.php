<?php
require_once 'database.php';
$featured = get_featured('featured');
$teaser1 = get_featured('teaser1');
$teaser2 = get_featured('teaser2');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Connect lists</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
  <script src="js/app.js"></script>
</head>
<body>

  <div class="row">
    <div class="container">
    <pre>
      <div id="info" class="teal lighten-5">Waiting for update</div>
    </pre>

      <div class="col l8">

          <div id="featured" class="card">
            <div class="card-image">
              <img src="<?php echo $featured[0]['image']; ?>" />
              <span id="<?php echo $featured[0]['id']; ?>" class="card-title"><?php echo $featured[0]['title']; ?></span>
            </div>
            <div class="card-content">
              <p><?php echo $featured[0]['content']; ?></p>
            </div>
          </div>

      <div class="row">
        <div class="col m6">
          <div id="teaser1" class="card teaser" style="background-image: url(<?php echo $teaser1[0]['image']; ?>);">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $teaser1[0]['title']; ?></span>
              <p><?php echo $teaser1[0]['content']; ?></p>
            </div>
          </div>
        </div>

        <div class="col m6">
          <div id="teaser2" class="card teaser" style="background-image: url(<?php echo $teaser2[0]['image']; ?>);">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $teaser2[0]['title']; ?></span>
              <p><?php echo $teaser1[0]['content']; ?></p>
            </div>
          </div>
        </div>
      </div>

      </div>
      <div class="col l4">
        <h6 class="article-header teal lighten-4 strong">Drag articles to apropriate place</h6>
        <div id="draggable" class="sortableConnect fromDatabase">
          <?php include 'draggable.php'; ?>
          </div>

      </div>
    </div>
  </div>

</body>
</html>
