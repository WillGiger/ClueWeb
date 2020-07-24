<?php
$open = true;
require __DIR__ . '/lib/game.inc.php';
$view = new Clue\ValidatePasswordView($site, $_GET);
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

    <?php echo $view->present(); ?>

</div>
</body>
</html>
