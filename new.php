<?php
$open = false;
require 'format.inc.php';
require __DIR__ . '/lib/game.inc.php';
$view = new Clue\IndexView($game);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="lib/clue1.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="index">
        <header>
            <?php echo $view->presentHeader("Who Murdered My Grade?"); ?>
        </header>
        <p>
            <?php echo $view->selectPlayers();?>
        </p>
    </div>

</body>
</html>