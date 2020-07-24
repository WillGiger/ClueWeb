<?php
$open = true;
require __DIR__ . '/lib/game.inc.php';
$view = new \Clue\InstructionsView();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $view->head(); ?>
</head>
<body>
    <div class="instructions">
        <header>
            <?php echo $view->header(); ?>
        </header>

        <?php echo $view->present();?>

    </div>

</body>
</html>