<?php
$open = true;
require 'lib/site.inc.php';
$view = new Clue\SignView($site, $_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $view->head();?>
</head>
<body>
<div class="index">
<header>
    <?php echo $view->header(); ?>
</header>

    <?php echo $view->present();?>
</body>
</div>
</html>