<?php
$open=false;
require __DIR__ . '/lib/game.inc.php';
$view = new Clue\ClueView($site, $_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link href="lib/clue1.css" type="text/css" rel="stylesheet" />
    <?echo $view->presentSocket(); ?>

</head>

<body>
    <div class="gamepage">
        <?php echo $view->presentBoard(); ?>

        <footer>
            <p> <a href = "games.php">New Game</a> </p>
        </footer>

    </div>

    <!-- Use the View Class to present the Board Area -->


</body>
</html>
