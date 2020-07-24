<?php
$open = true;
require __DIR__ . '/lib/game.inc.php';
$view = new \Clue\HomeView();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo $view->head(); ?>
</head>
<body>
<div class="index">
<header>

        <?php echo $view->header() ?>
</header>
        <h2>Welcome to Fairgrove's game!</h2>

        <p><a href="videos.html">Here is a link to the videos.</a></p>

        <p><a href="games.php">Click here or 'Game' in the banner to play.</a></p>


        <p><a href="instructions.php">Click here or 'Instructions' in the banner for instructions.</a></p>
    </div>
</body>
</html>