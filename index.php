<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Display Date and Time in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Display Date and Time in PHP</h1>
      </div>
          <div class="card-body">
            <?php date_default_timezone_set('Asia/Manila'); ?>
            <h4>Current Date: <?php echo date('y-m-d'); ?></h4>
            <h4>Current Time: <?php echo date('h:i:s a'); ?></h4>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>